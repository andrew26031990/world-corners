<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LVNQ4DP99F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LVNQ4DP99F');
    </script>

    <meta charset="utf-8">
    <meta name="google-adsense-account" content="ca-pub-7180260897557911">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$location->description ?? "Исследуйте уголки мира, погрузитесь в культуру, природу и достопримечательности разных городов и стран."}}">
    <meta name="keywords" content="{{$location->keywords ?? "уголки мира, путешествия, география, культура, достопримечательности, природа, города."}}">
    <meta name="author" content="Andrew Magzumov">
    <meta name="octoclick-verification" content="5398c64971658027e189c4dbb666a6f4">

    <meta name="google-site-verification" content="itnvSOBEoLL2Hhj4sZcy8npTAWf5FtF3mN72pP7Xu-k" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{$location->title ?? config('app.name')}}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{asset('thumbnail.webp')}}" />
    <meta property="og:url" content="{{config('app.url')}}" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:site_name" content="World Corners" />
    <meta name="Published" content="{{$location->created_at ?? \Carbon\Carbon::now()}}">
    <meta name="Modified" content="{{$location->updated_at ?? \Carbon\Carbon::now()}}">

    <title>@if(isset($menu->name))
            {{$menu->name}}
        @elseif(isset($location->title))
            {{$location->title}}
        @else
            {{config('app.name')}}
        @endif</title>

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

        .search-container {
            position: relative;
            display: inline-block;
        }

        .search-input {
            display: none;
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            position: absolute;
            top: 50%;
            left: 25px;
            transform: translateY(-50%);
        }

        .search-input.active {
            display: inline-block;
        }

        img {
            max-width: 300px;
            margin-bottom: 15px; /* Чтобы картинки не слипались */
        }
    </style>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7180260897557911"
            crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('blog/blog.css')}}" rel="stylesheet">

    <!-- Yandex.RTB -->
    <script>window.yaContextCb=window.yaContextCb||[]</script>
    <script src="https://yandex.ru/ads/system/context.js" async></script>
    <!-- Yandex.RTB -->

    <!-- SAPE RTB JS -->
    <script
        async="async"
        src="https://cdn-rtb.sape.ru/rtb-b/js/868/2/137868.js"
        type="text/javascript">
    </script>
    <!-- SAPE RTB END -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
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
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90971928" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(97696799, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/97696799" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                {{--<a class="link-secondary" href="#">Подписаться</a>--}}
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" id="cygroup" href="/">{{config('app.name')}}</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center" id="search" style="position: relative">
                <input type="text" style="width: 80px; position: relative; top: 16px; left: 6px;" id="search-input" class="search-input" placeholder="Search..." />
                <a class="link-secondary" href="#" aria-label="Search" id="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"/>
                        <path d="M21 21l-5.2-5.2"/>
                    </svg>
                </a>
                <div id="clearfix" style="position: absolute; top: 50px;right: 11px; overflow-y: scroll; width: 428px;border: 1px solid #e5e5e5; background-color: white;z-index: 1111111111111111;height: 134px;">

                </div>
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
                <p class="lead mb-0"><a href="{{$article->slug}}" class="text-white fw-bold">Continue reading...</a>
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
        {{--<div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: auto">
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- Yandex.RTB R-A-8796197-1 -->
                    <div id="yandex_rtb_R-A-8796197-1"></div>
                    <script>
                        window.yaContextCb.push(()=>{
                            Ya.Context.AdvManager.render({
                                "blockId": "R-A-8796197-1",
                                "renderTo": "yandex_rtb_R-A-8796197-1"
                            })
                        })
                    </script>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- Yandex.RTB R-A-8796197-1 -->
                    <div id="yandex_rtb_R-A-8796197-4"></div>
                    <script>
                        window.yaContextCb.push(()=>{
                            Ya.Context.AdvManager.render({
                                "blockId": "R-A-8796197-4",
                                "renderTo": "yandex_rtb_R-A-8796197-4"
                            })
                        })
                    </script>
                    <!-- SAPE RTB DIV ADAPTIVE -->
                    --}}{{--<div id="SRTB_888041"></div>--}}{{--
                    <!-- SAPE RTB END -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="height: auto">
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- Yandex.RTB R-A-8796197-2 -->
                    <div id="yandex_rtb_R-A-8796197-2"></div>
                    <script>
                        window.yaContextCb.push(()=>{
                            Ya.Context.AdvManager.render({
                                "blockId": "R-A-8796197-2",
                                "renderTo": "yandex_rtb_R-A-8796197-2"
                            })
                        })
                    </script>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- Yandex.RTB R-A-8796197-5 -->
                    <div id="yandex_rtb_R-A-8796197-5"></div>
                    <script>
                        window.yaContextCb.push(()=>{
                            Ya.Context.AdvManager.render({
                                "blockId": "R-A-8796197-5",
                                "renderTo": "yandex_rtb_R-A-8796197-5"
                            })
                        })
                    </script>
                    <!-- SAPE RTB DIV ADAPTIVE -->
                    --}}{{--<div id="SRTB_888043"></div>--}}{{--
                    <!-- SAPE RTB END -->
                </div>
            </div>
        </div>--}}
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
<!-- Yandex.RTB R-A-8796197-23 -->
<script>
    window.yaContextCb.push(()=>{
        Ya.Context.AdvManager.render({
            "blockId": "R-A-8796197-23",
            "type": "floorAd",
            "platform": "desktop"
        })
    })
