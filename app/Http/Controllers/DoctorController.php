<?php

namespace App\Http\Controllers;


use App\Models\Doctor;

class DoctorController extends Controller
{
    public function doctor()
    {
        $doctors = Doctor::query()->get();
        return view('doctors.doctors',compact('doctors'));
    }

}
