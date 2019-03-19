<?php

namespace App\Http\Controllers\Backend;

use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class marksheetController extends Controller
{
    public function show()
    {
        return view('backend.view_marksheet');

    }

    public function export()
    {

        $pdf = PDF::loadView('backend.marksheetpdf');
        return $pdf->download('marksheet.pdf');
    }
}
