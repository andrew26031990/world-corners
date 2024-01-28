@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
    </h3>
    @foreach($locations as $location)
        <article class="blog-post">
            <h2 class="blog-post-title"><a href="{{$location->slug}}">{{$location->title}}</a></h2>
            <p class="blog-post-meta">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}</p>

            {!! $location->short_text !!}
        </article>
        <hr>
    @endforeach
@endsection
