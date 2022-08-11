<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CAR;
use Carbon\Carbon;

class CARController extends Controller
{
    // public function store()
    // {
    //     $car = Car::all();
    //     // $car = new CAR();

    //     // $car->name = $request->input('name');
    //     // $car->save();

    //     return $car;
    // }

    public function storeCARDetails(Request $request)
    {
        $car = new Car();

        $car->related_issues = $request->input('related_issues');
        $car->rel_issues_others_desc = $request->input('rel_issues_others_desc');


        $car->name = $request->input('name');
        $car->department = $request->input('department');
        $car->date = $request->input('date');
        $car->product_type = $request->input('product_type');
        $car->product_name = $request->input('product_name');
        $car->supplier = $request->input('supplier');
        $car->reject_desc = $request->input('reject_desc');
        $car->reject_qty = $request->input('reject_qty');
        $car->qty = $request->input('qty');
        $car->doc_number = $request->input('doc_number');
        $car->dept_head = $request->input('dept_head');
        $car->classification = $request->input('classification');
        // $car->related_issues = implode('', $request->input('rel_issues'));
        $car->station_detected = $request->input('station_detected');
        $car->created_by = $request->input('created_by');
        $car->supervisor = $request->input('supervisor');
        $car->position = $request->input('position');
        $car->created_at = Carbon::now();
        $car->save();

        return response()->json($request, 200);
        // return redirect()->route('https://fpc-qa.netlify.app/')->withStatus(__('Content Type added'));
    }
}