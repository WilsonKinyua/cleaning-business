@extends('layouts.homepage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail-page.css')}}">
@endsection
@section('content')


<main>
    {{-- @if($company->logo)
    <a href="{{ $service->service_photo->getUrl() }}" target="_blank" style="display: inline-block">
        <img src="{{ $company->logo->getUrl('thumb') }}">
    </a>
@endif --}}
    <div class="hero_in detail_page background-image" data-background="url({{ $service->service_photo->getUrl() }})">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">

            <div class="container">
                <div class="main_info">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            {{-- <div class="head"><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div> --}}
                            <h1>{{ $service->service_name }}</h1>
                            {{ $service->company_name->name }}
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="buttons clearfix">
                                <span class="magnific-gallery">
                                    <a href="{{ $service->service_photo->getUrl() }}" target="_blank" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
                                    <a href="{{ $service->service_photo->getUrl() }}" title="Photo title" data-effect="mfp-zoom-in"></a>
                                    <a href="{{ $service->service_photo->getUrl() }}" title="Photo title" data-effect="mfp-zoom-in"></a>
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
                                    <p>{!! $service->description !!}</p>

                                    {{-- <h2>Services Offered</h2> --}}
                                    {{-- @foreach ($services as $item)
                                    <div class="menu_item">
                                        <em>Ksh {{ $item->service_price }} <br><a href="{{ route('service.get',$item->id )}}" style="color: white" class="btn_1">More</a></em>
                                        <h4>{{ $item->service_name }}</h4>
                                        <p>{!! Str::limit($item->description, 100) !!}</p>

                                    </div>
                                    @endforeach --}}

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
                           <label for="">Date</label>
                           <input type="hidden" name="service" value="{{ $service->service_name }}">
                           <input type="hidden" name="company" value="{{ $service->company_name->name }}">
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
