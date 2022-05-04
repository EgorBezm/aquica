<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckEmailApiController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => "required | string | email | max:255",
        ]);

        if ($validator->fails())
        {
            return response([
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $validator = Validator::make($request->all(), [
            'email' => "required | string | email | max:255 | exists:users",
        ]);

        if ($validator->fails())
        {
            return response([
                'errors' => $validator->errors()->all()
            ], 401);
        }

        return $request->email;
    }
}
