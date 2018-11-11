<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cities;

class CitiesController extends Controller
{
    public function insertcity(Request $request){
        //make Validation
       $validatedData= $request->validate([
            'ar'=>'required',
            'en'=>'required',


        ]);

        //take object of model
        $cities_object=new cities();
        $cities_object->name_ar=$request->ar;
       $cities_object->name_en= $request->en;
         //take date to set in update and created at
         $date=date('Y-m-d H:i:s');
         $cities_object->created_at=$date;
         $cities_object->updated_at=$date;

         $cities_object->save();

         return back()->with('alert', 'Done!');



    }
}
