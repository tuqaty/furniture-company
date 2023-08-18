<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    // public function __construct(UserService $userService)
    // {
    //     $this->userService = $userService;
    // }

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        // $roles = Role::all();
        // $roles = [
        //     [
        //         'id' => 1,
        //         'name' => 'admin'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'user'
        //     ],
        // ];
        // return $roles;
        return view('user.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name'  =>   'required',
        //     'email'  =>   'required|email|unique:users',
        //     'role'  =>   'required',
        //     'password'  =>   'required|min:8',
        // ]);
        $request_data = $request->all();
        $data = array_merge($request_data, ['password' => Hash::make($request_data['password'])]);

   
        $file_extension = $request->image->getClientOriginalExtension();

        $file_name = $file_extension;
        $path = 'image/user';
        $request->image->move($path,$file_name);
        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "role_id"=>$request->role_id,
            "password"=>Hash::make($request->password),
            "phone_number"=>$request->phone_number,
            "image"=>$file_name,
        ]);
        

        return redirect()->route('user.index');
    }        
    public function edit($id)
    {
        // $roles = Role::all();
        // $roles = [
        //     [
        //         'id'   => 1,
        //         'name' => 'admin'
        //     ],
        //     [
        //         'id'   => 2,
        //         'name' => 'user'
        //     ],
        // ];
        $user = User::findOrFail($id);
        // return $roles;
        return view('user.edit', compact('user'));
    }

    public function update(Request $request,$id)
    {

        $file_extension = $request->image->getClientOriginalExtension();

        $file_name = $file_extension;
        $path = 'image/user';
        $request->image->move($path,$file_name);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;        
        $user->role_id = $request->role_id;        
        $user->phone_number = $request->phone_number;        
        $user->password = Hash::make($request->name);        
        $user->image = $file_name;
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('user.index');
    }
}
