<?php
namespace App\Http\Controllers\api;

use App\Models\Klien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator; // Add this import

class ApiAuthController extends Controller
{
    public function AuthLogin(Request $request)
    {
        // Validation rules
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        // Validation messages
        $messages = [
            'email.required' => 'Kolom Email wajib diisi.',
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

        // Find user by email
        $user = Klien::where('email', $data['email'])->first();

        // Check if user exists and password is correct
        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw new HttpResponseException(response([
                'errors' => [
                    'email' => [
                        'Email or password is incorrect',
                    ],
                ],
            ], 400));
        }

        // Create token for the user
        $token = $user->createToken('api-token')->plainTextToken;

        // Add the token to the response
        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response()->json($response, 200);
    }

    public function logout(Request $request)
    {
        // Revoke the current access token
        $request->user()->currentAccessToken()->delete();

        return response()->json(['status' => 200, 'message' => 'Logged out successfully'], 200);
    }
}
