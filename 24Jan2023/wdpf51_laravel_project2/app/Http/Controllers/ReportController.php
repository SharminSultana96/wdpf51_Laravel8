<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function Report1()
    {
        // $data = DB::table('products')->get();

        $data = DB::table('products')->where('product_category', 3)->get();
        echo $data->count();
        echo "<pre>";
        print_r($data);
    }
}
