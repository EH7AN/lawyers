<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Our_team;
use App\Activity_field;
use App\Contact_u;
class attorneyController extends Controller
{
     public function showProfile($id) 
    {
    	$lawyer = Our_team::find($id);
    	$activity_field = Activity_field::All();
    	$contact = Contact_u::Find(1);
        $our_team = Our_team::All();
    		return view('pages.attorney-profile',compact(
    		'lawyer',
    		'activity_field',
    		'contact',
            'our_team'
    		));
    }
}
