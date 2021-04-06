@extends('layouts.homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail-page.css')}}">
@endsection
@section('content')


<main>
    {{-- @if($company->logo)
    <a href="{{ $company->logo->getUrl() }}" target="_blank" style="display: inline-block">
        <img src="{{ $company->logo->getUrl('thumb') }}">
    </a>
@endif --}}
    <div class="hero_in detail_page background-image" data-background="url({{ $company->logo->getUrl() }})">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">

            <div class="container">
                <div class="main_info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            {{-- <div class="head"><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div> --}}
                            <h1>{{ $company->name }}</h1>
                            {{ $company->address_line }}
                            <a href="https://www.google.com/maps/place/{{ $company->city->city }}/@-1.303208,36.7771852,12z/data=!3m1!4b1!4m5!3m4!1s0x182f1172d84d49a7:0xf7cf0254b297924c!8m2!3d-1.2920659!4d36.8219462" target="blank">Get directions</a>
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="buttons clearfix">
                                <span class="magnific-gallery">
                                    <a href="{{ $company->logo->getUrl() }}" target="_blank" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
                                    <a href="{{ $company->logo->getUrl() }}" title="Photo title" data-effect="mfp-zoom-in"></a>
                                    <a href="{{ $company->logo->getUrl() }}" title="Photo title" data-effect="mfp-zoom-in"></a>
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
                        {{-- <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">Reviews</a>
                        </li> --}}
                    </ul>

                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                        Information
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body info_content">
                                    <p>{!! $company->description !!}</p>

                                    {{-- <div class="add_bottom_25"></div>
                                    <h2>Pictures from our users</h2>
                                    <div class="pictures magnific-gallery clearfix">
                                        <figure><a href="img/detail_gallery/detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_1.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_2.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_3.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_4.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_5.jpg" class="lazy" alt=""></a></figure>
                                    </div> --}}
                                    <!-- /pictures -->
                                    <h2>Services Offered</h2>
                                    @foreach ($services as $item)
                                    <div class="menu_item">
                                        <em>Ksh {{ $item->service_price }} <br><a href="{{ route('service.get',$item->id )}}" style="color: white" class="btn_1">More</a></em>
                                        <h4>{{ $item->service_name }}</h4>
                                        <p>{!! Str::limit($item->description, 100) !!}</p>

                                    </div>
                                    @endforeach

                                    <hr>

                                </div>
                            </div>
                        </div>
                        <!-- /tab -->

                        {{-- <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                        Reviews
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body reviews">
                                    <div class="row add_bottom_45 d-flex align-items-center">
                                        <div class="col-md-3">
                                            <div id="review_summary">
                                                <strong>8.5</strong>
                                                <em>Superb</em>
                                                <small>Based on 4 reviews</small>
                                            </div>
                                        </div>
                                        <div class="col-md-9 reviews_sum_details">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6>Food Quality</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                    <h6>Service</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Location</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                    <h6>Price</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>

                                    <div id="reviews">
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar4.jpg" alt=""></figure>
                                                    <h5>Lukas</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 54 minutes ago</em>
                                                    </div>
                                                    <h4>"Great Location!!"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /review_card -->
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar6.jpg" alt=""></figure>
                                                    <h5>Lukas</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 10 Oct. 2019</em>
                                                    </div>
                                                    <h4>"Awesome Experience"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /review_card -->
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar1.jpg" alt=""></figure>
                                                    <h5>Marika</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 11 Oct. 2019</em>
                                                    </div>
                                                    <h4>"Really great dinner!!"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row reply">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar.jpg" alt=""></figure>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="review_content">
                                                        <strong>Reply from Foogra</strong>
                                                        <em>Published 3 minutes ago</em>
                                                        <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /reply -->
                                        </div>
                                        <!-- /review_card -->
                                    </div>
                                    <!-- /reviews -->
                                    <div class="text-right"><a href="leave-review.html" class="btn_1">Leave a review</a></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /tab-content -->
                </div>
                <!-- /tabs_detail -->
            </div>
            <!-- /col -->

            <div class="col-lg-4" id="sidebar_fixed">
                <div class="box_booking">
                    <div class="head">
                        <h3>Book Service</h3>
                        {{-- <div class="offer">Up to -40% off</div> --}}
                    </div>
                    <!-- /head -->
                    <form action="{{ route('quote.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="main">
                        <input type="text" id="datepicker_field">
                        <div id="DatePicker"></div>
                        <div class="form-group">
                            <select name="service" id="" class="form-control" required>
                                <option value="">Select Service</option>
                                @foreach ($services as $item)
                                    <option value="{{ $item->service_name }}">{{ $item->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                           <label for="">Date</label>
                           <input type="hidden" name="company" value="{{ $company->name }}">
                           <input type="date"  id="" class="form-control" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"  id="" class="form-control" name="customer" required>
                         </div>
                         <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text"  id="" class="form-control" name="customer_phone" required>
                         </div>
                         <div class="form-group">
                            <label for="">Email</label>
                            <input type="text"  id="" class="form-control" name="customer_email">
                         </div>
                         <div class="form-group">
                            <label for="">Location</label>
                            <input type="text"  id="" class="form-control" name="customer_location" required>
                         </div>
                         <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" id="" class="form-control" name="customer_address">
                         </div>
                         <div class="form-group">
                            <label for="">Additional Information</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                         </div>
                        <!-- /dropdown -->
                        <button type="submit" class="btn_1 full-width mb_5">Send Quote</button>
                       <div class="text-center"><small>No money charged on this steps</small></div>
                    </div>
                    </form>
                </div>
                <!-- /box_booking -->
                {{-- <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul> --}}
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

</main>


@endsection
@section('js')
<script>
    @if (session()->has('success'))
        toastr.success("{{session()->get('success')}}");
    @endif

    @if (session()->has('danger'))
        toastr.warning("{{session()->get('danger')}}");
    @endif

    @if (session()->has('error'))
        toastr.error("{{session()->get('error')}}");
    @endif
</script>
@endsection
