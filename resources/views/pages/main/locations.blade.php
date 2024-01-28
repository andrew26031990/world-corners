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
                <!-- SAPE RTB DIV ADAPTIVE -->
                <div id="SRTB_879759"></div>
                <!-- SAPE RTB END -->
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
            <!-- SAPE RTB DIV ADAPTIVE -->
            <div id="SRTB_879761"></div>
            <!-- SAPE RTB END -->
        </div>

        @include('pages.layouts.articles')

        <div class="p-4">
            <!-- SAPE RTB DIV ADAPTIVE -->
            <div id="SRTB_879763"></div>
            <!-- SAPE RTB END -->
        </div>
    </div>
@endsection
