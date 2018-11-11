<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sevice;
use DB;
class SeviceController extends Controller
{
    public function show_services(){
    $cat=DB::table('catogeries')->get();
    $cities=DB::table('cities')->get();
    return view('admin.Add_Service',compact('cat'),compact('cities'));

    }
    public function Add_service(Request $request){

        //take object from model
        $sevices_object =new sevice();
        //make variable of Request’s file
        $logo=$request->file("logo");

        $name=time().$logo->getClientOriginalName();
        $path=public_path('logos');
        $logo->move($path,$name);
        //take request and put it in the object
        $sevices_object->name=$request->name;
        $sevices_object->ShortDescription=$request->short;
        $sevices_object->description=$request->long_desc;
        $sevices_object->lat=$request->lat;
        $sevices_object->long=$request->lng;
        $date=date('Y-m-d H:i:s');
        $sevices_object->created_at=$date;
        $sevices_object->updated_at=$date;
        /////////////////
        $sevices_object->pic=$name;


        $sevices_object->save();
             $sevices_object->cities()->sync($request->city);
        $sevices_object->catogery()->sync($request->cat);
        return back()->with('alert', 'Done!');



    }
}
