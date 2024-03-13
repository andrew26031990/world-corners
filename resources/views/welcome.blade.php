<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XNX8BJNP34"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XNX8BJNP34');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$location->description ?? "Исследуйте уголки мира, погрузитесь в культуру, природу и достопримечательности разных городов и стран."}}">
    <meta name="keywords" content="{{$location->keywords ?? "уголки мира, путешествия, география, культура, достопримечательности, природа, города."}}">
    <meta name="author" content="Andrew Magzumov">
    <meta name="octoclick-verification" content="5398c64971658027e189c4dbb666a6f4">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{$location->title ?? config('app.name')}}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{asset('thumbnail.webp')}}" />
    <meta property="og:url" content="{{config('app.url').$location->slug ?? "/"}}" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:site_name" content="World Corners" />
    <meta name="Published" content="{{$location->created_at ?? \Carbon\Carbon::now()}}">
    <meta name="Modified" content="{{$location->updated_at ?? \Carbon\Carbon::now()}}">

    <title>{{$location->title ?? config('app.name')}}</title>

    <link rel="icon" type="image/png" href="{{asset('blog/favicon.ico')}}" sizes="32x32">
    <link rel="canonical" href="{{config('app.url')}}" />

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        a {
            color: #FFA500
        }

        #cygroup {
            font-family: 'Dancing Script', cursive;
            text-decoration: none;
        }

        @media (min-width: 768px) {

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        document.addEventListener("visibilitychange", function() {

            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(90971928, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
            });

        });

    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90971928" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Подписаться</a>
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
                <a class="btn btn-sm btn-outline-secondary" href="#">Зарегистрироваться</a>
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
                    <img src="{{asset('thumbnail.webp')}}" loading="lazy" width="200" height="250" alt="World Corners"/>
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
                    <img src="{{asset('thumbnail.webp')}}" loading="lazy" width="200" height="250" alt="World Corners"/>
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
    <p>Этот сайт рассказывает об удивительных уголках мира. <a href="/">{{config('app.name')}}</a>.
    </p>
    <p>
        <a href="#">Пролистать наверх</a>
    </p>
</footer>
<script>
    if (typeof bc_blocks == "undefined" && window.bc_blocks === undefined) {
        var bc_blocks = document.getElementsByClassName("bigClickTeasersBlock");

        if (bc_blocks.length) {
            var bc_blocks_ids = [];

            for (var i=0; i<bc_blocks.length; i++) {
                var bc_el_id_str = bc_blocks[i].id;
                var bc_el_id = parseInt(bc_el_id_str.substring(bc_el_id_str.lastIndexOf("_") + 1));

                if (bc_el_id>0) {
                    bc_blocks_ids.push(bc_el_id)
                }
            }

            if (bc_blocks_ids.length&&bc_blocks_ids.length<5) {
                var bc_scr = document.createElement("script");
                bc_scr.src = "https://trandgid.com/lhzbsrfkjf/js/" + bc_blocks_ids.join("/") + "?r=" + encodeURIComponent(document.referrer) +
                    "&" + Math.round(Math.random()*99999);
                bc_scr.setAttribute("async","");
                document.body.appendChild(bc_scr)
            }
        }
    }
</script>
</body>
</html>
