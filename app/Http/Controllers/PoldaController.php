<?php

namespace App\Http\Controllers;

use App\Models\Polda;
use Illuminate\Http\Request;
use App\Http\Requests\PoldaRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PoldaController extends Controller
{

    public function data()
    {
        $model = Polda::query();
        return datatables()->eloquent($model)->toJson();
    }

    public function index()
    {
        return view('polda.index');
    }

    public function create()
    {
        return view('polda.create');
    }

    public function store(PoldaRequest $request)
    {
        $data = [
            'name' => request('name'),
            'short_name' => request('short_name'),
            'jurisdiction' => request('jurisdiction'),
            'headquarters' => request('headquarters'),
            'type' => request('type'),
            'official_site' => request('official_site'),
        ];

        if(request()->hasFile('logo')) {
            $file = $request->file('logo');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/polda/".$randomName, File::get($file));
            $data['logo'] = $randomName;
        }

        Polda::create($data);

        flash('Your data has been saved')->success();
        return redirect()->route('polda_index');
    }

    public function show($uuid)
    {
        //
    }

    public function edit($uuid)
    {
        $data = Polda::whereUuid($uuid)->firstOrFail();
        return view('polda.edit', compact('data'));
    }

    public function update(PoldaRequest $request, $uuid)
    {
        $data = [
            'name' => request('name'),
            'short_name' => request('short_name'),
            'jurisdiction' => request('jurisdiction'),
            'headquarters' => request('headquarters'),
            'type' => request('type'),
            'official_site' => request('official_site'),
        ];

        if(request()->hasFile('logo')) {
            $file = $request->file('logo');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/polda/".$randomName, File::get($file));
            $data['logo'] = $randomName;
        }

        Polda::whereUuid($uuid)->update($data);

        flash('Your data has been updated')->success();
        return redirect()->route('polda_index');
    }

    public function destroy($uuid)
    {
        $validation = Polda::has('rencanaOperation')->whereUuid($uuid)->count();

        if($validation > 0) {
            return response()->json([
                'output' => 'This data is still related to other data',
            ], 403);
        } else {
            $data = Polda::whereUuid($uuid)->firstOrFail();

            Storage::delete('/public/upload/polda/'.$data->logo);

            $data->delete();

            return response()->json([
                'output' => 'Your data has been deleted.',
            ], 200);
        }
    }
}
