<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main_slider;
use App\Article;
use App\Introduction;
use App\Motto;
use App\Our_partner;
use App\Our_team;
use App\Activity_field;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact_u;

class mainController extends Controller
{
    public function callMainLayout() 
    {
    	$main_slider = Main_slider::All();
    	$article = Article::take(4)->orderBy('id','desc')->get();
    	$introduction = Introduction::All();
    	$our_partner = Our_partner::All();
    	$our_team = Our_team::All();
    	$motto = Motto::All();
    	$activity_field = Activity_field::All();
        $contact = Contact_u::Find(1);
    	return view('pages.main',compact(
    		'main_slider',
    		'article',
    		'introduction',
    		'our_partner',
    		'our_team',
    		'motto',
    		'activity_field',
            'contact'
    		));
     }
}
