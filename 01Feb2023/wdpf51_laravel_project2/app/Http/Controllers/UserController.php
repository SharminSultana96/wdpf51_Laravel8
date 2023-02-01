<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(1);
        // dd($users);
        echo $users->name;
        echo "<br>";
        echo $users->phone[0]->phone;
        echo "<br>";
        echo $users->phone[1]->phone;
        // echo "<br>";
        // echo $users->phone->created_at;

        
        
    }

    public function phoneData()
    {
        $phone = Phone::find(1);
        echo "Phone ID: " . $phone->id;
        echo "<br>" . $phone->user->name;
    }
}
