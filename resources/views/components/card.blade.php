@foreach ($posts as $post)
    {{-- display 4 card mix color --}}
    @if ($loop->iteration % 4 == 1)
        <article class="postcard dark blue">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
            </a>
            <div class="postcard__text">
                <h1 class="postcard__title blue"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $post->content }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item play blue">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>
                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 2)
        <article class="postcard dark red">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
            </a>
            <div class="postcard__text">
                <h1 class="postcard__title red"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $post->content }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item play red">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>

                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 3)
        <article class="postcard dark green">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
            </a>
            <div class="postcard__text">
                <h1 class="postcard__title green"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $post->content }}</div>

                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item play green">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>

                    </li>
                </ul>
            </div>
        </article>
    @elseif ($loop->iteration % 4 == 0)
        <article class="postcard dark yellow">
            <a class="postcard__img_link" href="#">
                <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title" />
            </a>
            <div class="postcard__text">
                <h1 class="postcard__title yellow"><a href="#">{{ $post->title }}</a></h1>
                <div class="postcard__subtitle small">
                    <time datetime="2020-05-25 12:00:00">
                        <i class="fa fa-calendar me-2"></i>{{ $post->created_at->format('d-m-Y') }}
                    </time>
                </div>
                <div class="postcard__bar"></div>
                <div class="postcard__preview-txt">{{ $post->content }}</div>
                <ul class="postcard__tagbox">
                    <li class="tag__item"><i class="fa fa-tag me-2"></i>{{ $post->tag }}</li>
                    <li class="tag__item play yellow">
                        <a href="#"><i class="fa fa-play me-2"></i><span class="text-white">Read More</span></a>
                    </li>
                </ul>
            </div>
        </article>
    @endif
@endforeach
