<div class="sidebar__single sidebar__post">
    <h3 class="sidebar__title">Recent Post</h3>
    <ul class="sidebar__post-list list-unstyled">
        @foreach ($news as $new)
            <li>
                <div class="sidebar__post-image">
                    <img src="{{ $new->photo }}" alt="">
                </div>
                <div class="sidebar__post-content">
                    <h3>
                        <a href="blog-details.html">
                            @if (session('key') == 'jp')
                                {{ $new->title_jp ?? '' }}
                            @elseif (session('key') == 'mm')
                                {{ $new->title ?? '' }}::
                            @else
                                {{ $new->title ?? '' }}
                            @endif
                        </a>
                        <span class="sidebar__post-content-meta">
                            <i class="icon-clock"></i>
                            {{ $new->upload_date }}
                        </span>
                    </h3>
                </div>
            </li>
        @endforeach
    </ul>
</div>
