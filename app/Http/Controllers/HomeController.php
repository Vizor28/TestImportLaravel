<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Make;

class HomeController extends Controller
{

    protected $make;

    /**
     * HomeController constructor.
     * @param Make $make
     */
    public function __construct(Make $make)
    {
        $this->make = $make;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->make->with('model')->orderBy('name','asc')->get()->toArray();
        return view('welcome', ['result' => $result]);
    }
}
