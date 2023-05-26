<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Validator;

class TagController extends Controller
{
    public function createTag(Request $request){
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        Tag::create($input);

        $response = [
            'success' => true,
            'message' => 'New Department Added Successfully',
        ];
        return response()->json($response, 200);
    }
}
