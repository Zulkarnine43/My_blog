<?php

namespace App\Http\Controllers;

use App\registered;
use Illuminate\Http\Request;

class my_blogController extends Controller
{
    //
    public function indexx(){
    	return view ('my_blog.index');
    }

    public function products(){
    	return view ('my_blog.product');
    }

    public function register(){
    	return view('my_blog.registered');
    }
    public function saveInfo(Request $request){
         $row=new registered();
        $row->Username = $request->Username;
        $row->email = $request->email;
        $row->Password=$request->Password;
        $row->ConfirmPassword=$request->ConfirmPassword;
        $row->save();
       //return $request->all();
        return redirect('/registers')->with('message','register successfully');

    }
    public function manageInfo(){
        $categories = registered::all();
        return view ('my_blog.manage',['category'=> $categories]);
    }


     public function logs(){
    	return view('my_blog.logins');
    }


    public function editInfo($id){
        $register=registered::find($id);
        return view('my_blog.edit-category',['regis'=>$register]);

    }

    public function updateInfo(Request $request){
        $row=registered::find($request->regis->id);


        $row->Username = $request->Username;
        $row->email = $request->email;
        $row->Password=$request->Password;
        $row->ConfirmPassword=$request->ConfirmPassword;
        $row->save();
        return redirect('/manage',['message','category info update']);

    }

    public function deleteInfo($id){
        $row=registered::find($id);
        $row=delete();
        return redirect('/manage',['message','category info update']);

    }
}
