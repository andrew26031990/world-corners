@extends('welcome')

@section('content')
    <!--================Blog Categorie Area =================-->
    {{--<section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Social Life</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Politics</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Food</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        @foreach($locations as $key => $location)
                            <article class="row blog_item">
                                {{--<div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>--}}
                                <div class="col-md-12">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="{{$location->slug}}">
                                                <h2>{{$location->title}}</h2>
                                            </a>
                                            <p>{{$location->short_text}}</p>
                                            <a href="{{$location->slug}}" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <hr>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                @if ($locations->onFirstPage())
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a href="{{ $locations->previousPageUrl() }}" class="page-link"
                                           aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                        </a>
                                    </li>
                                @endif

                                @foreach (range(1, $locations->lastPage()) as $i)
                                    @if ($i >= $locations->currentPage() - 2 && $i <= $locations->currentPage() + 2)
                                        @if ($i == $locations->currentPage())
                                            <li class="page-item active"><a href="#" class="page-link">{{ $i }}</a></li>
                                        @else
                                            <li class="page-item"><a href="{{ $locations->url($i) }}"
                                                                     class="page-link">{{ $i }}</a></li>
                                        @endif
                                    @endif
                                @endforeach

                                @if ($locations->hasMorePages())
                                    <li class="page-item">
                                        <a href="{{$locations->nextPageUrl()}}" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a href="#" class="page-link disabled" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        @include('pages.layouts.articles')
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="{{url('img/blog/add.jpg')}}" alt=""></a>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.layouts.scripts')
    <!--================Blog Area =================-->
@endsection
