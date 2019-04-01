<?php

namespace App\Http\Controllers\Frontend;

use App\item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
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

