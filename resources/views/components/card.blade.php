@foreach ($posts as $post)
    {{-- display 4 card mix color --}}
    @if ($loop->iteration % 4 == 1)
        <article class="postcard dark blue">
            @if ($post->image != null)
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="{{ $post->image }}" alt="{{ $post->title }}" />
                </a>
            @else
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://source.unsplash.com/1000x1000?{{ $post->title }}"
                        alt="{{ $post->title }}" />
                </a>
            @endif
            <div class="postcard__text">
                <h1 class="postcard__title blue"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ Str::limit($post->content, 250) }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item"><i class="fa fa-user me-2"></i>{{ $post->author }}</li>
                    <li class="tag__item play blue">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>
                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 2)
        <article class="postcard dark red">
            @if ($post->image != null)
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="{{ $post->image }}" alt="{{ $post->title }}" />
                </a>
            @else
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://source.unsplash.com/1000x1000?{{ $post->title }}"
                        alt="{{ $post->title }}" />
                </a>
            @endif
            <div class="postcard__text">
                <h1 class="postcard__title red"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ Str::limit($post->content, 250) }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item"><i class="fa fa-user me-2"></i>{{ $post->author }}</li>

                    <li class="tag__item play red">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>

                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 3)
        <article class="postcard dark green">
            @if ($post->image != null)
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="{{ $post->image }}" alt="{{ $post->title }}" />
                </a>
            @else
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://source.unsplash.com/1000x1000?{{ $post->title }}"
                        alt="{{ $post->title }}" />
                </a>
            @endif
            <div class="postcard__text">
                <h1 class="postcard__title green"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ Str::limit($post->content, 250) }}</div>

                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item"><i class="fa fa-user me-2"></i>{{ $post->author }}</li>
                    <li class="tag__item play green">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>

                    </li>
                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 0)
        <article class="postcard dark yellow">
            @if ($post->image != null)
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="{{ $post->image }}" alt="{{ $post->title }}" />
                </a>
            @else
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://source.unsplash.com/1000x1000?{{ $post->title }}"
                        alt="{{ $post->title }}" />
                </a>
            @endif
            <div class="postcard__text">
                <h1 class="postcard__title yellow"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ Str::limit($post->content, 250) }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item"><i class="fa fa-user me-2"></i>{{ $post->author }}</li>
                    <li class="tag__item play yellow">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>
                </ul>
            </div>
        </article>
    @endif
@endforeach
