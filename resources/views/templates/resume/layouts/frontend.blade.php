<!doctype html>
<html @if(session()->get('lang')=='ar') lang="ar" dir="RTL" @else lang="en" @endif itemscope
      itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('partials.seo')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/plugins/bootstrap.min.css')}}">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/plugins/font-awesome.min.css') }}">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/plugins/swiper.min.css')}}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/plugins/fancybox.min.css')}}">
    <!-- line-awesome webfont -->
    @if(session()->get('lang') =='ar')
        <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style.css-ar')}}">
    @else
        <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style-ar.css')}}">
    @endif
<!-- favicon  -->
    <link rel="shortcut icon" href="{{asset($activeTemplateTrue.'img/thumbnail.ico')}}" type="image/x-icon">
    {{--<link rel="stylesheet"--}}
    {{--href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">--}}
    {{--@stack('style-lib')--}}
    {{--@stack('style')--}}
</head>
<body>
<!-- app -->
<div class="art-app art-app-onepage">
    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>
    <!-- app wrapper -->
    <div class="art-app-wrapper">
        <!-- app container end -->
        <div class="art-app-container">
            <!-- info bar -->
            <div class="art-info-bar">
                <!-- menu bar frame -->
                <div class="art-info-bar-frame">
                    <!-- info bar header -->
                    <div class="art-info-bar-header">
                        <!-- info bar button -->
                        <a class="art-info-bar-btn" href="#.">
                            <!-- icon -->
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <!-- info bar button end -->
                    </div>
                    <!-- info bar header end -->
                    <!-- info bar header -->
                    <div class="art-header">
                        <!-- avatar -->
                        <div class="art-avatar">
                            <a data-fancybox="avatar"
                               href="{{ getImage('assets/images/frontend/about/' . $about->data_values->image) }}"
                               class="art-avatar-curtain" target="_blank">
                                <img src="{{ getImage('assets/images/frontend/about/' . $about->data_values->image) }}"
                                     alt="avatar">
                                <i class="fas fa-expand"></i>
                            </a>
                            <!-- available -->
                            <div class="art-lamp-light">
                                <!-- add class 'art-not-available' if not available-->
                                <div class="art-available-lamp"></div>
                            </div>
                        </div>
                        <!-- avatar end -->
                        <!-- name -->
                        <h5 class="art-name mb-10">{{ $about->data_values->title }}</h5>
                        <!-- post -->
                        <div class="art-sm-text">{{ $about->data_values->title }}</div>
                    </div>
                    <!-- info bar header end -->

                    <!-- scroll frame -->
                    <div id="scrollbar2" class="art-scroll-frame">
                        <!-- info bar about -->
                        {{--<div class="art-table p-15-15">--}}
                            {{--<!-- about text -->--}}
                            {{--<ul>--}}
                                {{--<!-- country -->--}}
                                {{--<li>--}}
                                    {{--<h6>@lang('Residence'):</h6><span>{{ $address->data_values->phone }}</span>--}}
                                {{--</li>--}}
                                {{--<!-- city -->--}}
                                {{--<li>--}}
                                    {{--<h6>@lang('City'):</h6><span>{{ $address->data_values->email }}</span>--}}
                                {{--</li>--}}
                                {{--<!-- age -->--}}
                                {{--<li>--}}
                                    {{--<h6>@lang('Age')':</h6><span>{{ $address->data_values->address }}</span>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<!-- info bar about end -->--}}

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- language skills -->
                        <div class="art-lang-skills p-30-15">
                            <!-- skill -->
                            <div class="art-lang-skills-item">
                                <div id="circleprog1" class="art-cirkle-progress"></div>
                                <!-- title -->
                                <h6>@lang('Arabic')</h6>
                            </div>
                            <!-- skill end -->
                            <!-- skill -->
                            <div class="art-lang-skills-item">
                                <div id="circleprog2" class="art-cirkle-progress"></div>
                                <!-- title -->
                                <h6>@lang('English')</h6>
                            </div>
                            <!-- skill end -->

                            {{--<!-- skill -->--}}
                            {{--<div class="art-lang-skills-item">--}}
                                {{--<div id="circleprog3" class="art-cirkle-progress"></div>--}}
                                {{--<!-- title -->--}}
                                {{--<h6>@lang('Spanish')</h6>--}}
                            {{--</div>--}}
                            <!-- skill end -->
                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>

                        <!-- hard skills -->
                        <div class="art-hard-skills p-30-15">
                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Laravel</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog1"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>MySQL</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog2"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Wordpress</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog3"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Prestashop</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog4"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->

                            <!-- skill -->
                            <div class="art-hard-skills-item">
                                <div class="art-skill-heading">
                                    <!-- title -->
                                    <h6>Html , CSS , Js</h6>
                                </div>
                                <!-- progressbar frame -->
                                <div class="art-line-progress">
                                    <!-- progressbar -->
                                    <div id="lineprog5"></div>
                                </div>
                                <!-- progressbar frame end -->
                            </div>
                            <!-- skill end -->
                        </div>
                        <!-- language skills end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>
                        <!-- knowledge list -->
                        <ul class="art-knowledge-list p-15-0">
                            <!-- list item -->
                            @foreach($skills as $skill)
                            <li>{{$skill->data_values->title}}</li>
                            @endforeach

                        </ul>
                        <!-- knowledge list end -->

                        <!-- divider -->
                        <div class="art-ls-divider"></div>
                        <!-- links frame -->
                        <div class="art-links-frame p-15-15">
                            <!-- download cv button -->
                            <a href="{{asset($activeTemplateTrue.'files/cv.txt')}}" class="art-link" download>Download
                                cv <i class="fas fa-download"></i></a>
                        </div>
                        <!-- links frame end -->
                    </div>
                    <!-- scroll frame end -->

                    <!-- sidebar social -->
                    <div class="art-ls-social">
                        <!-- social link -->
                        @foreach($socials as $social)
                            <a href="{{ $social->data_values->social_url }}." target="_blank">
                                {!!  $social->data_values->social_icon!!}</a>
                        @endforeach
                    </div>
                    <!-- sidebar social end -->
                </div>
                <!-- menu bar frame end -->
            </div>
            <!-- info bar end -->

        @yield('content')

        {{--<!-- menu bar -->--}}
            {{--<div class="art-menu-bar">--}}
                {{--<!-- menu bar frame -->--}}
                {{--<div class="art-menu-bar-frame">--}}
                    {{--<!-- current page title -->--}}
                    {{--<div class="art-current-page"></div>--}}
                    {{--<!-- current page title end -->--}}
                    {{--<!-- scroll frame -->--}}
                    {{--<div class="art-scroll-frame">--}}
                        {{--<!-- menu -->--}}
                        {{--<nav id="swupMenu">--}}
                            {{--<!-- menu list -->--}}
                            {{--<ul class="main-menu">--}}
                                {{--<!-- menu item -->--}}
                                {{--<li class="menu-item current-menu-item"><a href="/home.html">Home</a></li>--}}
                            {{--</ul>--}}
                            {{--<!-- menu list end -->--}}
                        {{--</nav>--}}
                        {{--<!-- menu end -->--}}
                        {{--<!-- language change -->--}}
                        {{--<ul class="art-language-change">--}}
                            {{--<!-- language item -->--}}
                            {{--@foreach($language as $lang)--}}
                                {{--<li @if(session()->get('lang') == $lang->code) class="art-active-lang" @endif>--}}
                                    {{--<a href="{{route('lang',$lang->code)}}">{{$lang->code}}</a>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--<!-- language item -->--}}
                            {{--<li class="art-active-lang"><a href="#.">EN</a></li>--}}
                        {{--</ul>--}}
                        {{--<!-- language change end -->--}}
                    {{--</div>--}}
                    {{--<!-- scroll frame end -->--}}
                {{--</div>--}}
                {{--<!-- menu bar frame -->--}}
            {{--</div>--}}
            {{--<!-- menu bar end -->--}}
        </div>
        <!-- app container end -->
    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="art-preloader">
        <!-- preloader content -->
        <div class="art-preloader-content">
            <!-- title -->
            <h4>Hammam Zarefa</h4>
            <!-- progressbar -->
            <div id="preloader" class="art-preloader-load"></div>
        </div>
        <!-- preloader content end -->
    </div>
    <!-- preloader end -->

</div>
<!-- app end -->
<div id="swupMenu"></div>


<!-- jQuery library -->
<script src="{{asset($activeTemplateTrue.'js/plugins/jquery.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/plugins/anime.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/swiper.min.js')}}"></script>
<!-- bootstrap-toggle js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/progressbar.min.js')}}"></script>

<!-- slimscroll js for custom scrollbar -->
<script src="{{asset($activeTemplateTrue.'js/plugins/smooth-scrollbar.min.js')}}"></script>
<!-- custom select box js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/overscroll.min.js')}}"></script>

<script src="{{ asset($activeTemplateTrue.'js/plugins/typing.min.js') }}"></script>

<!-- code preview js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/isotope.min.js')}}"></script>
<!-- seldct 2 js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/fancybox.min.js')}}"></script>
<!-- main js -->
<script src="{{asset($activeTemplateTrue.'js/plugins/swup.min.js')}}"></script>

<script src="{{asset($activeTemplateTrue.'js/main.js')}}"></script>


@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('admin.partials.notify')


<script>
    (function ($) {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();
        });
    })(jQuery);
</script>

</body>
</html>