</script>
<footer class="blog-footer">
    <p>This website tells about the amazing corners of the world. <a href="/">{{config('app.name')}}</a>.
    </p>
    <p>
        <a href="#">Back to top</a>
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

    obtekanieTeksta();
    document.getElementById('clearfix').style.display = 'none';

    document.getElementById('search-button').addEventListener('click', function(event) {
        event.preventDefault();
        var searchInput = document.getElementById('search-input');
        searchInput.classList.toggle('active');
        if (searchInput.classList.contains('active')) {
            searchInput.focus();
        }
        clearResults();
    });

    let timeout;
    document.getElementById('search-input').addEventListener('keydown', function(event) {
        clearTimeout(timeout);
        clearResults();

        if(event.target.value.length > 1){
            timeout = setTimeout(function() {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', "/api/search-locations/" + encodeURIComponent(event.target.value), true);
                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 400) {
                        var data = JSON.parse(xhr.responseText);
                        document.getElementById('clearfix').style.display = 'block';
                        var searchResultsContainer = document.getElementById('clearfix');

                        for (let i = 0; i < data['locations'].length; i++) {
                            console.log(data['locations'][i].slug);
                            var a = document.createElement('a');
                            a.textContent = data['locations'][i].slug;
                            a.classList.add('dynamic-div');
                            a.style.top = '54px';
                            a.style.right = '355px';
                            a.style.zIndex = 1111111111111111;
                            a.style.float = 'left';
                            a.style.margin = '10px 10px 10px 10px';
                            a.style.backgroundColor = 'white';
                            a.style.border = '1px solid #e5e5e5';
                            a.href = data['locations'][i].slug
                            a.innerHTML = data['locations'][i].title
                            searchResultsContainer.appendChild(a);
                        }
                    } else {
                        console.error('Request failed with status:', xhr.status);
                    }
                };

                xhr.onerror = function() {
                    console.error('Network request failed');
                };

                xhr.send();
            }, 300);
        }
    });

    function clearResults() {
        let elements = document.querySelectorAll('.dynamic-div');
        elements.forEach(function(element) {
            element.remove();
        });
        document.getElementById('clearfix').style.display = 'none';
    }

    function obtekanieTeksta(){
        const images = document.querySelectorAll('img');

        images.forEach((img, index) => {
            if(img.width > 636 || img.height > 358){
                img.style.width = '50%';
                img.style.height = 'auto';
            }

            if (index % 2 === 0) {
                img.style.float = 'left';
                img.style.marginRight = '15px';
            } else {
                img.style.float = 'right';
                img.style.marginLeft = '15px';
            }
        });
    }
</script>
</body>
</html>
