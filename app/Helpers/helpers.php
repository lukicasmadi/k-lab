<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\UserHasPolda;
use App\Models\PoldaSubmited;
use App\Models\RencanaOperasi;

if (! function_exists('humanDateRead')) {
    function humanDateRead($date) {
        return Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
    }
}

if (! function_exists('dayNameIndonesia')) {
    function dayNameIndonesia($timestamp) {
        return Carbon::parse($timestamp)->isoFormat('dddd');
    }
}

if (! function_exists('indonesianDate')) {
    function indonesianDate($timestamp) {
        return Carbon::parse($timestamp)->format('d M Y');
    }
}

if (! function_exists('indonesianDateTime')) {
    function indonesianDateTime($timestamp) {
        return Carbon::parse($timestamp)->format('d M Y h:i:s A');
    }
}

if (! function_exists('dateOnly')) {
    function dateOnly($timestamp) {
        return Carbon::parse($timestamp)->format('Y-m-d');
    }
}

if (! function_exists('timeOnly')) {
    function timeOnly($timestamp) {
        return Carbon::parse($timestamp)->format('h:i:s A');
    }
}

if (! function_exists('incrementDays')) {
    function incrementDays($timestamp, $days) {
        return Carbon::parse($timestamp)->addDays($days);
    }
}

if (! function_exists('indonesianStandart')) {
    function indonesianStandart($timestamp) {
        return Carbon::parse($timestamp)->format('d-m-Y');
    }
}

if (! function_exists('countDays')) {
    function countDays($start, $end) {
        return Carbon::parse($end)->diffInDays($start);
    }
}

if (! function_exists('toStrip')) {
    function toStrip($string) {
        return ($string == '' || is_null($string) || empty($string)) ? '-' : $string;
    }
}

if (! function_exists('genUuid')) {
    function genUuid() {
        return Str::uuid();
    }
}

if (! function_exists('userGetRandom')) {
    function userGetRandom() {
        return User::all()->random()->id;
    }
}

if (! function_exists('myUserId')) {
    function myUserId() {
        if(empty(auth()->user())) {
            return null;
        } else {
            return auth()->user()->id;
        }
    }
}

if (! function_exists('myName')) {
    function myName() {
        return auth()->user()->name;
    }
}

if (! function_exists('authUser')) {
    function authUser() {
        return auth()->user();
    }
}

if (! function_exists('operationPlans')) {
    function operationPlans() {
        $now = now()->format('Y-m-d');
        $checkOperasi = RencanaOperasi::where("start_date", "<=", $now)->where("end_date", ">=", $now)->first();
        if(empty($checkOperasi)) {
            return null;
        } else {
            return $checkOperasi;
        }
    }
}

if (! function_exists('isAdmin')) {
    function isAdmin() {
        $user = auth()->user();
        if($user->hasRole('administrator')) {
            return true;
        }
        return false;
    }
}

if (! function_exists('isPusat')) {
    function isPusat() {
        $user = auth()->user();
        if($user->hasRole('access_pusat')) {
            return true;
        }
        return false;
    }
}

if (! function_exists('isPolda')) {
    function isPolda() {
        $user = auth()->user();
        if($user->hasRole('access_daerah')) {
            return true;
        }
        return false;
    }
}

if (! function_exists('checkUserHasAssign')) {
    function checkUserHasAssign() {
        if(empty(auth()->user()->polda()->first())) {
            return "belum";
        } else {
            return "sudah";
        }
    }
}

if (! function_exists('poldaId')) {
    function poldaId() {
        return auth()->user()->polda()->first()->polda_id;
    }
}

if (! function_exists('poldaImage')) {
    function poldaImage() {
        return UserHasPolda::with('polda')->where("polda_id", poldaId())->first();
    }
}

if (! function_exists('poldaAlreadyInputToday')) {
    function poldaAlreadyInputToday() {
        if(isPolda()) {
            $now = now()->format('Y-m-d');
            $submited = PoldaSubmited::where("submited_date", $now)->where('polda_id', poldaId())->first();
            if(empty($submited)) {
                return false;
            } else {
                return true;
            }
        }
    }
}

if (! function_exists('hariIni')) {
    function hariIni() {
        return now()->format("d-m-Y");
    }
}

if (! function_exists('calculation')) {
    function calculation($arrayData) {
        return array_sum($arrayData);
    }
}

if (! function_exists('percentageValue')) {
    function percentageValue($tahunKedua, $tahunPertama) {
        $output1 = $tahunKedua - $tahunPertama;
        $output2 = $output1 / $tahunPertama;
        $output3 = $output2 * 100;
        $output4 = round($output3, 2);

        return $output4;
    }
}

if (! function_exists('percentageStatus')) {
    function percentageStatus($tahunKedua, $tahunPertama) {

        if($tahunKedua > $tahunPertama) {
            $tanda = "NAIK";
        } else if($tahunKedua < $tahunPertama) {
            $tanda = "TURUN";
        } else if($tahunKedua == $tahunPertama) {
            $tanda = "SAMA";
        } else {
            $tanda = "";
        }

        return $tanda;
    }
}