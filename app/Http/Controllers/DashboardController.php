<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\QmrPaper;
use App\Models\QmrNonPaperInk;
use App\Models\CAR;

class DashboardController extends Controller
{
    public function getUsersCount()
    {
        $users_count = User::count();

        return response()->json($users_count);
    }

    public function getQMRPaperCount()
    {
        $qmr_paper_count = QmrPaper::count();

        return response()->json($qmr_paper_count);
    }

    public function getQMRInkCount()
    {
        $qmr_ink_count = QmrNonPaperInk::count();

        return response()->json($qmr_ink_count);
    }

    public function getCARCount()
    {
        $car_count = CAR::count();

        return response()->json($car_count);
    }
}
