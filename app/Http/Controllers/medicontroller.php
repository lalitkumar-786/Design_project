<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\shared_documents;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\login;
use App\medi_taken;
use Illuminate\Support\Facades\Input;
session_start();
class medicontroller extends Controller
{
    public function register(Request $request)
    {
      $user=new login;
      $user->email=Input::get('email');
      $user->firstname=Input::get('firstname');
      $user->lastname=Input::get('lastname');
      $user->password=Input::get('password');
     // $user->forgot = Input::get('forgot');
      $user->save();
      $error ='Successfully Registered';
      return redirect()->back()->withErrors(array('f' => $error));
    }

    public function login(Request $request)
    {
      $user=new login;
      $username=Input::get('email');
      $password=Input::get('password');
        
      $check = \DB::table('login')->where('email',$username)->where('password',$password)->get();
        
       // $name=new medi_taken;
        //$name->id=$username;
        //$name->save();
        
      if(count($check)==0)
      {
        $error ='Either wrong username or password';
        return redirect()->back()->withErrors(array('f' => $error));
      }
      else
      {
        $_SESSION['username']=$check[0]->email;
        $_SESSION['firstname']=$check[0]->firstname;
        $_SESSION['lastname']=$check[0]->lastname;
        return redirect('main')->withErrors(array('f' =>$check[0]->firstname));
      }
    }

    public function logout()
    {
      session_destroy();
      return redirect('/');
    }
    public function symptoms(Request $request)
    {
      $get=$request->all();
      $subject[0]=$get['disease'];
      $subject[1]=$get['age'];
        if($subject[0]=='fever')
        {
            return view('fever');
        }
        else if($subject[0]=='cough')
        {
            return view('cough');
        }
        else if($subject[0]=='cold')
        {
            return view('cold');
        }
        else if($subject[0]=='diarrhea')
        {
            return view('diarrhea');
        }
        else if($subject[0]=='headache')
        {
            return view('headache');
        }
        else if($subject[0]=='stomachache')
        {
            return view('stomachache');
        }
    }
    public function medicines(Request $request)
    {
        
      $get = $request->all();
      $qw = $get['medi'];
      $user=new medi_taken;
      $user->email=$_SESSION['username'];
      $user->medi_name=$qw;
      $user->save();
    return view('medigiven',compact('qw'));
  }
    public function specialist(Request $request)
    {
      $get=$request->all();
      $subject[0]=$get['specialist'];
      $subject[1]="v_specialization";
      return view('specialist',compact('subject'));
    }
    public function filter(Request $request)
    {
      $get=$request->all();
      $subject[0]=$get['city'];
      $subject[1]=$get['specialization'];
      return view('specialist',compact('subject'));
    }
    public function specialist_terms(Request $request)
    {
       // echo "hello";
        $get=$request->all();
        $subject[0]="v_city";
        $subject[1]=$get['specialist_t'];
        //return view('symptoms');
        return view('specialist',compact('subject'));
    }
     public function common()
    {
      return view('common');
    }
   
    
}