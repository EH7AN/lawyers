@extends('layout.index')
@section('content')
	 <div id="inner-banner">
            <div class="container">
                <h1> تماس با ما </h1>
                <ol class="breadcrumb rtl">
                    <li><a href="index.html"> صفحه اصلی </a></li>
                    <li class="active"> تماس با ما </li>
                </ol>
            </div>
        </div>
        <div id="main">
            <section class="cp-blog padding-top-60" style="background-color:#f9f9f9;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="cp-post-box">
                                <form>
                                    <div class="col-xs-12 col-sm-6 pull-right">
                                        <div class="col-xs-12">
                                            <input type="text" class="col-xs-12 contact_input text-right" placeholder=" نام و نام خانوادگی ">
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="email" class="col-xs-12 contact_input text-right" placeholder=" ایمیل ">
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="submit" class="col-xs-12 btn btn-block btn_contact text-center" value=" ثبت ">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 pull-left">
                                        <div class="col-xs-12">
                                            <textarea class="input_text" placeholder=" جزئیات "></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cp-blog padding-top-60" style="background-color:#fff;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="cp-post-box">
                                <div class="col-xs-12">
                                    <iframe class="maps scrolloff col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.2331671287993!2d-119.81711918518158!3d36.74097397873197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809460c8563221c3%3A0xf0ca4810deda2e6d!2sCA-180%2C+Fresno%2C+CA+93706%2C+USA!5e0!3m2!1sen!2s!4v1453386335607" style="border:0" height="350"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@stop