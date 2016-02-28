 @extends('layout.index')
@section('content')
 <div id="inner-banner">
            <div class="container">
                <h1>نام وکیل</h1>
                <ol class="breadcrumb rtl">
                    <li><a href="index.html"> صفحه اصلی </a></li>
                    <li><a href="#"> تیم ما </a></li>
                    <li class="active">نام وکیل</li>
                </ol>
            </div>
        </div>
        <div id="main">
            <section class="cp-blog padding-top-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="cp-post-box">
                                <div class="frame cp-img-effect-1"> 
                                    <a href="#">
                                        <img src="{{ $article->picture }}" alt="img">
                                    </a> 
                                </div>
                                <div class="cp-text-box">
                                    <p>
                                        <?= mb_substr($article->description,0,1500) ?>
                                    </p>
                                    <blockquote> 
                                        <q>
                                           {!! $article->short_desc !!}
                                        </q> 
                                    </blockquote>
                                    <p>
                                        <?= mb_substr($article->description,1500,-1) ?>
                                    </p>
                                  <!--   <div class="cp-share-post-row"> <strong class="title">Share Post:</strong>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div> -->
                                  <!--   <div class="cp-author-box">
                                        <h3> درباره نویسنده </h3>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="images/author-img.jpg" alt="img">
                                            </a>
                                        </div>
                                        <div class="text-box">
                                            <strong class="name"> مهران کاویانی </strong>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <aside>
                                <div class="cp-sidebar">
                                    <div class="cp-sidebar-box">
                                        <h3>Search</h3>
                                        <form action="#">
                                            <input type="text" placeholder=" جستجو " required="" class="text-riight">
                                            <button class="pull-left"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="cp-sidebar-box">
                                        <h3>Areas of Practice</h3>
                                        <div class="cp-practice-area">
                                            <ul>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-bank"></i> مشاوره تجاری </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-medkit"></i> صدمات بدنی </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-building-o"></i> مشاوره خانواده </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-car"></i> تصادفات اتومبیل </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-money"></i> انتقالات مالی بین المللی </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-truck"></i> خسارات ناشی ازحمل و نقل </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-intersex"></i> تجاوزات جنسی </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-bug"></i> مواد مخدر </a></li>
                                                <li><a href="practice-area-detail.html"><i class="fa fa-male"></i> سرقت </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @stop