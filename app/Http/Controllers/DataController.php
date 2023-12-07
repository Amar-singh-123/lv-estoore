<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
   public function index(){
    $data = [
        [
            "id" => "01",
            "name" => "amar singh",
            "age" => "18",
        ],
        [
            "id" => "02",
            "name" => "Ram singh",
            "age" => "18",
        ],
        [
            "id" => "03",
            "name" => "Raushan singh",
            "age" => "18",
        ],
        [
            "id" => "04",
            "name" => "Vijay singh",
            "age" => "18",
        ],
    ];

 
    return $data;
  }
}
