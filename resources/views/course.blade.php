@extends('layouts.app')

@section('content')
    <div id="static-banner" class="container-fluid px-md-5 px-4 py-4 bg-dark text-white" style="background: linear-gradient(to right, rgba(0, 0, 0, .9), rgba(0, 0, 0, .9)), url('{{ asset($course['img']) }}') no-repeat center; background-size: cover;">
        <div class="px-md-5 py-2">
            <div class="row text-montserrat">
                <div class="col-lg-8">
                    <h1>{{ $course['trader']['level'] }}</h1>
                    <h4>{{ $course['level'] }}</h4>
                    <div class="pt-2">
                        <span class="rounded-sm bg-{{ $course['color'] }}-gradient py-2 px-3 font-weight-bold d-inline-flex mr-2 mb-2 d-lg-none align-items-center">{{ $course['trader']['level'] }} Level <i class="fas fa-medal text-large fa-rotate-180 ml-2 pr-2 border-right border-white-50"></i> </span>
                        <span class="rounded-sm bg-{{ $course['color'] }}-gradient py-2 px-3 font-weight-bold d-lg-inline-flex d-none align-items-center">{{ $course['trader']['level'] }} Level <i class="fas fa-medal text-large fa-rotate-180 ml-2 pr-2 border-right border-white-50"></i> </span>
                        <i class="fas fa-user-friends text-yellow"></i> <strong>{{ $course['reviews']['mark'] }} <i class="fas text-orange fa-star"></i></strong>  ({{ $course['reviews']['voters'] }} reviews)
                        <i class="fas fa-comment text-yellow"></i> French
                    </div>
                    <div class="pt-2">
                        Created by <strong>Global Investment Trading Academy</strong>.
                        Last updated Sat, 06-Jul-2019
                    </div>
                </div>
                <div id="static-card" class="col-lg-4 position-relative d-none d-lg-block">
                    <aside class="card border-0 bg-transparent shadow position-absolute w-100">
                        <div class="d-flex justify-content-center align-items-center overflow-hidden card-img-top embed-responsive embed-responsive-16by9" style="background: url('{{ asset($course['img']) }}') no-repeat center; background-size: cover;">
                            <div class="rounded-circle d-flex justify-content-center align-items-center">
                                <span class="fa-stack fa-4x">
                                    <i class="fas fa-circle text-black fa-stack-2x"></i>
                                    <i class="fas fa-play fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                        <div class="card-body bg-{{ $course['color'] }}-gradient position-relative">
                            <span class="position-absolute bg-yellow text-black text-baloo text-x-large px-3 rounded shadow pt-2" style="top: -.5rem; right: 1rem; transform: translateY(-50%);">$ {{ $course['price'] }}</span>
                            <div class="">
                                <div class="d-flex flex-column justify-content-between h-100">
                                    <div class="pb-2">
                                        <i class="fas fa-certificate text-yellow"></i>
                                        Guaranteed certificate
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-yellow font-weight-bold">Enroll Now</a>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <h5>Includes:</h5>
                                    <ul class="fa-ul pb-0 pl-0 my-0 ml-4">
                                        <li><i class="fas fa-file-video fa-li"></i> 23:47:22 Hours On demand videos</li>
                                        <li><i class="fas fa-file fa-li"></i> 17 Lessons</li>
                                        <li><i class="fas fa-compass fa-li"></i> Full lifetime access</li>
                                        <li><i class="fas fa-mobile-alt fa-li"></i> Access on mobile and tv</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

    @component('components.section', [
        'bgColor' => 'white',
        'fontColor' => 'dark',
        'title' => [
            'color' => '',
            'text' => ''
        ],
        'subtitle' => ''
    ])
        <div class="row">
            <div class="col-lg-8">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="text-montserrat">What you will learn</h2>
                        <div class="row">
                            @foreach ($course['what-you-will-learn'] as $item)
                                <div class="col-sm-6 d-flex">
                                    <div class="pr-2"><i class="fas fa-check text-secondary"></i></div>
                                    <div>{{ $item }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div>
                            <h2 class="text-montserrat">Course content</h2>
                            <div>
                                <div class="accordion" id="accordion-course-content">
                                    @foreach ($course['course-content'] as $key => $item)
                                    <div class="card">
                                        <div class="card-header py-2" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}" id="heading{{ $key }}">
                                            <h2 class="mb-0">
                                            <button class="btn btn-link text-montserrat font-weight-bold text-decoration-none">
                                                <i class="fas text-green fa-{{ $key === 0 ? 'minus' : 'plus' }} mr-2"></i><span class="text-dark">{{ $item['title'] }}</span>
                                            </button>
                                            </h2>
                                        </div>

                                        <div id="collapse{{ $key }}" class="collapse {{ $key === 0 ? 'show' : '' }} accordion-card-body" aria-labelledby="heading{{ $key }}" data-parent="#accordion-course-content">
                                            <div class="list-group list-group-flush border-top">
                                                @foreach ($item['subcontent'] as $subcontent)
                                                <li class="list-group-item">
                                                    <i class="fas fa-play ml-4 pl-2 mr-2"></i>{{ $subcontent }}
                                                </li>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <div class="d-flex justify-content-between align-items-center border-bottom">
                                <h4 class="text-montserrat">Reviews</h4>
                                {{-- <form action="" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="search" class="form-control border-darkblue" placeholder="Search a review...">
                                            <div class="input-group-append">
                                                <button class="btn btn-darkblue text-white">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>

                            <div class="row">
                                @foreach ($course['comments'] as $comment)
                                <div class="col-12 py-3 border-bottom">
                                    <div class="row">
                                        <div class="col-lg-4 d-flex">
                                            <div class="rounded-circle bg-secondary d-inline-flex mr-2 justify-content-center align-items-center text-white" style="width: 46px; height: 46px">{{ $comment['author']['abbr'] }}</div>
                                            <div class="flex-fill">
                                                <div class="text-muted">{{ Carbon\Carbon::parse($comment['date'])->diffForHumans() }}</div>
                                                {{ $comment['author']['name'] }}
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="pb-3">
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($i < $comment['mark'])
                                                    <i class="fas fa-star text-yellow"></i>
                                                    @else
                                                    <i class="fas fa-star text-black-50"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                            <div>
                                                {{ $comment['text'] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="pt-4 pt-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="text-montserrat">Requirements</h2>
                                    <div>
                                        <ul class="pl-3">
                                            <li class="mb-2">Have a basic understanding of HTML, CSS and PHP (all courses I offer)</li>
                                            <li class="mb-2">Have access to a code editor, free or otherwise. I suggest Coda 2, as that's the editor I use exclusively.</li>
                                            <li class="mb-2">An Internet connection is required.</li>
                                            <li class="mb-2">A fresh copy of Bootstrap and WordPress (we will go over this in the beginning of the course).</li>
                                            <li class="mb-2">Download & Install MAMP (or alternatives — we cover this in the course)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h2 class="text-montserrat">Description</h2>
                            <div>
                                <p>
                                    <strong>
                                        Do you want to supercharge your HTML, CSS & PHP knowledge and learn how to turn them into a real business that can make you more money as a freelancer?
                                    </strong>
                                </p>
                                <p>
                                Whether you're a freelance designer, entrepreneur, employee for a company, code hobbyist, or looking for a new career — this course gives you an immensely valuable skill that will enable you to either:
                                </p>

                                <strong>
                                Make money on the side
                                </strong>

                                <p>
                                So you can save up for that Hawaiian vacation you've been wanting, help pay off your debt, your car, your mortgage, or simply just to have bonus cash laying around.
                                </p>

                                <strong>
                                Create a full-time income
                                </strong>

                                <p>
                                WordPress developers have options. Many developers make a generous living off of creating custom WordPress themes and selling them on websites like ThemeForest. Freelance designers and developers can also take on WordPress projects and make an extra $1,000 - $5,000+ per month.
                                </p>

                                <p>
                                    <strong>
                                        <em>Who Should Take This Course?</em>
                                    </strong>
                                </p>

                                <strong>
                                Graphic & Web Designers
                                </strong>

                                <p>
                                Graphic designers are extremely talented, but ask them to code their designs and they'll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-block d-lg-none">
                <aside class="card border-0 bg-transparent shadow text-white w-100">
                    <div class="d-flex justify-content-center align-items-center overflow-hidden card-img-top embed-responsive embed-responsive-16by9" style="background: url('{{ asset($course['img']) }}') no-repeat center; background-size: cover;">
                        <div class="rounded-circle d-flex justify-content-center align-items-center">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle text-black fa-stack-2x"></i>
                                <i class="fas fa-play fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                    </div>
                    <div class="card-body bg-{{ $course['color'] }}-gradient position-relative">
                        <span class="position-absolute bg-yellow text-black text-baloo text-x-large px-3 rounded shadow pt-2" style="top: -.5rem; right: 1rem; transform: translateY(-50%);">$ {{ $course['price'] }}</span>
                        <div class="">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div class="pb-2">
                                    <i class="fas fa-certificate text-yellow"></i>
                                    Guaranteed certificate
                                </div>
                                <div>
                                    <a href="#" class="btn btn-yellow font-weight-bold">Enroll Now</a>
                                </div>
                            </div>
                            <div class="pt-2">
                                <h5>Includes:</h5>
                                <ul class="fa-ul pb-0 pl-0 my-0 ml-4">
                                    <li><i class="fas fa-file-video fa-li"></i> 23:47:22 Hours On demand videos</li>
                                    <li><i class="fas fa-file fa-li"></i> 17 Lessons</li>
                                    <li><i class="fas fa-compass fa-li"></i> Full lifetime access</li>
                                    <li><i class="fas fa-mobile-alt fa-li"></i> Access on mobile and tv</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    @endcomponent

    <div class="d-none d-lg-block">
        <div id="fixed-banner" class="container-fluid position-fixed px-md-5 bg-black-80 text-white" style="top: 60px; z-index: 1500px; display: none;">
            <div class="px-md-5 pt-2 pb-3">
                <div class="row text-montserrat">
                    <div class="col-lg-8">
                        <h2>{{ $course['trader']['level'] }}</h2>
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <span class="rounded-sm bg-{{ $course['color'] }}-gradient py-2 px-3 font-weight-bold d-inline-flex align-items-center">{{ $course['trader']['level'] }} Level <i class="fas fa-medal text-large fa-rotate-180 ml-2 pr-2 border-right border-white-50"></i> </span>
                            </div>
                            <div class="mr-3">
                                <i class="fas fa-user-friends text-yellow"></i> <strong>{{ $course['reviews']['mark'] }} <i class="fas text-orange fa-star"></i></strong>  ({{ $course['reviews']['voters'] }} reviews)
                            </div>
                            <div>
                                <i class="fas fa-comment text-yellow"></i> French
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 position-relative">
                        <aside class="card border-0 bg-transparent shadow position-absolute w-100">
                            <div class="d-none justify-content-center align-items-center overflow-hidden card-img-top embed-responsive embed-responsive-16by9" style="background: url('{{ asset($course['img']) }}') no-repeat center; background-size: cover;"></div>
                            <div class="card-body bg-{{ $course['color'] }}-gradient position-relative">
                                <span class="position-absolute text-white text-baloo text-xx-large px-3 rounded pt-2" style="top: 1rem; right: 1rem;"><i class="fas fa-dollar-sign"></i> {{ $course['price'] }}</span>
                                <div class="">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div>
                                            <a href="#" class="btn btn-yellow btn-block w-50 text-large font-weight-bold">Enroll Now</a>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <i class="fas fa-certificate text-yellow"></i>
                                        Guaranteed certificate
                                    </div>
                                    <div class="pt-2">
                                        <h5>Includes:</h5>
                                        <ul class="fa-ul pb-0 pl-0 my-0 ml-4">
                                            <li><i class="fas fa-file-video fa-li"></i> 23:47:22 Hours On demand videos</li>
                                            <li><i class="fas fa-file fa-li"></i> 17 Lessons</li>
                                            <li><i class="fas fa-compass fa-li"></i> Full lifetime access</li>
                                            <li><i class="fas fa-mobile-alt fa-li"></i> Access on mobile and tv</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            const fixedBanner = $('#fixed-banner');
            const staticBanner = $('#static-banner');
            const staticCard = $('#static-card');
            const bottom = staticBanner.offset().top + staticBanner.outerHeight();

            if ($(document).scrollTop() < bottom) {
                fixedBanner.hide();
                staticCard.show();
            }
            else {
                fixedBanner.show();
                staticCard.hide();
            }

            $('.accordion-card-body')
                .on('show.bs.collapse', function () {
                    const current = $(this);
                    $('#accordion-course-content').find('button.btn-link').children('i').removeClass('fa-minus').addClass('fa-plus');
                    current.parent().find('button.btn-link').children('i').removeClass('fa-plus').addClass('fa-minus');
                });

            $(document).scroll(function () {
                const value = $(this).scrollTop();
                if (value < bottom) {
                    fixedBanner.hide();
                    staticCard.show();
                }
                else {
                    fixedBanner.show();
                    staticCard.hide();
                }
            });
        });
    </script>
@endsection
