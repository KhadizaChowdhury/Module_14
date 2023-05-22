<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function processForm(Request $request){
        $name = $request->input('name');
        return view( 'result', compact('name') );
    }

    public function getUserAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return view('user-agent', compact('userAgent'));
    }

    public function getPage(Request $request)
    {
        $page = $request->input('page', null);
        return response()->json(['page' => $page]);
    }

    public function createJsonResponse(Request $request)
    {
        $responseData = [
            'message' => 'Success',
            'data' => [
                'name' => 'John Doe',
                'age' => 25
            ]
        ];

        return response()->json($responseData);
    }

    public function uploadAv(Request $request)
    {
        return view( 'upload' );
    }

    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $avatar = $request->file('avatar');
            $avatar->move(public_path('uploads'), $avatar->getClientOriginalName());
            return response()->json(['message' => 'Avatar uploaded successfully']);
        }

        return response()->json(['message' => 'No avatar file found'], 400);
    }

    public function retrieveCookie(Request $request): array|string|null{

        $rememberToken = $request->cookie( 'remember_token', null );
        return response()->json( ['remember_token' => $rememberToken] );
    }

    public function submit ( Request $request ) {
        $email = $request->input( 'email' );

        // Store the email or perform any other necessary actions

        return response()->json( [
            'success' => true,
            'message' => 'Form submitted successfully.',
        ] );
    }

}
