<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function test(): View
    {
        $users = User::all();
        return view('test', compact('users'));
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(): RedirectResponse
    {

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->age = request('age');
        $user->save();

        return redirect()->route('test');
    }
}
