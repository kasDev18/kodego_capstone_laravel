<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CAR;
use Carbon\Carbon;

class CARController extends Controller
{
    public function getData()
    {
        $car = CAR::where('deleted', '0');
        $car->deleted = 0;

        return $car;
    }

    public function storeCARDetails(Request $request)
    {
        $car = new CAR();

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
        $car->station_detected = $request->input('station_detected');
        $car->created_by = $request->input('created_by');
        $car->supervisor = $request->input('supervisor');
        $car->position = $request->input('position');
        $car->created_at = Carbon::now();
        $car->save();

        return response()->json($request, 200);
    }

    public function deleteData(Request $request){ 
        $car = CAR::where('id',$request->id)->delete();
        return response()->json($car);
    }

    public function updateData(Request $request){
        $car = CAR::where('id', $request->id);

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
        $car->station_detected = $request->input('station_detected');
        $car->created_by = $request->input('created_by');
        $car->supervisor = $request->input('supervisor');
        $car->position = $request->input('position');

        $car->update([
            'name' => $car->name,
            'department' => $car->department,
            'date' => $car->date,
            'product_type' => $car->product_type,
            'product_name' => $car->product_name,
            'supplier' => $car->supplier,
            'reject_desc' => $car->reject_desc,
            'reject_qty' => $car->reject_qty,
            'qty' => $car->qty,
            'doc_number' => $car->doc_number,
            'dept_head' => $car->dept_head,
            'classification' => $car->classification,
            'station_detected' => $car->station_detected,
            'created_by' => $car->created_by,
            'supervisor' => $car->supervisor,
            'position' => $car->position,
            'related_issues' => $car->related_issues,
            'rel_issues_others_desc' => $car->rel_issues_others_desc,
        ]);
        return response()->json($car);
    }
}