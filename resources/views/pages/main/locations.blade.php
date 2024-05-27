@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        {{$menu->name}}
    </h3>
    @foreach($locations as $key => $location)
        <article class="blog-post">
            <h2 class="blog-post-title"><a href="{{$location->slug}}">{{$location->title}}</a></h2>
            <p class="blog-post-meta">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}</p>
            {!! $location->short_text !!}
        </article>
        @if($key == 1)
            <div style="width: 100%; height: 100px">
                <!-- Yandex.RTB R-A-8796197-8 -->
                <div id="yandex_rtb_R-A-8796197-8"></div>
                <script>
                    window.yaContextCb.push(()=>{
                        Ya.Context.AdvManager.render({
                            "blockId": "R-A-8796197-8",
                            "renderTo": "yandex_rtb_R-A-8796197-8"
                        })
                    })
                </script>
            </div>
        @endif
        <hr>
    @endforeach

    {{$locations->links()}}
    <div style="margin-bottom: 15px"></div>
@endsection
@section('sidebar')
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <!-- Yandex.RTB R-A-8796197-9 -->
            <div id="yandex_rtb_R-A-8796197-9"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-9",
                        "renderTo": "yandex_rtb_R-A-8796197-9"
                    })
                })
            </script>
        </div>

        @include('pages.layouts.articles')

        <div class="p-4">
            <!-- Yandex.RTB R-A-8796197-10 -->
            <div id="yandex_rtb_R-A-8796197-10"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-10",
                        "renderTo": "yandex_rtb_R-A-8796197-10"
                    })
                })
            </script>
        </div>
    </div>
@endsection
