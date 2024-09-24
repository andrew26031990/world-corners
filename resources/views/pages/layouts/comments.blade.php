@php use Carbon\Carbon; @endphp
@if($comments->count() > 0)
    <div class="comments-area">
        <h4>{{str_pad($comments->count(), 2, '0', STR_PAD_LEFT)}} Comments</h4>
        @foreach($comments as $comment)
            @if($comment->parent_id == null)
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="img/blog/c1.jpg" alt="">
                            </div>
                            <div class="desc">
                                <h5><a href="#">{{$comment->name}}</a></h5>
                                <p class="date">{{Carbon::parse($comment->created_at)->format('F j, Y \a\t g:i a')}}</p>
                                <p class="comment">
                                    {{$comment->comment}}
                                </p>
                            </div>
                        </div>
                        <div class="reply-btn">
                            <a href="" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>
                </div>
                @if($comment->children->isNotEmpty())
                    @foreach($comment->children as $child)
                        <div class="comment-list left-padding" style="padding-left: 60px!important;">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="desc">
                                        <h5><a href="#">{{$child->name}}</a></h5>
                                        <p class="date">{{Carbon::parse($child->created_at)->format('F j, Y \a\t g:i a')}}</p>
                                        <p class="comment">
                                            {{$child->comment}}
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                    <a href="" class="btn-reply text-uppercase">reply</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        @endforeach
    </div>
@endif
<div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="comment-form">
        <div class="form-group form-inline">
            <div class="form-group col-lg-6 col-md-6 name">
                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
            </div>
            <div class="form-group col-lg-6 col-md-6 email">
                <input type="email" class="form-control" id="email" placeholder="Enter email address"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
            </div>
            <input type="hidden" class="form-control" id="location_id" value="{{$location->id}}">
            <input type="hidden" class="form-control" id="parent_id" value="">
        </div>
        <div class="form-group">
            <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Message"
                      onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
        </div>
        <a href="#" class="primary-btn">Post Comment</a>
    </form>
</div>
