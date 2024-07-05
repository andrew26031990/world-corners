@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Latest articles
    </h3>
    @foreach($locations as $key => $location)
        <article class="blog-post">
            <h2 class="blog-post-title"><a href="{{$location->slug}}">{{$location->title}}</a></h2>
            <p class="blog-post-meta">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}</p>

            {!! $location->short_text !!}
        </article>
        @if($key == 1)
            <div style="width: 100%; height: 100px">
                <!-- Yandex.RTB R-A-8796197-7 -->
                <div id="yandex_rtb_R-A-8796197-7"></div>
                <script>
                    window.yaContextCb.push(()=>{
                        Ya.Context.AdvManager.render({
                            "blockId": "R-A-8796197-7",
                            "renderTo": "yandex_rtb_R-A-8796197-7"
                        })
                    })
                </script>
            </div>
        @endif
        <hr>
    @endforeach
@endsection
@section('sidebar')
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded" style="width: 100%;height: 177px">
            <!-- Yandex.RTB R-A-8796197-3 -->
            <div id="yandex_rtb_R-A-8796197-3"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-3",
                        "renderTo": "yandex_rtb_R-A-8796197-3"
                    })
                })
            </script>
            {{--<div id="SRTB_879969"></div>--}}
            <!-- SAPE RTB END -->
        </div>

        @include('pages.layouts.articles')

        <div class="p-4">
            <!-- Yandex.RTB R-A-8796197-6 -->
            {{--<div id="yandex_rtb_R-A-8796197-6"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-6",
                        "renderTo": "yandex_rtb_R-A-8796197-6"
                    })
                })
            </script>--}}
            <!-- adv_main_sidebar_1 -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7180260897557911"
                 data-ad-slot="5843942634"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div id="bc_teasers_block_9421" class="bigClickTeasersBlock"></div>
    </div>
@endsection
