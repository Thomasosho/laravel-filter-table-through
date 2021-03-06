<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SpecialController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_state))
      {
       $data = DB::table('specials')
         ->select('title', 'state', 'typeintervention', 'year', 'quality', 'totalcost', 'actualcost')
         ->where('state', $request->filter_state)
         ->where('typeintervention', $request->filter_typeintervention)
         ->where('year', $request->filter_year)
         ->where('quality', $request->filter_quality)
         ->where('totalcost', $request->filter_totalcost)
         ->where('actualcost', $request->filter_actualcost)
         ->get();
      }
      else
      {
       $data = DB::table('specials')
         ->select('title', 'state', 'typeintervention', 'year', 'quality', 'totalcost', 'actualcost')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $state_name = DB::table('specials')
          ->select('state')
          ->groupBy('state')
          ->orderBy('state', 'ASC')
          ->get();
     return view('custom_search3', compact('state_name'));
    }
}
