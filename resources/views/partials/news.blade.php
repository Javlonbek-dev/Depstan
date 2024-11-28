<aside id="recent-posts-2" class="widget inner-padding widget_recent_entries">
    <h2 class="widget-title">Сўнгги янгиликлар</h2>
    <ul>
        @foreach($allNews as $new)
            <li>
                <a href="{{route('news_show', $new->id)}}">{{$new->title}}</a>
            </li>
        @endforeach
    </ul>

</aside>
