<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudController extends Controller
{
    public function read(Request $request) {
        $viewData = DB::table('crud-db')->get();
        return view('crudapp')->with('viewData', $viewData);
        
    }
    
    public function create(Request $request) {
        $allData = $request->all();
        $name = $allData['name'];
        $email = $allData['email'];
        $password = $allData['password'];
        DB::table('crud-db')->insert(array('name'=>$name, 'email'=>$email, 'password'=>$password));
        return redirect()->action('App\Http\Controllers\crudController@read');
        
    }

    public function update(Request $request) {
        $allData = $request->all();
        $id = $allData['id'];
        $name = $allData['name'];
        $email = $allData['email'];
        $password = $allData['password'];
        DB::table('crud-db')->where('id', $id)->update(array('name'=>$name, 'email'=>$email, 'password'=>$password));
        return redirect()->action('App\Http\Controllers\crudController@read');
        
    }

    public function delete(Request $request) {
        $allData = $request->all();
        $id = $allData['id'];
        DB::table('crud-db')->where('id', $id)->delete();
        return redirect()->action('App\Http\Controllers\crudController@read');

    }
}

