<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Easy;

class PackController extends Controller
{
    public function store(Request  $request){
   	// dd($request->all());
   	$Easy = new Easy();
   	$Easy->name=$request->name;
   	$Easy->email=$request->email;
   	$Easy->password=$request->password;
   	$Easy->Mobile_number=$request->Mobile_number;
   	$Easy->save();
   	return redirect('/read_user');
   }
   public function read(Request  $request){
   	$service=Easy::all();
   	// dd($service);
   	return view('read' , compact('service'));
   }
   public function delete(Request  $request , $id){
   	// dd($id);
   	$service=Easy::where('id' , $id)->first();
   	// dd($service);
   	$service->delete();
   	return redirect('/read_user');
   }
   public function edit(Request  $request , $id){
      // dd($id);
      $service=Easy::where('id' , $id)->first();
      // dd($service);
      return view('edit' , compact('service'));
   }
    public function update(Request  $request , $id){
      // dd($request->all());
      $Easy = Easy::where('id' , $id)->first();
      $Easy->name=$request->name;
      $Easy->email=$request->email;
      $Easy->password=$request->password;
      $Easy->Mobile_number=$request->Mobile_number;
      $Easy->save();
      return redirect('/read_user');
   }




}
