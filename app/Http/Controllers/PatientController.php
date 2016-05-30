<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Patient;
class PatientController extends Controller
{
    public function ajaxpat($id)
    {
        # code...
        $patient= Patient::find($id);
        return $patient;
    }
}
