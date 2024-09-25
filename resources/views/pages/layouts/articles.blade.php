<aside class="single_sidebar_widget search_widget">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Posts">
        <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
    </div><!-- /input-group -->
    <div class="br"></div>
</aside>
<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Popular Places</h3>
    @foreach(getArticles() as $key => $location)
        @if($key <= 3)
            <div class="media post_item">
                <img src="{{$location->img ?? url('img/blog/popular-post/post1.jpg')}}" alt="post">
                <div class="media-body">
                    <a href="{{$location->slug}}">
                        <h3>{{\Str::limit($location->title, 30)}}</h3>
                    </a>
                    <p>{{$location->created_at->diffForHumans()}}</p>
                </div>
            </div>
        @endif
    @endforeach
    <div class="br"></div>
</aside>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Place Categories</h4>
    <ul class="list cat-list">
        @foreach(getCategoriesArticlesCount() as $category)
            @if($category->locations_count > 0)
                <li>
                    <a href="{{$category->slug}}" class="d-flex justify-content-between">
                        <p>{{$category->name}}</p>
                        <p>{{$category->locations_count}}</p>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
    <div class="br"></div>
</aside>
<aside class="single-sidebar-widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    <p>
        Here, I focus on a range of items and features that we use in life without
        giving them a second thought.
    </p>
    <div class="form-group d-flex flex-row">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup"
                   placeholder="Enter email"
                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
        </div>
        <a href="#" class="bbtns subscription">Subcribe</a>
    </div>
    <p class="text-bottom">You can unsubscribe at any time</p>
    <div class="br"></div>
</aside>
