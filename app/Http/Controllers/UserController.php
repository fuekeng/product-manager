<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('user.create');
    }

    public function save(Request $request){
     $request->validate([
            'fname' => 'required',
            'lname' => 'required ',
            'email' => 'required|email', 
            'password'=>'required' 
            ]); 

            $user=new User();
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->email=$request->email;
            $user->password=Hash::make($request->password);
            $user->save(); 
            return redirect()->back()->with('success','User has been added successfully');
    }


    public function getAll(){
        $users=User::paginate(4);

        return view('user.all',compact('users'));
    }

    public function view($id){
        $user=User::findOrFail($id);
        return view('user.view', compact('user'));
    }


    public function update($id, Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required ',
            'email' => 'required|email|unique:users,email,' .request()->id, 
            'password'=>'required' 
            ]); 

            $user=User::findOrFail($id);
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->email=$request->email;
            $user->password=Hash::make($request->password); 
            $user->save(); 
            return redirect()->back()->with('success','User has been updated successfully');
    }
    
    public function delete(Request $request, $id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}