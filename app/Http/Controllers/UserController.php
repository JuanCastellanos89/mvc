<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostStore;
use App\Http\Requests\StoreUserPost;

class UserController extends Controller
{
    public function __construct()
     {
        $this->middleware(['auth','rol.admin']);
     }

     public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.user.index', ['users' => $users]);
     }
    
     public function create(){
        return view('dashboard.user.create', ['user' => new User()]);
     }

     public function store(StoreUserPost $request){
        Category::create($request->validated());
        
        return back()->with('status', 'Usuario creado con exito');
     }

     public function update(UpdateUserPut $request, User $user){
        $user->update(
            [
            'name' => $request['name'],
            'email' => $request['email'],
            ]
        );
        return back()->with('status', 'Usuario actualizado con exito');
     }

     public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Usuario Eliminado con exito');
    }

    public function show(User $user)
    {
        return view('dashboard.user.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', ['user' => $user]);
    }


}
