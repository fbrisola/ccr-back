<?php

namespace App\Http\Controllers;

use App\Person;
use App\Couple;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoupleController extends Controller {

    public function getWife($id) {

        $wife_id = DB::table('couples')->where('husband_id', $id)->value('wife_id');
        $wife = Person::find($wife_id);

        return response()->json($wife);
    }

}
