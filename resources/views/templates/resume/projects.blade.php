@extends($activeTemplate.'layouts.frontend')
@section('content')
            <!-- content -->
            <div class="art-content">
                <!-- curtain -->
                <div class="art-curtain"></div>
                <!-- top background -->
                <div class="art-top-bg" style="background-image: url{{asset($activeTemplateTrue.'img/bg.jpg')}})">
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
                                    <!-- filter -->
                                    <div class="art-filter mb-30">
                                        <!-- filter link -->
                                        <a href="#" data-filter="*" class="art-link art-current">All Categories</a>
                                        <!-- filter link -->
                                        @foreach($projectCategories as $category)
                                        <a href="#" data-filter=".cate-{{$category->id}}" class="art-link">{{$category->title}}</a>
                                        @endforeach
                                    </div>
                                    <!-- filter end -->
                                </div>
                                <!-- col end -->
                                <div class="art-grid art-grid-2-col art-gallery">
                                @forelse($projects as $project)
                                    <!-- grid item -->
                                    <div class="art-grid-item cate-{{$project->projectMainCategory[0]->id}}">
                                        <!-- grid item frame -->
                                        <a data-fancybox="gallery" href="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}" class="art-a art-portfolio-item-frame art-horizontal">
                                            <!-- img -->
                                            <img src="{{ getImage('assets/images/project/' . @$project->images[0]->filename) }}" alt="item">
                                            <!-- zoom icon -->
                                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                        </a>
                                        <!-- grid item frame end -->
                                        <!-- description -->
                                        <div class="art-item-description">
                                            <!-- title -->
                                            <h5 class="mb-15">{{$project->title}}</h5>
                                            <div class="mb-15">{{$project->summary}}</div>
                                            <!-- button -->
                                            <a href="{{route('project.show',$project->id)}}" class="art-link art-color-link art-w-chevron">@lang('Read more')</a>
                                        </div>
                                        <!-- description end -->
                                    </div>
                                    <!-- grid item end -->
                                @empty
                                @endforelse
                                </div>
                            </div>
                            <!-- ow end -->
                        </div>
                        <!-- container end -->
                    </div>
                </div>
            </div>
@endsection