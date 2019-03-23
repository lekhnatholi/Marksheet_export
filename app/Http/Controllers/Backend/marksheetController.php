<?php

namespace App\Http\Controllers\Backend;

use App\item;
use function foo\func;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\DB;
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

    public function ExportClients()
    {
//        Excel::store('clients',function ($excel){
//           $excel->sheet('clients',function ($sheet)
//           {
//              $sheet->loadView('ExportClients');
//           });
//        })->export('xlsx');

        $data= DB::table('items')->get();
        $excel= Excel::loadView('backend.exportClients');
        return $excel->download('items.xlsl');
    }




    public function importExport()

    {
        return view('backend.import_export');
    }

    public function downloadExcel($type)
    {
        $data = item::get()->toArray();


        return Excel::create('itsolutionstuff_example', function($excel) use ($data) {

            $excel->sheet('mySheet', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

    }

    public function importExcel(Request $request)

    {

        $request->validate([

            'import_file' => 'required'

        ]);



        $path = $request->file('import_file')->getRealPath();

        $data = Excel::load($path)->get();



        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = ['title' => $value->title, 'description' => $value->description];

            }

            if(!empty($arr)){

                Item::insert($arr);

            }

        }

        return back()->with('success', 'Insert Record successfully.');

    }


}
