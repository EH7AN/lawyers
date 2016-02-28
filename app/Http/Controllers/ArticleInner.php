<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Activity_field;
use App\Contact_u;
use App\Our_team;

class ArticleInner extends Controller
{
	  public function getArticle($id) 
    {
    	$article = article::Find($id);
    	$activity_field = Activity_field::All();
        $our_team = Our_team::All();
    	$contact = Contact_u::Find(1);
    	return view('pages.article_inner',compact(
    		'article',
    		'activity_field',
    		'contact',
            'our_team'
    		));
    }

}
