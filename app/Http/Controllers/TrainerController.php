<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function create(Request $request){
        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->specialization = $request->specialization;
        $trainer->phone = $request->phone;
        $trainer->save();
        return redirect()->route('create_trainer')->with('success', 'New trainer added!');
    }
}
