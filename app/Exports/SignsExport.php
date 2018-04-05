<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use App\Sign;

class SignsExport implements FromView, ShouldAutoSize
{
   public function view(): View
    {
        $signs = Sign::orderBy('klasa', 'asc')->get();
        return view('exports.signs', [
            'signs' => $signs->all()
        ]);
    }
}