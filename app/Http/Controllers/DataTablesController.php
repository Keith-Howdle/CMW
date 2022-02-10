<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Container;
use Datatables;

class DataTablesController extends Controller
{
    public function index(){

        if(request()->ajax()) {
            return datatables()->of(Container::select('*'))
            ->addIndexColumn()
            ->make(true);
        }
        return view('datatables');
    }
}
