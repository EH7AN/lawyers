@extends('layout.index')
@section('content')

 <div id="inner-banner">
            <div class="container">
                <h1>مقالات</h1>
                <ol class="breadcrumb rtl">
                    <li><a href="index.html"> صفحه اصلی </a></li>
                    <li><a href="#"> مقالات </a></li>
                   <!--  <li class="active"></li> -->
                </ol>
            </div>
        </div>
<div id="main">
    <section class="cp-practice-area cp-practice-style-1 padding-tb-60">
        <div class="container">
<!-- ============================SHOW ARTICLES WHICH HAD ODD ID================== -->
        @foreach($articles as $article )
        @if(($article->id)%2 == 0)
        <?php continue; ?>
        @endif
            <div class="cp-box bor-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="frame"> 
                            <img src="{{$article->picture}}" alt="{{$article->title}}">
                            <div class="caption">
                                <a href="article-inner-{{$article->id}}" class="link">
                                    <i class="fa fa-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cp-text-box">
                            <h3>
                                <a href="article-inner-{{$article->id}}">{{$article->title}}</a>
                            </h3>
                            <p>
                               {{$article->short_desc}}
                            </p>
                            <a href="article-inner-{{$article->id}}" class="btn-style-1"> اطلاعات بیشتر </a> 
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
<!-- ============================SHOW ARTICLES WHICH HAD EVEN ID================== -->
        @foreach($articles as $article )
        @if(($article->id)%2 !== 0)
        <?php continue; ?>
        @endif
            <div class="cp-box bor-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="cp-text-box text-align-right">
                            <h3>
                                <a href="article-inner-{{$article->id}}">{{$article->title }}</a>
                            </h3>
                            <p>
                                {!! $article->short_desc !!}
                            </p>
                            <a href="article-inner-{{$article->id}}" class="btn-style-1"> اطلاعات بیشتر </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="frame"> 
                            <img src="{{$article->picture}}" alt="{{$article->title}}">
                            <div class="caption">
                                <a href="article-inner-{{$article->id}}" class="link"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
<!-- ============================ END SHOW ARTICLES WHICH HAD ODD ID================== -->
            <div class="cp-pagination margin-30">
                <nav>
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>
@stop