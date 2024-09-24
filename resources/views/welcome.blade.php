<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <title>Amazing places</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/nice-select/css/nice-select.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>--}}
</head>

<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{asset('img/logo.webp')}}" style="width: 94px" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        @foreach(getMenu() as $item)
                            @if($item->children->isNotEmpty())
                                <li class="nav-item submenu dropdown">
                                    <a href="{{$item->slug}}" id="{{$item->id}}MegaMenu" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                       aria-expanded="false">{{$item->name}}</a>
                                    <ul class="dropdown-menu">
                                        @foreach($item->children as $child)
                                            <li class="nav-item"><a class="nav-link" id="{{$child->id}}MegaMenu" href="{{$child->slug}}">{{$child->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item"><a class="nav-link" id="{{$item->id}}MegaMenu" href="{{$item->slug}}">{{$item->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="primary-btn">Book a trip</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="search nav-link">
                                <i class="lnr lnr-magnifier" id="search"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner_content">
                    <p>Plan a trip to everywhere with</p>
                    <h2>Amazing Places</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

@yield('content')

<!--================  Start Footer Area =================-->
<footer class="footer-area">
    <div class="footer_top section_gap_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h5 class="footer_title">About Agency</h5>
                        <p class="about-text">The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point where images and videos are used more to </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h5 class="footer_title">Navigation Links</h5>
                        <div class="row">
                            <div class="col-5">
                                <ul class="list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-5">
                                <ul class="list">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Newsletter</h5>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>
                        <div class="footer-newsletter" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                  method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                           required="" type="email">
                                    <button class="click-btn btn btn-default"><span class="lnr lnr-location" aria-hidden="true"></span></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h5 class="mb-20">Instragram Feed</h5>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="{{asset('img/i1.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i2.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i3.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i4.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i5.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i6.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i7.jpg')}}" alt=""></li>
                            <li><img src="{{asset('img/i8.jpg')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-right">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================ End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/stellar.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/owl-carousel-thumb.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>

</html>


{{--<!DOCTYPE html>
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
                --}}{{--<a class="link-secondary" href="#">Подписаться</a>--}}{{--
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
                <div id="clearfix" style="position: absolute; top: 50px;right: 11px; overflow-y: scroll; width: 428px;border: 1px solid #e5e5e5; background-color: white;z-index: 1111111111111111;max-height: 134px; height: auto">

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
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-body-secondary">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-body-secondary">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continue reading
                        <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
                    </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
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
</html>--}}
