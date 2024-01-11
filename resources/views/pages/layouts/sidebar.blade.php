<div class="position-sticky" style="top: 2rem;">
    <div class="p-4 mb-3 bg-light rounded">
        <!-- SAPE RTB DIV ADAPTIVE -->
        <div id="SRTB_807896"></div>
        <!-- SAPE RTB END -->
    </div>

    <div class="p-4">
        <h4 class="fst-italic">Другие статьи</h4>
        <ol class="list-unstyled mb-0">
            @foreach(getArticles() as $location)
                <li><a href="{{$location->slug}}">{{$location->title}}</a></li>
            @endforeach
        </ol>
    </div>

    <div class="p-4">
        <!-- SAPE RTB DIV ADAPTIVE -->
        <div id="SRTB_807298"></div>
        <!-- SAPE RTB END -->
    </div>
</div>
