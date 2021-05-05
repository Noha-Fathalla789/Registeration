<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::get();
        return view("register.index")->with('user',$user);
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('register.edit')->with('user',$user);
    }

    public function update(Request $request,$id,$name="")
    { 
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);
        $user=User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->Save();
        return redirect("/user/index");
    }

    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect("/user/index");
    }
}
