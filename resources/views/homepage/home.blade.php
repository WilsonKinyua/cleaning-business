@extends('layouts.homepage')
@section('content')

<main>

    <div class="header-video">
        <div id="hero_video">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-8 col-lg-10 col-md-8">
                            <h1>Discover &amp; Book</h1>
                            <p>The best cleaning companies at the best price</p>
                            <form method="post" action="grid-listings-filterscol.html">
                                <div class="row no-gutters custom-search-input">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text"
                                                placeholder="What are you looking for...">
                                            <i class="icon_search"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text"
                                                placeholder="Address, neighborhood...">
                                            <i class="icon_pin_alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                                <!-- /row -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('img/video_fix.png')}}" alt="" class="header-video--media" data-video-src="{{ asset('video/cleaning')}}"
            data-teaser-source="{{ asset('video/cleaning')}}" data-provider="" data-video-width="1920" data-video-height="960">
    </div>
    <!-- /header-video -->

    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>Popular Categories</h2>
                <p>Top categories of services we offer</p>
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">

                @foreach ($categories as $item)
                    <div class="item_version_2">
                        <a href="#.">
                            <figure>
                                <span>{{ $item->id }}</span>
                                @if($item->photo)
                                    {{-- <img src="{{ $category->photo->getUrl('thumb') }}"> --}}
                                    <img id="catimage" src="{{ $item->photo->getUrl() }}" data-src="{{ $item->photo->getUrl() }}" alt=""
                                    class="owl-lazy">
                                @endif
                                {{-- <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_pizza.jpg" alt=""
                                    class="owl-lazy"> --}}

                                <div class="info">
                                    <h3>{{ $item->title }}</h3>
                                    {{-- <small>Avg price $40</small> --}}
                                </div>
                            </figure>
                        </a>
                    </div>
                @endforeach

                {{-- <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>87</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_sushi.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Japanese</h3>
                                <small>Avg price $50</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_hamburgher.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Burghers</h3>
                                <small>Avg price $55</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_vegetarian.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Vegetarian</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>65</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_bakery.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Bakery</h3>
                                <small>Avg price $60</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>25</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_chinesse.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Chinese</h3>
                                <small>Avg price $40</small>
                            </div>
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>35</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_mexican.jpg" alt=""
                                class="owl-lazy">
                            <div class="info">
                                <h3>Mexican</h3>
                                <small>Avg price $35</small>
                            </div>
                        </figure>
                    </a>
                </div> --}}
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->

    <div class="container margin_60_40">
        <div class="main_title">
            <span><em></em></span>
            <h2>Popular Cleaning Companies</h2>
            <p>Here are the top companies offering cleaning services</p>
            <a href="#0">View All</a>
        </div>
        <!-- /main_title -->
        <div class="owl-carousel owl-theme carousel_4">
            @foreach ($companies as $item)
            <div class="item">
                <div class="strip">
                    <figure>
                        {{-- <span class="ribbon off">-30%</span> --}}
                        @if($item->logo)
                                <img src="{{ $item->logo->getUrl() }}" data-src="{{ $item->logo->getUrl() }}" class="owl-lazy" alt="">
                        @endif
                        <a href="#." class="strip_info">
                            <small>{{ $item->name }}</small>
                            <div class="item_title">
                                <h3>{{ $item->city->city }}</h3>
                                <small>{{ $item->country->country }}</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">{{ $item->open_hours }}</span></li>
                        <li>
                            <div class="score">
                                {{-- <span>Superb<em>350 Reviews</em></span><strong>8.9</strong> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach

            {{-- <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-40%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_2.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Burghers</small>
                            <div class="item_title">
                                <h3>Best Burghers</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_3.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Vegetarian</small>
                            <div class="item_title">
                                <h3>Vego Life</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-25%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_4.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Japanese</small>
                            <div class="item_title">
                                <h3>Sushi Temple</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_5.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Pizza</small>
                            <div class="item_title">
                                <h3>Auto Pizza</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>7.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-15%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_6.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Burghers</small>
                            <div class="item_title">
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Now Open</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="img/lazy-placeholder.png" data-src="img/location_7.jpg" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Chinese</small>
                            <div class="item_title">
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_closed">Now Closed</span></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
        <!-- /carousel -->

        <div class="banner lazy" data-bg="url(https://www.insureon.com/-/media/blog/posts/2020/photo_house-cleaners-with-client.jpg?h=370&iar=0&w=750&rev=b96c5d768ee24313ba9e7533be7cd5d6)">
            <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
                <div>
                    <small>{{ trans('panel.site_title') }}</small>
                    <h3>More than 3000 Companies work with us</h3>
                    <p>Book a slot easly at the best price. Learn more about us</p>
                    <a href="" class="btn_1">View About us</a>
                </div>
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /banner -->

        <div class="row">
            <div class="col-12">
                <div class="main_title version_2">
                    <span><em></em></span>
                    <h2>Our Very Best Services</h2>
                    <p>Get to experience top services from different companies</p>
                    <a href="#0">View All</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_1.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Italian</em>
                                <h3>La Monnalisa</h3>
                                <small>8 Patriot Square E2 9NF</small>
                                <ul>
                                    <li><span class="ribbon off">-30%</span></li>
                                    <li>Average price $35</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_2.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Mexican</em>
                                <h3>Alliance</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li><span class="ribbon off">-40%</span></li>
                                    <li>Average price $30</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_3.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.0</strong></div>
                                <em>Sushi - Japanese</em>
                                <h3>Sushi Gold</h3>
                                <small>Old Shire Ln EN9 3RX</small>
                                <ul>
                                    <li><span class="ribbon off">-25%</span></li>
                                    <li>Average price $20</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list_home">
                    <ul>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_4.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>9.5</strong></div>
                                <em>Vegetarian</em>
                                <h3>Mr. Pepper</h3>
                                <small>27 Old Gloucester St, 4563</small>
                                <ul>
                                    <li><span class="ribbon off">-30%</span></li>
                                    <li>Average price $20</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_5.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.0</strong></div>
                                <em>Chinese</em>
                                <h3>Dragon Tower</h3>
                                <small>22 Hertsmere Rd E14 4ED</small>
                                <ul>
                                    <li><span class="ribbon off">-50%</span></li>
                                    <li>Average price $35</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="detail-restaurant.html">
                                <figure>
                                    <img src="img/location_list_placeholder.png" data-src="img/location_list_6.jpg"
                                        alt="" class="lazy">
                                </figure>
                                <div class="score"><strong>8.5</strong></div>
                                <em>Pizza - Italian</em>
                                <h3>Bella Napoli</h3>
                                <small>135 Newtownards Road BT4</small>
                                <ul>
                                    <li><span class="ribbon off">-45%</span></li>
                                    <li>Average price $25</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
        <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html"
                class="btn_1">View All</a></p>
        <!-- /button visibile on tablet/mobile only -->
    </div>
    <!-- /container -->

    <div class="call_section lazy" data-bg="url(https://images.pexels.com/photos/572056/pexels-photo-572056.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow">
                <div class="box_1">
                    <h3>Are you a Cleaning Company Owner?</h3>
                    <p>Join Us to increase your online visibility. You'll have access to even more customers who are
                        looking to enjoy your services at home.</p>
                    <a href="submit-restaurant.html" class="btn_1">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->

</main>
<!-- /main -->


@endsection
