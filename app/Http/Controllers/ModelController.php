<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;

class ModelController extends Controller
{
    /**
     * @param Request $request
     * @param CarModel $model
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, CarModel $model){

        $validatedData = $request->validate([
            'name' => 'required|string',
        ]);

        $model->update(['name' => $request->input('name')]);


        return response()->json([

            'name' => $model->name

        ]);


    }

    /**
     * @param CarModel $model
     */
    public function delete(CarModel $model){

        $model->delete();

    }
}
