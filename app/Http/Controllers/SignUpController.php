<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Mail;
use Session;
class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('index');
    }

    public function home()
    {
        return view ('home');
    }
  
    public function portfolio()
    {
        return view ('portfolio');
    }

    public function contact()
    {
        return view ('contact');
    }

    public function log()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
           
             'Name' => 'required',
             'Email' => 'required|',// unique:signup
            'Pwd'=>'required|min:4',
           

        ]);
       
        $signup = new SignUp;
        $signup->Name=$request['Name'];
        $signup->Email=$request['Email'];
        $signup->Pwd=md5($request['Pwd']);

       
        $signup->save();
        return redirect('/dashboard');
    }
    public function login(Request $req)
   
    {
        $req->validate([
           
            'Email' => 'required|Email',
            'Pwd' => 'required',
           

        ]);


        $userFound= signup::where(['Email'=>$req->Email])->first();
        if($userFound)
        {
             //return $userFound;
            
              if(md5($req->Pwd)==$userFound->Pwd)
              {
                
                
               $req->session()->put('signup', $userFound->id);
                 return redirect('login');
             }
             else
            {
                return back()->with('fail', 'Password doesnot match..!!');    
            }
        }
       
   }
  
   
 

   public function dashboard(Request $request)
   {
       //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
       $myData = null;
       if (Session()->has('signup'))
       {
           $myData = signup::where('id',"=", Session()->get('signup'))->first();            
       }
       return view('home2', compact('myData'));

    //    if (Session()->has('id'))
    //       {
    //           Session()->pull('id');
    //           return redirect('home');
    //       }
   }


   public function logout()
      {
          if (Session()->has('id'))
          {
              Session()->pull('id');
              return redirect('/home');
          }
          else{

              return redirect('/');
          }
      }
       

} 