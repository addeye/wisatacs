<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test(){
        return "Testing successful!";
    }

    public function testById($id){
        return "Testing successful for ID: " . $id;
    }

    public function testByIdEdit($id){
        return "Editing test for ID: " . $id;
    }
}
