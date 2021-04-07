@extends('layouts.homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail-page.css')}}">
@endsection
@section('content')


<main>

    <div class="hero_in detail_page background-image" data-background="url(https://images.pexels.com/photos/4021256/pexels-photo-4021256.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">

            <div class="container">
                <div class="main_info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            {{-- <div class="head"><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div> --}}
                            <h1>Search Results</h1>
                           </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="buttons clearfix">
                                <span class="magnific-gallery">
                                    <a href="https://images.pexels.com/photos/4021256/pexels-photo-4021256.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" target="_blank" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
                                    <a href="https://images.pexels.com/photos/4021256/pexels-photo-4021256.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" title="Photo title" data-effect="mfp-zoom-in"></a>
                                    <a href="https://images.pexels.com/photos/4021256/pexels-photo-4021256.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" title="Photo title" data-effect="mfp-zoom-in"></a>
                                </span>
                                {{-- <a href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Wishlist</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /main_info -->
            </div>
        </div>
    </div>
    <!--/hero_in-->

    <div class="container margin_detail">
        <div class="row">
            <div class="col-lg-8">

                <div class="tabs_detail">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">Information</a>
                        </li>
                    </ul>

                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                        Search Results
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body info_content">


                                   @if (count($services) > 0)
                                        <!-- /pictures -->
                                        <h2>Services Offered</h2>
                                        @foreach ($services as $item)
                                        <div class="menu_item">
                                            <em>Ksh {{ $item->service_price }} <br><a href="{{ route('service.get',$item->id )}}" style="color: white" class="btn_1">More</a></em>
                                            <h4>{{ $item->service_name }}</h4>
                                            <p>{!! Str::limit($item->description, 100) !!}</p>

                                        </div>
                                        @endforeach
                                   @else
                                        <h1 style="color: red" class="text-center">No search results!!</h1>
                                   @endif

                                    <hr>

                                </div>
                            </div>
                        </div>
                        <!-- /tab -->


                    </div>
                    <!-- /tab-content -->
                </div>
                <!-- /tabs_detail -->
            </div>
            <!-- /col -->


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

</main>


@endsection

