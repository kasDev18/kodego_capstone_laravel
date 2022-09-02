<?php

namespace App\Http\Controllers;
use App\Models\QmrPaper;

use Illuminate\Http\Request;

class QMRPaperController extends Controller
{
    public function getData()
    {
        $qmr_paper = QmrPaper::all();

        return $qmr_paper;
    }

    public function storeQMRPaperDetails(Request $request)
    {
        $qmr_paper = new QMRPaper();

        $qmr_paper->name = $request->input('name');
        $qmr_paper->dept_name = $request->input('dept_name');
        $qmr_paper->date = $request->input('date');
        $qmr_paper->prod_type = $request->input('prod_type');
        $qmr_paper->prod_name = $request->input('prod_name');
        $qmr_paper->supplier = $request->input('supplier');
        $qmr_paper->qty = $request->input('qty');
        $qmr_paper->doc_number = $request->input('doc_number');
        $qmr_paper->dept_head = $request->input('dept_head');
        $qmr_paper->scratch = $request->input('scratch');
        $qmr_paper->spot = $request->input('spot');
        $qmr_paper->contamination = $request->input('contamination');
        $qmr_paper->discoloration = $request->input('discoloration');
        $qmr_paper->odor = $request->input('odor');
        $qmr_paper->hole = $request->input('hole');
        $qmr_paper->foreign_mat = $request->input('foreign_mat');
        $qmr_paper->missing_qty = $request->input('missing_qty');
        $qmr_paper->mishandling = $request->input('mishandling');
        $qmr_paper->proper_arrangement = $request->input('proper_arrangement');
        $qmr_paper->missing_docs = $request->input('missing_docs');
        $qmr_paper->signed = $request->input('signed');
        $qmr_paper->tampering = $request->input('tampering');
        $qmr_paper->liquid_contamination = $request->input('liquid_contamination');
        $qmr_paper->crumpled = $request->input('crumpled');
        $qmr_paper->orig_docs = $request->input('orig_docs');
        $qmr_paper->secured = $request->input('secured');

        $qmr_paper->save();
        
        return response()->json($request);
    }

    public function deleteData(Request $request)
    {
       $qmr_paper = QmrPaper::where('id', $request->id)->delete();

       return response()->json($qmr_paper);
    }

    public function updateData(Request $request){
        $qmr_paper = QmrPaper::where('id', $request->id);
       
        $qmr_paper->name = $request->input('name');
        $qmr_paper->dept_name = $request->input('dept_name');
        $qmr_paper->date = $request->input('date');
        $qmr_paper->prod_type = $request->input('prod_type');
        $qmr_paper->prod_name = $request->input('prod_name');
        $qmr_paper->supplier = $request->input('supplier');
        $qmr_paper->qty = $request->input('qty');
        $qmr_paper->doc_number = $request->input('doc_number');
        $qmr_paper->dept_head = $request->input('dept_head');
        $qmr_paper->scratch = $request->input('scratch');
        $qmr_paper->spot = $request->input('spot');
        $qmr_paper->contamination = $request->input('contamination');
        $qmr_paper->discoloration = $request->input('discoloration');
        $qmr_paper->odor = $request->input('odor');
        $qmr_paper->hole = $request->input('hole');
        $qmr_paper->foreign_mat = $request->input('foreign_mat');
        $qmr_paper->missing_qty = $request->input('missing_qty');
        $qmr_paper->mishandling = $request->input('mishandling');
        $qmr_paper->proper_arrangement = $request->input('proper_arrangement');
        $qmr_paper->missing_docs = $request->input('missing_docs');
        $qmr_paper->signed = $request->input('signed');
        $qmr_paper->liquid_contamination = $request->input('liquid_contamination');
        $qmr_paper->tampering = $request->input('tampering');
        $qmr_paper->crumpled = $request->input('crumpled');
        $qmr_paper->orig_docs = $request->input('orig_docs');
        $qmr_paper->secured = $request->input('secured');

        $qmr_paper->update([
            'name' => $qmr_paper->name,
            'dept_name' => $qmr_paper->dept_name,
            'date' => $qmr_paper->date,
            'prod_type' => $qmr_paper->prod_type,
            'prod_name' => $qmr_paper->prod_name,
            'supplier' => $qmr_paper->supplier,
            'qty' => $qmr_paper->qty,
            'doc_number' => $qmr_paper->doc_number,
            'dept_head' => $qmr_paper->dept_head,
            'scratch' => $qmr_paper->scratch,
            'spot' => $qmr_paper->spot,
            'contamination' => $qmr_paper->contamination,
            'discoloration' => $qmr_paper->discoloration,
            'odor' => $qmr_paper->odor,
            'hole' => $qmr_paper->hole,
            'foreign_mat' => $qmr_paper->foreign_mat,
            'missing_qty' => $qmr_paper->missing_qty,
            'mishandling' => $qmr_paper->mishandling,
            'proper_arrangement' => $qmr_paper->proper_arrangement,
            'missing_docs' => $qmr_paper->missing_docs,
            'signed' => $qmr_paper->signed,
            'tampering' => $qmr_paper->tampering,
            'liquid_contamination' => $qmr_paper->liquid_contamination,
            'crumpled' => $qmr_paper->crumpled,
            'orig_docs' => $qmr_paper->orig_docs,
            'secured' => $qmr_paper->secured,
        ]);
        return response()->json($qmr_paper);
    }
}