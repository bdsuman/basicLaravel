<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeComponent extends Controller
{

    
    public $data = array(
        'name'=>'Suman',
        'mobile'=>'01921440084',
        'address'=>'Sadar, Mymensingh'
    );
    
    public function index(){
        
        return view('admin.home',$this->data);
    }
}
