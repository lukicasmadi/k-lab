<?php

namespace App\Http\Controllers;

use App\Models\Polda;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Models\PoldaSubmited;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function weeklyPolda()
    {
        $project_start = dateOnly(operationPlans()->start_date);
        $project_end = dateOnly(operationPlans()->end_date);
        $project_one_week = dateOnly(incrementDays($project_start, 7));

        $model = PoldaSubmited::whereBetween('submited_date', [$project_start, $project_one_week])->where("polda_id", poldaId())->count();

        $countDaysAWeek = countDays($project_start, $project_one_week);

        if(empty($model)) {
            $data = [
                "filled" => 0,
                "nofilled" => 100
            ];
        } else {
            $percentage = round((100 * $model) / $countDaysAWeek);
            $data = [
                "filled" => $percentage,
                "nofilled" => 100 - $percentage
            ];
        }

        return $data;
    }

    public function fullPolda()
    {
        $project_start = dateOnly(operationPlans()->start_date);
        $project_end = dateOnly(operationPlans()->end_date);

        $model = PoldaSubmited::whereBetween('submited_date', [$project_start, $project_end])->where("polda_id", poldaId())->count();

        $countDaysAll = countDays($project_start, $project_end);

        if(empty($model)) {
            $data = [
                "filled" => 0,
                "nofilled" => 100
            ];
        } else {
            $percentage = round((100 * $model) / $countDaysAll);
            $data = [
                "filled" => $percentage,
                "nofilled" => 100 - $percentage
            ];
        }

        return $data;
    }

    public function data()
    {
        $model = PoldaSubmited::perpolda()->with(['polda', 'rencanaOperasi']);

        return datatables()->eloquent($model)
        ->addColumn('operation_name', function (PoldaSubmited $ps) {
            return $ps->rencanaOperasi->name;
        })
        ->addColumn('time_created', function (PoldaSubmited $ps) {
            return timeOnly($ps->created_at);
        })
        ->addColumn('polda_name', function (PoldaSubmited $ps) {
            return $ps->polda->name;
        })
        ->toJson();
    }

    public function index()
    {
        return view('info');
    }

    public function notAssign()
    {
        return view('not_assign');
    }

    public function dashboard()
    {
        if(isPolda()) {
            if(checkUserHasAssign() == "belum") {
                return redirect()->route('notAssign');
            }
        }

        if(empty(operationPlans())) {
            return view('empty_project');
        }

        if(isPolda()) {
            return view('polda');
        } else {
            $polda = Polda::select("id", "uuid", "name", "short_name", "logo")
                ->with(['dailyInput' => function($query) {
                    $query->where(DB::raw('DATE(created_at)'), date("Y-m-d"));
                }])
                ->orderBy("name", "asc")
                ->get();

            $dailyInput = Polda::with(['dailyInput' => function($query) {
                $query->where(DB::raw('DATE(created_at)'), date("Y-m-d"));
            }])->orderBy("name", "asc")->get();

            return view('main', compact('polda', 'dailyInput'));
        }
    }

    public function notifikasi()
    {
        $model = PoldaSubmited::with(['polda' => function($query) {
            $query->select('id', 'name', 'uuid', 'logo');
        }])->where("submited_date", date("Y-m-d"))->get();

        return $model;
    }

    public function donut()
    {
        $model = PoldaSubmited::where("submited_date", date("Y-m-d"))->count();

        if(empty($model)) {
            $data = [
                "filled" => 0,
                "nofilled" => 100
            ];
        } else {
            $percentage = round((100 * $model) / 34);
            $data = [
                "filled" => $percentage,
                "nofilled" => 100 - $percentage
            ];
        }

        return $data;
    }

    public function dailycheck()
    {
        $model = Polda::with(['dailyInput' => function($query) {
            $query->where(DB::raw('DATE(created_at)'), date("Y-m-d"));
        }])->orderBy("name", "asc");

        return datatables()->eloquent($model)
        ->addColumn('has_submited', function (Polda $polda) {
            if(empty($polda->dailyInput)) {
                return "BELUM MENGIRIMKAN LAPORAN";
            } else {
                if($polda->dailyInput->submited_date->format('Y-m-d') != date("Y-m-d")) {
                    return "BELUM MENGIRIMKAN LAPORAN";
                } else {
                    return "SUDAH MENGIRIMKAN LAPORAN";
                }
            }
        })->toJson();
    }

    public function dashboardChart()
    {
        $projectRunning = operationPlans();

        $period = CarbonPeriod::create($projectRunning->start_date, $projectRunning->end_date);

        $rangeDate = [];
        $totalPerDate = [];

        foreach ($period as $date) {
            array_push($rangeDate, $date->format('Y-m-d'));
        }

        foreach($rangeDate as $d) {
            $total =  DB::table('polda_submiteds')->where('submited_date', $d)->count();

            if($total == 0) {
                array_push($totalPerDate, 0);
            } else {
                array_push($totalPerDate, $total);
            }
        }

        return response()->json([
            'rangeDate' => $rangeDate,
            'totalPerDate' => $totalPerDate,
            'projectName' => $projectRunning->name
        ], 200);
    }
}
