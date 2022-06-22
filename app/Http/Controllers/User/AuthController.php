<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where(['username' => $data['username'], 'password' => $data['password']])->firstOrFail();

        if (!$user) {
            throw new BadRequestHttpException(__('error.login_failed'));
        }

        
    }
}
