@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        {{$location->title}}
    </h3>

    <article class="blog-post">
        <p class="blog-post-meta">{{\Carbon\Carbon::parse($location->created_at)->format('F j, Y')}}</p>

        {!! $location->text !!}
    </article>

    <div style="margin-bottom: 15px"></div>
@endsection
