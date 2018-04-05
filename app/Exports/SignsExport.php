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

        $signs = $signs->sortBy(function ($sign, $key) {
            switch ($sign['klasa']) {
                case 'K4':
                    return 1;
                    break;
                case 'K7':
                    return 2;
                    break;
                case 'K3':
                    return 3;
                    break;
                case 'K2':
                    return 4;
                    break;
                case 'K1':
                    return 5;
                    break;
                case 'K6':
                    return 6;
                    break;
                case 'K5':
                    return 7;
                    break;
                default:
                    return 1;
                    break;
            }
        });

        return view('exports.signs', [
            'signs' => $signs->all()
        ]);
    }
}