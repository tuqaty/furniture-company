<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->all();
        return view('user.index', compact('users'));
    }
    public function create()
    {
        // $roles = Role::all();
        $roles = [
            [
                'id' => 1,
                'name' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'user'
            ],
        ];
        // return $roles;
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  =>   'required',
            'email'  =>   'required|email|unique:users',
            'role'  =>   'required',
            'password'  =>   'required|min:8',
        ]);
        $request_data = $request->all();
        $data = array_merge($request_data, ['password' => Hash::make($request_data['password'])]);
        $this->userService->create($data);
        return redirect()->route('user.index');
    }
    public function edit($id)
    {
        // $roles = Role::all();
        $roles = [
            [
                'id'   => 1,
                'name' => 'admin'
            ],
            [
                'id'   => 2,
                'name' => 'user'
            ],
        ];
        $user = User::findOrFail($id);
        // return $roles;
        return view('user.edit', compact('$user', 'roles'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'      =>   'required',
            'email'     =>   'required|email|unique:users',
            'role'      =>   'required',
            'password'  =>   'required|min:8',
        ]);
        $id = $request['id'];
        dd($id);
        $data = array_merge($request->except('id'), ['password' => Hash::make($request->except('id')['password'])],);
        $this->userService->update($id, $data);
        return redirect()->route('user.index');
    }
}
