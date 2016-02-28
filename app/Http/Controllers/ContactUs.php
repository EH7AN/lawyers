<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Activity_field;
use App\Contact_u;
use App\Our_team;
class ContactUs extends Controller
{
    public function getContactDetail()
    {
    	$activity_field = Activity_field::All();
    	$contact = Contact_u::Find(1);
    	$our_team = Our_team::All();
    	
    	return view('pages.contact',compact(
    				'activity_field',
    				'contact',
                    'our_team'
    			));
    }
}
