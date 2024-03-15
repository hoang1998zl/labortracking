<?php

namespace App\Http\Controllers\GN24;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()) {
            $user = Auth::user();
            $payload = [
                'user_email' => $user->email,
                'accessToken' => $user->authToken
            ];
            $fmToken = JWT::encode($payload, env('APP_SECRETKEY'), 'HS256');
            // dd($fmToken);
            $accessToken = $user->authToken;
            $userData = [
                'accessToken' => $accessToken,
                'fmToken' => $fmToken,
            ];
            return response()->json($userData);
        }
        return response()->json();
    }

    public function getTokenForFMApp(Request $req)
    {
        $requestData = json_decode($req->getContent(), true);
        $user = User::where('email', $requestData["email"])->firstOrFail();

        return response()->json($user->authToken, 201);
    }
}
