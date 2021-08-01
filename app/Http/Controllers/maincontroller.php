<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carii;

class maincontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function indexx(){
        return view('form');
    }
    public function indexxx(){
        return view('done');
    }
    public function store(request $request){
        $car = new Carii;
        $car->name = $request->name;
        $car->lastnamee = $request->lastnamee;
        $car->address = $request->address;
        $car->phone = $request->phone;
        $car->select = $request->select;


        $car->save();

       return redirect('/done');
    }
    public function indexxxx(){
        return view('orders');
    }
    public function indexxxxx(){
        $cars = Carii::all()->toArray();
        return view ('/orders', compact('cars'));
    }
   
    public function destroy($id){
        $cars = Carii::findOrFail($id);
        $cars->delete();
        return redirect('/orders');
    }
}