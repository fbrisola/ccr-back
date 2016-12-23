<?php

namespace App\Http\Controllers;

use App\Indadd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndaddController extends Controller {

    public function index() {

        $indadd = IndAdd::all();

        return response()->json($indadd);
    }

    public function getIndadd($id) {

        $indadd = Indadd::find($id);

        return response()->json($indadd);
    }

}
