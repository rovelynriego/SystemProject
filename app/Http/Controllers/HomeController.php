<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
	/*
	 public function index(){
    	return view('index');
    }
    public function elements(){
    	return view('elements');
    }
    public function generic(){
    	return view('generic');
    }
*/

  

//Login And Register
 public function loginpage(){
    	return view('loginpage');
    }

 public function insertData( Request  $request){

 	$username=$request->input('username');
 	$password=$request->input('password');


 	DB:: INSERT ("INSERT into tblogin (username,password)VALUES (?,?)",[$username,$password]);
    	return view('loginpage');
    }
 public function register(){

 		
    	return view('register');
    }














//Products
     public function accessories(){
    	return view('accessories');
    }
     public function insertb( Request  $request){

 	$ProName=$request->input('B_pro');
 	$Quantity=$request->input('B_qty');
 	$Price=$request->input('B_pr');
 	$Total=$request->input('B_total');


 	DB:: INSERT ("INSERT into products (ProName,Quantity,Price,Total)VALUES (?,?,?,?)",[$ProName,$Quantity,$Price,$Total]);
    	return view('accessories');
    }












     public function bfast(){
    	return view('bfast');
    }
	 public function insertbf( Request  $request){
 	$ProName=$request->input('B_pro');
 	$Quantity=$request->input('B_qty');
 	$Price=$request->input('B_pr');
 	$Total=$request->input('B_total');


 	DB:: INSERT ("INSERT into products (ProName,Quantity,Price,Total)VALUES (?,?,?,?)",[$ProName,$Quantity,$Price,$Total]);
    	return view('bfast');
    }
























     public function biscuitd(){
    	return view('biscuits');
    }
     public function cannedf(){
    	return view('cannedf');
    }
    
     public function chocolates(){
    	return view('chocolates');
    }
     public function dairyandmilk(){
    	return view('dairyandmilk');
    }
     public function frozen(){
    	return view('frozen');
    }
     public function juices(){
    	return view('juices');
    }
     public function junkfoods(){
    	return view('junkfoods');
    }
     public function minigrocery(){
    	return view('minigrocery');
    }
     public function schoolsupplies(){
    	return view('schoolsupplies');
    }
     public function soap(){
    	return view('soap');
    }
     public function softdrinks(){
    	return view('softdrinks');
    }

    //account,update,inventory

     public function account(){
    	return view('account');
    } 
    public function update(){
    	return view('update');
    }
     public function inventory(){
    	return view('inventory');
    }























}
