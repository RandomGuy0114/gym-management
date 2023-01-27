<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function display(){

    }

    public function create(Request $request){
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_type = $request->membershipType;
        $member->membership_expiration_date=$request->membershipExpirationDate;
        $member->trainer_id = $request->trainerId;
        $member->save();
        return redirect()->route('create_member')->with('success', 'New member added!');
    }

    public function update(){

    }

    public function delete(){

    }
}
