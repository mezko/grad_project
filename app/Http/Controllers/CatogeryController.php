<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catogery;
class CatogeryController extends Controller
{
     public function insertcatogery(Request $request){
        //take object of model
        $cat=new catogery();
        $cat->name_ar=$request->ar;
        $cat->name_en=$request->en;
           $date=date('Y-m-d H:i:s');
         $cat->created_at=$date;
         $cat->updated_at=$date;
         $cat->save();


         return back()->with('alert', 'Done!');
     }
}
