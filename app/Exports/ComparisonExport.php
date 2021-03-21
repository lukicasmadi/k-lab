<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ComparisonExport implements FromView
{

    public function __construct($tahunPertama, $tahunKedua, $operation)
    {
        $this->tahunPertama = $tahunPertama;
        $this->tahunKedua = $tahunKedua;
        $this->operation = $operation;
    }

    public function view(): View
    {
        return view('exports.report_comparison', [
            'tahunPertama' => $this->tahunPertama,
            'tahunKedua' => $this->tahunKedua,
            'operation' => $this->operation
        ]);
    }
}
