<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Make;

class MakeController extends Controller
{
    /**
     * @param Request $request
     * @param Make $make
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Make $make){

        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $make->update(['name' => $request->input('name')]);


        return response()->json([

            'name' => $make->name

        ]);


    }

    /**
     * @param Make $make
     */
    public function delete(Make $make){

        $make->delete();

    }
}
