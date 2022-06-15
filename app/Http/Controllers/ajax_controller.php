<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajax_controller extends Controller
{

    function get_data()
    {
    	return view('ajax1');
    }

    function ajax_data(Request $res)
    {
        // $cat_name = $res->get_data_valu;

        $cat_name = $res->data_cat;
        $name = $res->name;
       
        echo view('ajax')->with('cat_name',$cat_name)->with('name',$name);
    }
}
