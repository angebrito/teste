<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

use App\Models\User;

class UserController extends Controller
{
   
    public function index()
    {
       return User::all();
    }

    
    public function store(UserCreateRequest $request)
    {
        User::created($request->all());
    }

    
    public function show($id)
    {
       return User::findOrFail($id);
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user -> update($request->all());
    }


   
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user -> delete();
    }
}