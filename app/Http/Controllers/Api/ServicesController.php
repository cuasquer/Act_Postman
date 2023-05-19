<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Country;
use App\Models\School;
use App\Models\User;



class ServicesController extends Controller
{

    public function solution2($country_id) {
        try {
          $departments = Department::select('name')->where('country_id', $country_id)->count();
          return response()->json([
             $departments
          ],200);
        } catch (\Throwable $th) {
          return response()->json([
              'errors'=> $th
           ],400);
        }
  }
  public function solution1($country_id) {
            try {
              $departments = Department::select('name')->where('country_id', $country_id)->get();
              return response()->json([
                 $departments
              ],200);
            } catch (\Throwable $th) {
              return response()->json([
                  'errors'=> $th
               ],400);
            }
      }
 
  public function solution3($country_id) {
            try {
              $Schools = School::select('name')->where('country_id', $country_id)->get();
              return response()->json([
                 $Schools
              ],200);
            } catch (\Throwable $th) {
              return response()->json([
                  'errors'=> $th
               ],400);
            }
      }
 
      public function solution4($school_id) {
        try {
          $usuarios = User::select('name','lastname')->where('school_id', $school_id)->get();
          return response()->json([
             $usuarios
          ],200);
        } catch (\Throwable $th) {
          return response()->json([
              'errors'=> $th
           ],400);
        }
  }

  public function solution5($country_id) {
    try {
        $usuarios = User::select('name','lastname')->where('country_id', $country_id)->count();
      return response()->json([
         $usuarios
      ],200);
    } catch (\Throwable $th) {
      return response()->json([
          'errors'=> $th
       ],400);
    }
}

public function solution6($search) {
    try {
        $email = User::select('name','lastname','email')->where('email', $search)->count();
      return response()->json([
         $email
      ],200);
    } catch (\Throwable $th) {
      return response()->json([
          'errors'=> $th
       ],400);
    }
}

public function solution7($country_id) {
    try {
        $usuarios = User::select('name','lastname')->where('country_id', $country_id)->count();
      return response()->json([
         $usuarios
      ],200);
    } catch (\Throwable $th) {
      return response()->json([
          'errors'=> $th
       ],400);
    }
}

public function solution8($country_id) {
    try {
        $usuarios = User::select('name','lastname')->where('country_id', $country_id)->count();
      return response()->json([
         $usuarios
      ],200);
    } catch (\Throwable $th) {
      return response()->json([
          'errors'=> $th
       ],400);
    }
}

      //
}
