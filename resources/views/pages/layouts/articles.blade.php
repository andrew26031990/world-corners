<div class="p-4">
    <h4 class="fst-italic">Другие статьи</h4>
    <ol class="list-unstyled mb-0">
        @foreach(getArticles() as $location)
            <li><a href="{{$location->slug}}">{{$location->title}}</a></li>
        @endforeach
    </ol>
</div>
