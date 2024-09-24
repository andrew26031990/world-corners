@extends('welcome')

@section('content')
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{$location->img ? url($location->img) : url('img/blog/feature-img1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <ul class="blog_meta list">
                                    <li><a href="#">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
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
                                        <a href="#"><img class="img-fluid" src="{{url('img/blog/prev.jpg')}}" alt=""></a>
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
                                        <a href="#"><img class="img-fluid" src="{{url('img/blog/next.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn">Post Comment</a>
                        </form>
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
@endsection


{{--
@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        {{$location->title}}
    </h3>

    <article class="blog-post">
        <p class="blog-post-meta">{{ \Carbon\Carbon::parse($location->created_at)->format('F j, Y') }}</p>

        @php
            $textLength = mb_strlen($location->text, 'UTF-8');
            $halfLength = ceil($textLength / 2);
            $firstHalf = mb_substr($location->text, 0, $halfLength, 'UTF-8');
            $lastDotPosition = mb_strrpos($firstHalf, '.', 0, 'UTF-8');
            if ($lastDotPosition !== false) {
                $firstHalf = mb_substr($firstHalf, 1, $lastDotPosition, 'UTF-8');
                $secondHalf = mb_substr($location->text, $lastDotPosition + 1, $textLength - $lastDotPosition - 1, 'UTF-8');
            } else {
                $secondHalf = mb_substr($location->text, $halfLength, $textLength - $halfLength, 'UTF-8');
            }
        @endphp

        {!! '<' . $firstHalf !!}

        --}}
{{--<div style="width: 100%; height: 150px">
            <!-- Yandex.RTB R-A-8796197-13 -->
            <div id="yandex_rtb_R-A-8796197-13"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-13",
                        "renderTo": "yandex_rtb_R-A-8796197-13"
                    })
                })
            </script>
        </div>--}}{{--


        {!! $secondHalf !!}

    </article>

    <div style="margin-bottom: 15px"></div>
@endsection
@section('sidebar')
    <div class="position-sticky" style="top: 2rem;">
        --}}
{{--<div class="p-4 mb-3 bg-light rounded">
            <!-- Yandex.RTB R-A-8796197-12 -->
            <div id="yandex_rtb_R-A-8796197-12"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-12",
                        "renderTo": "yandex_rtb_R-A-8796197-12"
                    })
                })
            </script>
        </div>--}}{{--


        @include('pages.layouts.articles')

        <div class="p-4">
            <!-- Yandex.RTB R-A-8796197-11 -->
            <div id="yandex_rtb_R-A-8796197-11"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-11",
                        "renderTo": "yandex_rtb_R-A-8796197-11"
                    })
                })
            </script>
        </div>
    </div>
@endsection
--}}
