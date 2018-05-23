<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libs\Vizor\Import;
use App\CarModel;
use App\Make;
use Illuminate\Http\Response;

class ImportController extends Controller
{
    //
    protected $import;
    protected $model;
    protected $make;

    /**
     * ImportController constructor.
     * @param Import\ImportIntarface $import
     * @param CarModel $model
     * @param Make $make
     */
    public function __construct(Import\ImportIntarface $import, CarModel $model, Make $make)
    {
        $this->import = $import;

        $this->model = $model;
        $this->make = $make;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function import()
    {
        $array = $this->import->getArrayImport();

        foreach ($array as $model){

            $make = $this->make->firstOrCreate(['name' => $model['MAKE']]);
            $this->model->firstOrNew(['name' => $model['MODEL']])->make()->associate($make)->save();

        }

        $result = $this->make->with('model')->orderBy('name','asc')->get()->toArray();

        return view('model', ['result' => $result]);
    }
}
