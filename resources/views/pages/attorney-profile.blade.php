@extends('layout.index')
@section('content')

 <div class="cp-search-outer"> <strong class="title"> لطفا عبارت مورد جستجو را در کادر زیر وارد نمایید </strong>
            <div id="searchbar">
                <form id="searchform" action="#">
                    <input placeholder="Type your text here" type="text" required>
                    <button type="submit" value=""><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div id="inner-banner">
            <div class="container">
                <h1>{{$lawyer->lawyer_name}}</h1>
                <ol class="breadcrumb rtl">
                    <li><a href="index.html"> صفحه اصلی </a></li>
                    <li><a href="#"> تیم ما </a></li>
                    <li class="active">{{$lawyer->lawyer_name}}</li>
                </ol>
            </div>
        </div>
<div id="main">
<section class="cp-attorneys-profile">
    <div class="attorney-details">
        <div class="container">
            <div class="holder">
                <div class="row">
                <div class="col-md-8 col-sm-6">
                <div class="cp-text-box">
                <h3>{{$lawyer->lawyer_name}}</h3>
                <span>{{$lawyer->lawyer_post}}</span>
                <address>
                    <ul>
                        <li><i class="fa fa-phone"></i>{{$lawyer->lawyer_phone}}</li>
                        <!-- <li><i class="fa fa-print"></i>0123 456 7890</li> -->
                        <li><i class="fa fa-envelope-o"></i>
                            <a href="#">
                                <span class="__cf_email__">{{$lawyer->lawyer_email}}</span>
                            </a>
                        </li>
                        <li><i class="fa fa-globe"></i><a href="#">{{$lawyer->lawyer_website}}</a></li>
                    </ul>
                </address>
                <div class="attorney-details-social">
                <ul>
                <li><a href="{{$lawyer->lawyer_twitter}}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{$lawyer->lawyer_facebook}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$lawyer->lawyer_linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{$lawyer->lawyer_instagram}}"><i class="fa fa-instagram"></i></a></li>
                </ul>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                <div class="cp-frame-box">
                <div class="frame"><img src="{{$lawyer->lawyer_picture}}" alt="{{$lawyer->lawyer_name}}"></div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<div class="cp-experience padding-btm-60">
<div class="container">
<h3> تجربه های حرفه ای </h3>
    <p>
        {{$lawyer->lawyer_intro}}
    </p>
</div>
</div>
<div class="education-row">
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="cp-box">
        <h3> مقاطع تحصیلی </h3>
        <ul>
            <li> 
                <strong class="year">1380</strong>
                <div class="cp-text-box">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                    </p>
                </div>
            </li>
            <li> 
                <strong class="year">1384</strong>
                <div class="cp-text-box">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                    </p>
                </div>
            </li>
            <li> 
                <strong class="year">1388</strong>
                <div class="cp-text-box">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                    </p>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
<div class="contact-form-area">
<div class="cp-author-box">
<div class=" container">
<h2> ارتباط با نام وکیل </h2>
<form action="form-2.php" method="post">
<div class="row">
<div class="col-md-4 pull-right">
<input type="text" name="name" placeholder="نام *" required>
</div>
<div class="col-md-4 pull-right">
<input type="text" name="name" placeholder="نام خانوادگی *" required>
</div>
<div class="col-md-4 pull-right">
<input type="text" name="phone" placeholder=" شماره تلفن *" required pattern="(\+?\d[- .]*){7,13}">
</div>
<div class="col-md-12 pull-right">
<textarea required name="comments" placeholder=" پیام شما *" rows="10" cols="10"></textarea>
</div>
<div class="col-md-12 pull-right">
<input type="submit" value="ثبت پیام">
</div>
</div>
</form>
</div>
</div>
</div>
</section>
 
</div>

@stop