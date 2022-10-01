<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QmrNonPaperInk;

class InkController extends Controller
{
    public function getData()
    {
       $qmr_np_ink = QmrNonPaperInk::orderBy('id', 'desc')->get();

       return $qmr_np_ink;
    }

    public function storeInkDetails(Request $request)
    {
        $qmr_np_ink = new QmrNonPaperInk();

        $qmr_np_ink->name = $request->input('name');
        $qmr_np_ink->ink_color = $request->input('ink_color');
        $qmr_np_ink->date = $request->input('date');
        $qmr_np_ink->prod_type = $request->input('prod_type');
        $qmr_np_ink->prod_name = $request->input('prod_name');
        $qmr_np_ink->supplier = $request->input('supplier');
        $qmr_np_ink->qty = $request->input('qty');
        $qmr_np_ink->doc_number = $request->input('doc_number');
        $qmr_np_ink->dept_head = $request->input('dept_head');
        $qmr_np_ink->complete_qty = $request->input('complete_qty');
        $qmr_np_ink->discoloration = $request->input('discoloration');
        $qmr_np_ink->foreign_mat = $request->input('foreign_mat');
        $qmr_np_ink->dent_broken = $request->input('dent_broken');
        $qmr_np_ink->leak = $request->input('leak');
        $qmr_np_ink->liquid_contam = $request->input('liquid_contam');
        $qmr_np_ink->mishandling = $request->input('mishandling');
        $qmr_np_ink->proper_arrangement = $request->input('proper_arrangement');
        $qmr_np_ink->missing_docs = $request->input('missing_docs');
        $qmr_np_ink->signed = $request->input('signed');
        $qmr_np_ink->tampering = $request->input('tampering');
        $qmr_np_ink->docs_contam = $request->input('docs_contam');
        $qmr_np_ink->crumpled = $request->input('crumpled');
        $qmr_np_ink->orig = $request->input('orig');
        $qmr_np_ink->secured = $request->input('secured');

        $qmr_np_ink->save();

        return response()->json($request);
    }

    public function deleteData(Request $request)
    {
        $qmr_np_ink = QmrNonPaperInk::where('id', $request->id)->delete();

        return response()->json($qmr_np_ink);
    }

    public function updateData(Request $request){
        $qmr_np_ink = QmrNonPaperInk::where('id', $request->id);
       
        $qmr_np_ink->name = $request->input('name');
        $qmr_np_ink->ink_color = $request->input('ink_color');
        $qmr_np_ink->date = $request->input('date');
        $qmr_np_ink->prod_type = $request->input('prod_type');
        $qmr_np_ink->prod_name = $request->input('prod_name');
        $qmr_np_ink->supplier = $request->input('supplier');
        $qmr_np_ink->qty = $request->input('qty');
        $qmr_np_ink->doc_number = $request->input('doc_number');
        $qmr_np_ink->dept_head = $request->input('dept_head');
        $qmr_np_ink->complete_qty = $request->input('complete_qty');
        $qmr_np_ink->discoloration = $request->input('discoloration');
        $qmr_np_ink->foreign_mat = $request->input('foreign_mat');
        $qmr_np_ink->dent_broken = $request->input('dent_broken');
        $qmr_np_ink->leak = $request->input('leak');
        $qmr_np_ink->liquid_contam = $request->input('liquid_contam');
        $qmr_np_ink->mishandling = $request->input('mishandling');
        $qmr_np_ink->proper_arrangement = $request->input('proper_arrangement');
        $qmr_np_ink->missing_docs = $request->input('missing_docs');
        $qmr_np_ink->signed = $request->input('signed');
        $qmr_np_ink->tampering = $request->input('tampering');
        $qmr_np_ink->docs_contam = $request->input('docs_contam');
        $qmr_np_ink->crumpled = $request->input('crumpled');
        $qmr_np_ink->orig = $request->input('orig');
        $qmr_np_ink->secured = $request->input('secured');


        $qmr_np_ink->update([
            'name' => $qmr_np_ink->name,
            'ink_color' => $qmr_np_ink->ink_color,
            'date' => $qmr_np_ink->date,
            'prod_type' => $qmr_np_ink->prod_type,
            'prod_name' => $qmr_np_ink->prod_name,
            'supplier' => $qmr_np_ink->supplier,
            'qty' => $qmr_np_ink->qty,
            'doc_number' => $qmr_np_ink->doc_number,
            'dept_head' => $qmr_np_ink->dept_head,
            'complete_qty' => $qmr_np_ink->complete_qty,
            'discoloration' => $qmr_np_ink->discoloration,
            'foreign_mat' => $qmr_np_ink->foreign_mat,
            'dent_broken' => $qmr_np_ink->dent_broken,
            'leak' => $qmr_np_ink->leak,
            'liquid_contam' => $qmr_np_ink->liquid_contam,
            'mishandling' => $qmr_np_ink->mishandling,
            'proper_arrangement' => $qmr_np_ink->proper_arrangement,
            'missing_docs' => $qmr_np_ink->missing_docs,
            'signed' => $qmr_np_ink->signed,
            'tampering' => $qmr_np_ink->tampering,
            'docs_contam' => $qmr_np_ink->docs_contam,
            'crumpled' => $qmr_np_ink->crumpled,
            'orig' => $qmr_np_ink->orig,
            'secured' => $qmr_np_ink->secured,
        ]);
        return response()->json($qmr_np_ink);
    }
}
