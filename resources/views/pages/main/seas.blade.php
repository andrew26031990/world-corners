@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        {{$location->title}}
    </h3>

    <article class="blog-post">
        <p class="blog-post-meta">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}</p>

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

        <div style="width: 100%; height: 150px">
            <!-- Yandex.RTB R-A-8796197-20 -->
            <div id="yandex_rtb_R-A-8796197-20"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-20",
                        "renderTo": "yandex_rtb_R-A-8796197-20"
                    })
                })
            </script>
        </div>

        {!! $secondHalf !!}

    </article>

    <div style="margin-bottom: 15px"></div>
@endsection
@section('sidebar')
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <!-- Yandex.RTB R-A-8796197-21 -->
            <div id="yandex_rtb_R-A-8796197-21"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-21",
                        "renderTo": "yandex_rtb_R-A-8796197-21"
                    })
                })
            </script>
        </div>

        @include('pages.layouts.articles')

        <div class="p-4">
            <!-- Yandex.RTB R-A-8796197-22 -->
            <div id="yandex_rtb_R-A-8796197-22"></div>
            <script>
                window.yaContextCb.push(()=>{
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-8796197-22",
                        "renderTo": "yandex_rtb_R-A-8796197-22"
                    })
                })
            </script>
        </div>
    </div>
@endsection
