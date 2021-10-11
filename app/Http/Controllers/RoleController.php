<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
class RoleController extends Controller
{
    //
    public function addrole()
    {
        # code...
        // $role=new Role();
        $roles=[
            ['name'=>"Admin"],
            ['name'=>"Edittor"],
            ['name'=>"Author"],
            ['name'=>"Contribution"],
            ['name'=>"Subscribers"]

        ];
        Role::insert($roles);
        return "inserted";
    }
    public function addUser()
    {
        # code...
        $user=new User();
        $user->name="muthu";
        $user->email="muthu1@gmail.com";
        $user->password=encrypt('secret');
        $user->save();

        $roleid=[2,3,4];
        $user->roles()->attach($roleid);
        return "record created";
    }
    public function getAllRolesByuser($id)
    {
        # code...
        $usr=User::find($id);
        $roles=$usr->roles;
        return $roles;
    }
    public function getAllRolesByRole($id)
    {
        # code...
        $role=Role::find($id);
        $usr=$role->users;
        return $usr;
    }
}
