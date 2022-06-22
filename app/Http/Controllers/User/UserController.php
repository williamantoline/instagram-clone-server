<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserLiteResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test()
    {
        return response()->json([
            'data' => 'ok'
        ]);
    }

    public function index(Request $request)
    {
        $users = User::all();

        return UserLiteResource::collection($users);
    }

}
