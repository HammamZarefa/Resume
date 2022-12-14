@extends($activeTemplate.'layouts.frontend')
@section('content')

    <!-- content -->
    <div class="art-content">
        <!-- curtain -->
        <div class="art-curtain"></div>
        <!-- top background -->
        <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
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
                    <div class="row p-30-0">
                        <!-- col -->
                        <div class="col-lg-12">
                            <!-- section title -->
                            <div class="art-section-title">
                                <!-- title frame -->
                                <div class="art-title-frame">
                                    <!-- title -->
                                    <h4>{{$project->title}}</h4>
                                </div>
                                <!-- title frame end -->
                                <!-- right frame -->
                                <div class="art-right-frame">
                                    <div class="art-project-category">{{$project->projectCategories->pluck('title')}}</div>
                                </div>
                                <!-- right frame end -->
                            </div>
                            <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-12">
                            <!-- slider container -->
                            <div class="swiper-container art-works-slider" style="overflow: visible">
                                <!-- slider wrapper -->
                                <div class="swiper-wrapper">
                                    @foreach($project->images as $image)
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <!-- item frame -->
                                        <a data-fancybox="gallery" href="{{ getImage('assets/images/project/' . $image->filename) }}" class="art-a art-portfolio-item-frame art-horizontal">
                                            <!-- img -->
                                            <img src="{{ getImage('assets/images/project/' . $image->filename) }}" alt="item">
                                            <!-- zoom icon -->
                                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                        </a>
                                        <!-- item end -->
                                    </div>
                                    <!-- slide end -->
                                    @endforeach
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
                                        <div class="art-slider-nav art-works-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                                        <!-- next -->
                                        <div class="art-slider-nav art-works-swiper-next"><i class="fas fa-chevron-right"></i></div>
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
                                    <h4>@lang('Project details')</h4>
                                </div>
                                <!-- title frame end -->
                            </div>
                            <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="art-a art-card art-fluid-card">
                                <h5 class="mb-15">@lang('Description')</h5>
                                <div class="mb-15">{{$project->desc}}</div>
                                <!-- button -->
                                <div class="art-buttons-frame"><a href="{{$project->link}}" class="art-link art-color-link art-w-chevron" target="_blank">@lang('Visit')</a></div>
                            </div>
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="art-a art-card">
                                <!-- table -->
                                <div class="art-table p-15-15">
                                    <ul>
                                        <li>
                                            <h6>@lang('Order Date'):</h6><span>{{$project->order_date}}</span>
                                        </li>
                                        <li>
                                            <h6>@lang('Final Date'):</h6><span>{{$project->released_date}}</span>
                                        </li>
                                        <li>
                                            <h6>@lang('Status'):</h6><span>{{$project->released}}</span>
                                        </li>
                                        <li>
                                            <h6>@lang('Client'):</h6><span>{{$project->client}}</span>
                                        </li>
                                        <li>
                                            <h6>@lang('Location'):</h6><span>{{$project->location}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- table end -->
                            </div>
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
                            <!-- call to action -->
                            <div class="art-a art-banner" style="background-image: url({{asset($activeTemplateTrue.'img/bg.jpg')}})">
                                <!-- overlay -->
                                <div class="art-banner-overlay">
                                    <!-- main title -->
                                    <div class="art-banner-title text-center">
                                        <!-- title -->
                                        <h1 class="mb-15">Ready to order your project?</h1>
                                        <!-- suptitle -->
                                        <div class="art-lg-text art-code mb-25">Let's work together!</div>
                                        <!-- button -->
                                        <a href="/contact.html" class="art-btn art-btn-md"><span>Contact me</span></a>
                                    </div>
                                    <!-- main title end -->
                                </div>
                                <!-- overlay end -->
                            </div>
                            <!-- call to action end  -->

                            <!-- projects navigation -->
                            <div class="art-a art-pagination">
                                <!-- button -->
                                <a href="/portfolio-single-2.html" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous project</span></a>
                                <div class="art-pagination-center art-m-hidden">
                                    <a class="art-link" href="{{route('project.list')}}">All projects</a>
                                </div>
                                <!-- button -->
                                <a href="/portfolio-single-2.html" class="art-link art-color-link art-w-chevron"><span>Next project</span></a>
                            </div>
                            <!-- projects navigation end -->
                        </div>
                        <!-- col end -->
                    </div><!-- row end -->
                </div>
                <!-- container end -->
            </div>
@endsection