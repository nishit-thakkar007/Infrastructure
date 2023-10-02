<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function login_form()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $userFound = admin::where('email',"=",$req->email)->first(); 
        if($userFound)
        {
            if(md5($req->password)  == $userFound->password)
            {
                $req->session()->put('adminid',$userFound->id);
                return redirect('index');
            }
            else
            {
                return back()->with('fail','password does not match');
            }
        }
        else
            {
                return back()->with('fail','Email or Password does not found');
            }
    }

    public function logout()
    {
        if(Session()->has('adminid'))
        {
            Session()->pull('adminid');
            return redirect('admin-login');
        }
        else
        {
            return redirect('admin-login');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'desig'=>'required',
            'username'=>'required',
            'password'=>'required|min:6',
        ]);
        $user=new admin;
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->designation=$request['desig'];
        $user->username=$request['username'];
        $user->password=md5($request['password']);
        $user->save();
        return redirect('/');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
