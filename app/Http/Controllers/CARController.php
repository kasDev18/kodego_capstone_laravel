<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CAR;

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

    public function store(Request $request)
    {
        $car = new Car();

        $car->name = $request->input('name');
        $car->department = $request->input('department');
        $car->date = $request->input('date');
        $car->product_type = $request->input('product_type');
        $car->product_name = $request->input('product_name');
        $car->supplier = $request->input('supplier');
        $car->reject_desc = $request->input('reject_desc');
        $car->reject_qty = $request->input('qty');
        $car->doc_number = $request->input('doc_number');
        $car->dept_head = $request->input('dept_head');
        $car->save();

        return response()->json($request, 200);
        // return redirect()->route('car')->withStatus(__('Content Type added'));
    }
}