<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
class UserController extends Controller
{
    //
    public function insert()
    {
       $phone=new Phone();
       $phone->phone="1234567890";

       $user=new User();
       $user->name="ram";
       $user->email="ramu@gmail.com";
       $user->password=encrypt('secret');
       $user->save();
       $user->phone()->save($phone);
       return "data saved";

    }


    public function getNumber($id)
    {
        # code...
        $ph=User::find($id)->phone;
        return $ph;
    }
}
