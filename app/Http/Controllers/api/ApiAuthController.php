<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator; // Add this import

class ApiAuthController extends Controller
{
    public function AuthLogin(Request $request)
    {
        // Validation rules
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        // Validation messages
        $messages = [
            'username.required' => 'Kolom Username wajib diisi.',
            'password.required' => 'Kolom Password wajib diisi.',
        ];

        // Validate the request
        $validator = validator($request->all(), $rules, $messages);

        // Custom validation error response
        if ($validator->fails()) {
            throw new HttpResponseException(response([
                'errors' => $validator->getMessageBag(),
            ]));
        }

        // Get validated data
        $data = $validator->validated();

        // Find user by username
        $user = Klien::where('nama', $data['username'])->first();

        // Check if user exists and password is correct
        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw new HttpResponseException(response([
                'errors' => [
                    'username' => [
                        'Username or password is incorrect',
                    ],
                ],
            ], 400));
        }

        // Create and return token based on username
        return response()->json($user,200);
    }

    public function logout(Request $request)
    {
        // Revoke the current access token
        $request->user()->currentAccessToken()->delete();

        return response()->json(['status' => 200, 'message' => 'Logged out successfully'], 200);
    }
}
