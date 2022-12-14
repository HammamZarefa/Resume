@extends('templates.resume.layouts.frontend')
@section('content')
<!-- content -->
<div class="art-content">
    <!-- curtain -->
    <div class="art-curtain"></div>
    <!-- top background -->
    <div class="art-top-bg" style="background-image: url({{asset($activeTemplateTrue.'img/bg.jpg')}})">
        <!-- overlay -->
        <div class="art-top-bg-overlay"></div>
        <!-- overlay end -->
    </div>
    <!-- top background end -->
    <!-- swup container -->
    <div class="transition-fade" id="swup">
        <!-- scroll frame -->
        <div id="scrollbar" class="art-scroll-frame">
            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- banner -->
                        <div class="art-a art-banner"
                             style="background-image: url({{asset($activeTemplateTrue.'img/bg.jpg')}})">
                            <!-- banner back -->
                            <div class="art-banner-back"></div>
                            <!-- banner dec -->
                            <div class="art-banner-dec"></div>
                            <!-- banner overlay -->
                            <div class="art-banner-overlay">
                                <!-- main title -->
                                <div class="art-banner-title">
                                    <!-- title -->
                                    <h1 class="mb-15">{!! getContentTranslation($hero->data_values,'heading')!!}</h1>
                                    <!-- suptitle -->
                                    <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build
                                        <span class="txt-rotate" data-period="2000"
                                              data-rotate='[ "web interfaces.", "ios and android applications.", "design mocups.", "automation tools." ]'></span>&lt;/<i>code</i>&gt;
                                    </div>
                                    <div class="art-buttons-frame">
                                        <!-- button -->
                                        <a href="#."
                                           class="art-btn art-btn-md"><span>{{getContentTranslation($hero->data_values,'button')}}</span></a>
                                        <!-- button -->
                                        <a href="#." class="art-link art-white-link art-w-chevron">@lang('Hire me')</a>
                                    </div>
                                </div>
                                <!-- main title end -->
                                <!-- photo -->
                                <img src="{{ getImage('assets/images/frontend/hero/' . $hero->data_values->image) }}"
                                     class="art-banner-photo" alt="Hammam Zarefa">
                            </div>
                            <!-- banner overlay end -->
                        </div>
                        <!-- banner end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row p-30-0">
                @forelse($counter_elements as $item)
                    <!-- col -->
                        <div class="col-md-3 col-6">
                            <!-- couner frame -->
                            <div class="art-counter-frame">
                                <!-- counter -->
                                <div class="art-counter-box">
                                    <!-- counter number -->
                                    <span class="art-counter">{{$item->data_values->number}}</span><span
                                            class="art-counter-plus"></span>
                                </div>
                                <!-- counter end -->
                                <!-- title -->
                                <h6>{{getContentTranslation($item->data_values,'title') }}</h6>
                            </div>
                            <!-- couner frame end -->
                        </div>
                        <!-- col end -->
                    @empty
                    @endforelse
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Services')</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->

                @forelse($service_elements as $item)
                    <!-- col -->
                        <div class="col-lg-4 col-md-6">
                            <!-- service -->
                            <div class="art-a art-service-icon-box">
                                <!-- service content -->
                                <div class="art-service-ib-content">
                                    <!-- title -->
                                    <h5 class="mb-15">{{getContentTranslation($item->data_values,'title') }}</h5>
                                    <!-- text -->
                                    <div class="mb-15">{{ getContentTranslation($item->data_values,'content') }}.
                                    </div>
                                    <!-- button -->
                                    <div class="art-buttons-frame">
                                        <a href="#contactform" class="art-link art-color-link art-w-chevron">@lang('Order now')</a>
                                    </div>
                                </div>
                                <!-- service content end -->
                            </div>
                            <!-- service end -->
                        </div>
                        <!-- col end -->
                    @empty
                    @endforelse
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

        {{--<!-- container -->--}}
        {{--<div class="container-fluid">--}}
        {{--<!-- row -->--}}
        {{--<div class="row p-0-0">--}}
        {{--<!-- col -->--}}
        {{--<div class="col-lg-12">--}}
        {{--<!-- section title -->--}}
        {{--<div class="art-section-title">--}}
        {{--<!-- title frame -->--}}
        {{--<div class="art-title-frame">--}}
        {{--<!-- title -->--}}
        {{--<h4>Price Plans</h4>--}}
        {{--</div>--}}
        {{--<!-- title frame end -->--}}
        {{--</div>--}}
        {{--<!-- section title end -->--}}
        {{--</div>--}}
        {{--<!-- col end -->--}}

        {{--<!-- col -->--}}
        {{--<div class="col-lg-4">--}}
        {{--<!-- price -->--}}
        {{--<div class="art-a art-price">--}}
        {{--<!-- price body -->--}}
        {{--<div class="art-price-body">--}}
        {{--<h5 class="mb-30">Starter Price</h5>--}}
        {{--<!-- price cost -->--}}
        {{--<div class="art-price-cost">--}}
        {{--<div class="art-number">FREE<sup>*</sup></div>--}}
        {{--</div>--}}
        {{--<!-- price cost end -->--}}
        {{--<!-- price list -->--}}
        {{--<ul class="art-price-list">--}}
        {{--<!-- list item -->--}}
        {{--<li>Ui Design</li>--}}
        {{--<!-- list item -->--}}
        {{--<li>Web Development</li>--}}
        {{--<!-- list item -->--}}
        {{--<li class="art-empty-item">Logo design</li>--}}
        {{--<!-- list item -->--}}
        {{--<li class="art-empty-item">SEO optimization</li>--}}
        {{--<!-- list item -->--}}
        {{--<li class="art-empty-item">Wordpress integration</li>--}}
        {{--</ul>--}}
        {{--<!-- price list end -->--}}
        {{--<!-- button -->--}}
        {{--<a href="#." class="art-link art-color-link art-w-chevron">Order now</a>--}}
        {{--<div class="art-asterisk"><sup>*</sup>Free only when ordering paid services--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- price body end -->--}}
        {{--</div>--}}
        {{--<!-- price end -->--}}
        {{--</div>--}}
        {{--<!-- grid -->--}}
        {{----}}
        {{--</div>--}}
        {{--<!-- row end -->--}}
        {{--</div>--}}
        {{--<!-- container end -->--}}

        <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    {{--<div class="col-lg-12">--}}
                        {{--<!-- section title -->--}}
                        {{--<div class="art-section-title">--}}
                            {{--<!-- title frame -->--}}
                            {{--<div class="art-title-frame">--}}
                                {{--<!-- title -->--}}
                                {{--<h4>{{ __(@$testimonial_content->data_values->heading) }}</h4>--}}
                            {{--</div>--}}
                            {{--<!-- title frame end -->--}}
                        {{--</div>--}}
                        {{--<!-- section title end -->--}}
                    {{--</div>--}}
                    <!-- col end -->

                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- slider container -->
                        <div class="swiper-container art-testimonial-slider" style="overflow: visible">
                            <!-- slider wrapper -->
                            <div class="swiper-wrapper">
                            @forelse($testimonial_elements as $item)
                                <!-- slide -->
                                    <div class="swiper-slide">
                                        <!-- testimonial -->
                                        <div class="art-a art-testimonial">
                                            <!-- testimonial body -->
                                            <div class="testimonial-body">
                                                <!-- photo -->
                                                <img class="art-testimonial-face"
                                                     src="{{ getImage('assets/images/frontend/testimonial/' . @$item->data_values->image) }}"
                                                     alt="face">
                                                <!-- name -->
                                                <h5>{{ __(@$item->data_values->name) }}</h5>
                                                <div class="art-el-suptitle mb-15">{{ __(@$item->data_values->designation) }}</div>
                                                <!-- text -->
                                                <div class="mb-15">{{ __(@$item->data_values->review) }}.
                                                </div>
                                            </div>
                                            <!-- testimonial body end -->
                                            <!-- testimonial footer -->
                                            <div class="art-testimonial-footer">
                                                <div class="art-left-side">
                                                    <!-- star rate -->
                                                    <ul class="art-star-rate">
                                                        @for($i = 1; $i <= 5; $i++)
                                                            @if($i <= $item->data_values->rating_out_of_5)
                                                                <li><i class="fas fa-star"></i></li>
                                                            @else
                                                                <li><i class="fas fa-star"></i></li>
                                                            @endif
                                                        @endfor
                                                    </ul>
                                                    <!-- star rate end -->
                                                </div>
                                                <div class="art-right-side">

                                                </div>
                                            </div>
                                            <!-- testimonial footer end -->
                                        </div>
                                        <!-- testimonial end -->
                                    </div>
                                    <!-- slide end -->
                                @empty
                                @endforelse
                            </div>
                            <!-- slider wrapper end -->
                        </div>
                        <!-- slider container end -->
                    </div>
                    <!-- col end -->

                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- slider navigation -->
                        <div class="art-slider-navigation">
                            <!-- left side -->
                            <div class="art-sn-left">
                                <!-- slider pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- left side end -->

                            <!-- right side -->
                            <div class="art-sn-right">
                                <!-- slider navigation -->
                                <div class="art-slider-nav-frame">
                                    <!-- prev -->
                                    <div class="art-slider-nav art-testi-swiper-prev">
                                    @if(session()->get('lang') =='ar')
                                    <i class="fas fa-chevron-right"></i>
                                    @else
                                    <i class="fas fa-chevron-left"></i>
                                    @endif
                                    </div>
                                    <!-- next -->
                                    <div class="art-slider-nav art-testi-swiper-next">
                                    @if(session()->get('lang') =='ar')
                                    <i class="fas fa-chevron-left"></i>
                                    @else
                                    <i class="fas fa-chevron-right"></i>
                                    @endif
                                    </div>
                                </div>
                                <!-- slider navigation -->
                            </div>
                            <!-- right side end -->
                        </div>
                        <!-- slider navigation end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row p-30-0">
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Works')</h4>
                            </div>
                            <!-- title frame end -->
                            <!-- right frame -->
                            <div class="art-right-frame">
                                <!-- filter -->
                                <div class="art-filter">
                                    <!-- filter link -->
                                    <a href="#" data-filter="*" class="art-link art-current">@lang('All Categories')</a>
                                    @foreach($projectCategories as $category)
                                        <a href="#" data-filter=".cate-{{$category->id}}"
                                           class="art-link">{{$category->title}}</a>
                                    @endforeach
                                </div>
                                <!-- filter end -->
                            </div>
                            <!-- right frame end -->
                        </div>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->

                    <div class="art-grid art-grid-3-col art-gallery">
                    @foreach($projects as $project)
                        <!-- grid item -->

                            <div class="art-grid-item cate-{{$project->projectMainCategory[0]->id}}">
                                <!-- grid item frame -->
                                <a data-fancybox="gallery"
                                   href="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}"
                                   class="art-a art-portfolio-item-frame art-horizontal">
                                    <!-- img -->
                                    <img src="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}"
                                         alt="item">
                                    <!-- zoom icon -->
                                    <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                </a>
                                <!-- grid item frame end -->
                                <!-- description -->
                                <div class="art-item-description">
                                    <!-- title -->
                                    <h5 class="mb-15">{{$project->title}}</h5>
                                    <div class="mb-15">{{$project->summary}}.
                                    </div>
                                    <!-- button -->
                                    <a href="#." class="art-link art-color-link art-w-chevron">@lang('Read more')</a>
                                </div>
                                <!-- description end -->
                            </div>
                            <!-- grid item end -->
                        @endforeach
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-6">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Education')</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                        <!-- timeline -->
                        <div class="art-timeline art-gallery" id="history">
                            @forelse($education as $item)
                                <div class="art-timeline-item">
                                    <div class="art-timeline-mark-light"></div>
                                    <div class="art-timeline-mark"></div>

                                    <div class="art-a art-timeline-content">
                                        <div class="art-card-header">
                                            <div class="art-left-side">
                                                <h5>{{$item->data_values->title}}</h5>
                                                {{--<div class="art-el-suptitle mb-15">Template author</div>--}}
                                            </div>
                                            <div class="art-right-side">
                                                <span class="art-date">{{$item->data_values->date}}</span>
                                            </div>
                                        </div>
                                        <p>{{$item->data_values->content}}</p>
                                        {{--<a data-fancybox="diplome"--}}
                                        {{--href="{{asset($activeTemplateTrue.'files/certificate.jpg')}}"--}}
                                        {{--class="art-link art-color-link art-w-chevron">Diplome</a>--}}
                                    </div>
                                </div>
                            @empty
                            @endforelse

                        </div>
                        <!-- timeline end -->
                    </div>
                    <div class="col-lg-6">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Work History')</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                        <!-- timeline -->
                        <div class="art-timeline">
                            @forelse($history as $item)
                                <div class="art-timeline-item">
                                    <div class="art-timeline-mark-light"></div>
                                    <div class="art-timeline-mark"></div>
                                    <div class="art-a art-timeline-content">
                                        <div class="art-card-header">
                                            <div class="art-left-side">
                                                <h5>{{$item->data_values->title}}</h5>
                                                {{--<div class="art-el-suptitle mb-15">Template author</div>--}}
                                            </div>
                                            <div class="art-right-side">
                                                <span class="art-date">{{$item->data_values->date}}</span>
                                            </div>
                                        </div>
                                        <p>{{$item->data_values->content}}</p>
                                        {{--<a data-fancybox="recommendation" href="#art-recomendation-popup-1"--}}
                                        {{--class="art-link art-color-link art-w-chevron">Recommendation</a>--}}
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <!-- timeline end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>{{ __(@$blog_content->data_values->heading) }}</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- slider container -->
                        <div class="swiper-container art-blog-slider" style="overflow: visible">
                            <!-- slider wrapper -->
                            <div class="swiper-wrapper">
                            @forelse($blog_elements as $item)
                                <!-- slide -->
                                    <div class="swiper-slide">
                                        <!-- blog post card -->
                                        <div class="art-a art-blog-card">
                                            <!-- post cover -->
                                            <a href="{{ route('blog.show',[$item->id,str_slug($item->data_values->title)]) }}" class="art-port-cover">
                                                <!-- img -->
                                                <img src="{{ getImage('assets/images/frontend/blog/thumb_' . @$item->data_values->image, '600x400') }}"
                                                     alt="blog post">
                                            </a>
                                            <!-- post cover end -->
                                            <!-- post description -->
                                            <div class="art-post-description">
                                                <!-- title -->
                                                <a href="{{ route('blog.show',[$item->id,str_slug($item->data_values->title)]) }}">
                                                    <h5 class="mb-15">{{ __(@$item->data_values->title) }}</h5>
                                                </a>
                                                <!-- text -->
                                                <div class="mb-15">{{ __(@$item->data_values->short_description) }}
                                                </div>
                                                <!-- link -->
                                                <a href="{{ route('blog.show',[$item->id,str_slug($item->data_values->title)]) }}" class="art-link art-color-link art-w-chevron">Read
                                                    more</a>
                                            </div>
                                            <!-- post description end -->
                                        </div>
                                        <!-- blog post card end -->
                                    </div>
                                    <!-- slide end -->
                                @empty
                                @endforelse
                            </div>
                            <!-- slider wrapper end -->
                        </div>
                        <!-- slider container end -->
                    </div>
                    <!-- col end -->
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- slider navigation -->
                        <div class="art-slider-navigation">
                            <!-- left side -->
                            <div class="art-sn-left">
                                <!-- slider pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- left side end -->
                            <!-- right side -->
                            <div class="art-sn-right">
                                <!-- slider navigation -->
                                <div class="art-slider-nav-frame">
                                    <!-- prev -->
                                    <div class="art-slider-nav art-blog-swiper-prev">
                                    @if(session()->get('lang') =='ar')
                                    <i class="fas fa-chevron-right"></i>
                                    @else
                                    <i class="fas fa-chevron-left"></i>
                                    @endif
                                            </div>
                                    <!-- next -->
                                    <div class="art-slider-nav art-blog-swiper-next">
                                    @if(session()->get('lang') =='ar')
                                    <i class="fas fa-chevron-left"></i>
                                    @else
                                    <i class="fas fa-chevron-right"></i> 
                                    @endif
                                    </div>
                                </div>
                                <!-- slider navigation -->
                            </div>
                            <!-- right side end -->
                        </div>
                        <!-- slider navigation end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->

            <!-- container -->
            <div class="container-fluid">
                <!-- row -->
                <div class="row p-30-0">
                    <!-- col -->
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Contact information')</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                    <!-- col -->
                    @for($i=0; $i<3 ; $i++)
                        <div class="col-lg-4">
                            <!-- contact card -->
                            <div class="art-a art-card">
                                <div class="art-table p-15-15">
                                    <ul>
                                        @foreach($contactinfo as $contactinf)
                                            @if($contactinf->data_values->group ==$i)
                                                <li>
                                                    <h6>{{$contactinf->data_values->title}}:</h6><span>{{$contactinf->data_values->content}}</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- contact card end -->
                        </div>
                        <!-- col end -->
                @endfor
                <!-- col -->
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                                <!-- title -->
                                <h4>@lang('Get in touch')</h4>
                            </div>
                            <!-- title frame end -->
                        </div>
                        <!-- section title end -->
                        <!-- contact form frame -->
                        <div class="art-a art-card" id="contactform">
                            <!-- contact form -->
                            <form id="form" class="art-contact-form" method="POST" action="{{route('contact.send')}}">
                                @csrf
                                <!-- form field -->
                                <div class="art-form-field">
                                    <!-- name input -->
                                    <input id="name" name="subject" class="art-input" type="text"
                                           placeholder="Name" required>
                                    <!-- label -->
                                    <label for="name"><i class="fas fa-user"></i></label>
                                </div>
                                <!-- form field end -->
                                <!-- form field -->
                                <div class="art-form-field">
                                    <!-- email input -->
                                    <input id="email" name="email" class="art-input" type="email"
                                           placeholder="Email" required>
                                    <!-- label -->
                                    <label for="email"><i class="fas fa-at"></i></label>
                                </div>
                                <!-- form field end -->
                                <!-- form field -->
                                <div class="art-form-field">
                                    <!-- message textarea -->
                                    <textarea id="message" name="message" class="art-input"
                                              placeholder="Message" required></textarea>
                                    <!-- label -->
                                    <label for="message"><i class="far fa-envelope"></i></label>
                                </div>
                                <!-- form field end -->
                                <!-- button -->
                                <div class="art-submit-frame">
                                    <button class="art-btn art-btn-md art-submit" type="submit"><span>@lang('Send message')</span>
                                    </button>
                                    <!-- success -->
                                    <div class="art-success">@lang('Success') <i class="fas fa-check"></i></div>
                                </div>
                            </form>
                            <!-- contact form end -->
                        </div>
                        <!-- contact form frame end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            {{--<!-- container -->--}}
            {{--<div class="container-fluid">--}}
                {{--<!-- row -->--}}
                {{--<div class="row">--}}
                    {{--<!-- col -->--}}
                    {{--<div class="col-6 col-lg-3">--}}
                        {{--<!-- brand -->--}}
                        {{--<img class="art-brand" src="{{asset($activeTemplateTrue.'img/brands/1.png')}}"--}}
                             {{--alt="brand">--}}
                    {{--</div>--}}
                    {{--<!-- col end -->--}}
                    {{--<!-- col -->--}}
                    {{--<div class="col-6 col-lg-3">--}}
                        {{--<!-- brand -->--}}
                        {{--<img class="art-brand" src="{{asset($activeTemplateTrue.'img/brands/2.png')}}"--}}
                             {{--alt="brand">--}}
                    {{--</div>--}}
                    {{--<!-- col end -->--}}

                    {{--<!-- col -->--}}
                    {{--<div class="col-6 col-lg-3">--}}
                        {{--<!-- brand -->--}}
                        {{--<img class="art-brand" src="{{asset($activeTemplateTrue.'img/brands/3.png')}}"--}}
                             {{--alt="brand">--}}
                    {{--</div>--}}
                    {{--<!-- col end -->--}}

                    {{--<!-- col -->--}}
                    {{--<div class="col-6 col-lg-3">--}}
                        {{--<!-- brand -->--}}
                        {{--<img class="art-brand" src="{{asset($activeTemplateTrue.'img/brands/1.png')}}"--}}
                             {{--alt="brand">--}}
                    {{--</div>--}}
                    {{--<!-- col end -->--}}
                {{--</div>--}}
                {{--<!-- row end -->--}}
            {{--</div>--}}
            {{--<!-- container end -->--}}
            <!-- container -->
            <div class="container-fluid">
                <!-- footer -->
                <footer>
                    <!-- copyright -->
                    <div>© 2022 Hammam Zarefa</div>
                    <!-- author ( Please! Do not delete it. You are awesome! :) -->
                    {{--<div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign"--}}
                                                   {{--target="_blank">Hammam Zarefa</a></div>--}}
                </footer>
                <!-- footer end -->
            </div>
            <!-- container end -->
        </div>
        <!-- scroll frame end -->
    </div>
    <!-- swup container end -->

</div>
<!-- content end -->
@endsection