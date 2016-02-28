<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Activity_field;
use App\Contact_u;
use App\Our_team;
class ArticleList extends Controller
{
	  public function getArticleList() 
    {
    	$articles = article::All();
    	$activity_field = Activity_field::All();
    	$contact = Contact_u::Find(1);
        $our_team = Our_team::All();
    	return view('pages.article_list',compact(
    		'articles',
    		'activity_field',
    		'contact',
            'our_team'
    		));
    }
}