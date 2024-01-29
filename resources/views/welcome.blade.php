<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$location->description ?? "Исследуйте уголки мира, погрузитесь в культуру, природу и достопримечательности разных городов и стран."}}">
    <meta name="keywords" content="{{$location->keywords ?? "уголки мира, путешествия, география, культура, достопримечательности, природа, города."}}">
    <meta name="author" content="Andrew Magzumov">

    <title>{{config('app.name')}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <link rel="icon" type="image/png" href="{{asset('blog/favicon.ico')}}" sizes="32x32">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        a {
            color: #FFA500
        }

        #cygroup {
            font-family: 'Dancing Script', cursive;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('blog/blog.css')}}" rel="stylesheet">

    <!-- SAPE RTB JS -->
    <script
        async="async"
        src="https://cdn-rtb.sape.ru/rtb-b/js/868/2/137868.js"
        type="text/javascript">
    </script>
    <!-- SAPE RTB END -->
</head>
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" id="cygroup" href="/">{{config('app.name')}}</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"/>
                        <path d="M21 21l-5.2-5.2"/>
                    </svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach(getMenu() as $item)
                <a class="p-2 link-secondary" id="{{$item->id}}MegaMenu" href="{{$item->slug}}">{{$item->name}}</a>
            @endforeach
        </nav>
    </div>
</div>

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            @php $article = getArticles()[0] ?? null; @endphp
            @if(isset($article))
                <h1 class="display-4 fst-italic">{{$article->title}}</h1>
                <p class="lead my-3">{{\Str::limit($article->short_text, 100)}}</p>
                <p class="lead mb-0"><a href="{{$article->slug}}" class="text-white fw-bold">Продолжить чтение...</a>
                </p>
            @else
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            @endif
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    @php $articleTop1 = getArticles()[0] ?? null @endphp
                    @if(isset($articleTop1))
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h6 class="mb-0">{{$articleTop1->title}}</h6>
                        <div
                            class="mb-1 text-muted">{{\Carbon\Carbon::parse($articleTop1->created_at)->format('M d')}}</div>
                        <p class="card-text mb-auto">{{\Str::limit($articleTop1->short_text, 81)}}</p>
                        <a href="{{$articleTop1->slug}}" class="stretched-link">Continue reading</a>
                    @else
                        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly
                            and efficiently about what’s most interesting in this post’s contents.</p>
                        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
                    @endif
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{asset('thumbnail.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    @php $articleTop2 = getArticles()[1] ?? null @endphp
                    @if(isset($articleTop2))
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h6 class="mb-0">{{$articleTop2->title}}</h6>
                        <div
                            class="mb-1 text-muted">{{\Carbon\Carbon::parse($articleTop2->created_at)->format('M d')}}</div>
                        <p class="card-text mb-auto">{{\Str::limit($articleTop2->short_text, 91)}}</p>
                        <a href="{{$articleTop2->slug}}" class="stretched-link">Продолжить чтение</a>
                    @else
                        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly
                            and efficiently about what’s most interesting in this post’s contents.</p>
                        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Продолжить чтение</a></p>
                    @endif
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="{{asset('thumbnail.png')}}"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            @yield('content')
        </div>

        <div class="col-md-4">
            @yield('sidebar')
        </div>
    </div>

</main>

<footer class="blog-footer">
    <p>This blog is about world corners. <a href="/">{{config('app.name')}}</a>.
    </p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>
</body>
</html>
