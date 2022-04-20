<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtcController extends Controller{

    public function fetchFilters(): \Illuminate\Http\JsonResponse
    {

        $years = DB::table("years")->get();
        $branches = DB::table("branches")->get();
        $semesters = DB::table("semesters")->get();

        return response()->json([
            'status' => 200,
            'years' => $years,
            'branches' => $branches,
            'semesters' => $semesters,
        ]);

    }

    public function fetchStudentDetails(Request $req): \Illuminate\Http\JsonResponse
    {

        $tableName = $req->year."_".$req->branch."_".$req->semester;

        $studentDetails = DB::table($tableName)
            ->where("prno", $req->prno)
            ->get()
            ->first();

        return response()->json([
            'status' => 200,
            'studentDetails' => $studentDetails,
        ]);

    }

}
