@extends('welcome')

@section('content')
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{$location->img ? url('storage/'.$location->img) : public_path('img/blog/feature-img1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li><a href="#">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">{{str_pad($comments->count(), 2, '0', STR_PAD_LEFT)}} Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$location->title}}</h2>
                        </div>
                        @php [$firstHalf, $secondHalf] = devideLocationIntoTwoParts($location) @endphp
                        <div class="col-lg-12 col-md-9 blog_details">
                            {!! '<' .  $firstHalf !!}
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes ads">
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training.
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-9 blog_details">
                            {!! $secondHalf !!}
                        </div>
                    </div>
                    <div class="navigation-area">
                        @php [$previousLocation, $nextLocation] = neighboringLocations($location) @endphp
                        <div class="row">
                            @if($previousLocation)
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="{{$previousLocation->img ? url('storage/'.$previousLocation->img) : public_path('img/blog/prev.jpg')}}" width="60" height="60" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="{{$previousLocation->slug}}">
                                            <h4>{{\Str::limit($previousLocation->title, 37)}}</h4>
                                        </a>
                                    </div>
                                </div>
                            @endif
                            @if($nextLocation)
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="{{$nextLocation->slug}}">
                                            <h4>{{\Str::limit($nextLocation->title, 37)}}</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="{{$nextLocation->img ? url('storage/'.$nextLocation->img) : public_path('img/blog/next.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @include('pages.layouts.comments')
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
@endsection
