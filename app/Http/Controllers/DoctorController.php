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

    public function doctor_detail($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        return view('doctors.doctor-detail',compact('doctor'));
    }

}
