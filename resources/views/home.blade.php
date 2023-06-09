@extends('layouts.app')

@section('content')
<div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->

    <ol class="carousel-indicators">
        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel1" data-slide-to="1"></li>
        <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active"> <img src="images/banner.png" style="width:100%; height: 500px" alt="First slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>
        <div class="item"> <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>
        <div class="item"> <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
            <div class="carousel-caption">
                <h1>vacayhome<br> spa & Resort</h1>
            </div>
        </div>

    </div>
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

</div>
<div class="clearfix"></div>

<!--service block--->
<section class="service-block">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="images/icons/wifi.png">
                    </div>
                    <h4><a>free wifi</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 width-50">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="images/icons/key.png">
                    </div>
                    <h4><a>room service</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="images/icons/car.png">
                    </div>
                    <h4><a>free parking</a></h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 mt-25">
                <div class="service-details text-center">
                    <div class="service-image">
                        <img alt="image" class="img-responsive" src="images/icons/user.png">
                    </div>
                    <h4><a>customer support</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!--gallery block--->
<section class="gallery-block gallery-front">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="images/room1.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="images/room1.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>delux room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="images/room2.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="images/room2.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>super room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="images/room3.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="images/room3.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>single room</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="gallery-image">
                    <img class="img-responsive" src="images/room4.png">
                    <div class="overlay">
                        <a class="info pop example-image-link img-responsive" href="images/room4.png" data-lightbox="example-1"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <p><a>double room</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--offer block-->
<section class="vacation-offer-block">
    <div class="vacation-offer-bgbanner">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="vacation-offer-details">
                        <h1>Your vacation Awaits</h1>
                        <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4>
                        <button type="button" class="btn btn-default">Choose a package</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End-->

<!----resort-overview--->
<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            @foreach($resorts as $resort)
            @if( $resort->id <= 2 )
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a><img src= "{{ $resort->image }}" class="img-responsive" alt="image"></a>
                        </div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a>{{ $resort->title }}</a></h3>
                        <p>{{ $resort->content }}</p>
                        <div class="links"><a href="single-blog.html">Read more</a></div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-desc-side">
                        <h3><a>{{ $resort->title }}</a></h3>
                        <p>{{ $resort->content }}</p>
                        <div class="links"><a href="single-blog.html">Read more</a></div>
                    </div>
                </div>
                <div class="side-B">
                    <div class="product-thumb txt-rgt">
                        <div class="image">
                            <a class="arrow-left"><img src="{{ $resort->image }}" class="img-responsive" alt="imaga"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if ( $count == $resort->id )
            <div class="clearfix"></div>
            @else 
            <div class="clear"></div>
            @endif
            @endforeach

        </div>
    </div>
</section>

<!-----blog slider----->
<!--blog trainer block-->
<section class="blog-block-slider">
    <div class="blog-block-slider-fix-image">
        <div id="myCarousel2" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Wrapper for slides -->
                <ol class="carousel-indicators">
                    @for($i = 0; $i < $countclient; $i++)
                    @if($i == 0)
                    <li data-target="#myCarousel2" data-slide-to="{{ $i }}" class="active"></li>
                    @else
                    <li data-target="#myCarousel2" data-slide-to="{{ $i }}"></li>
                    @endif
                    @endfor
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach($clients as $client)
                    @if($client->id == 1)
                    <div class="item active">
                        <div class="blog-box">
                            <p>{{ $client->statement }}</p>
                        </div>
                        <div class="blog-view-box">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $client->image }}" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading blog-title">{{ $client->name }}</h3>
                                    <h5 class="blog-rev">{{ $client->rev }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="item">
                        <div class="blog-box">
                            <p>{{ $client->statement }}</p>
                        </div>
                        <div class="blog-view-box">
                            <div class="media">
                                <div class="media-left">
                                    <img src="{{ $client->image }}" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading blog-title">{{ $client->name }}</h3>
                                    <h5 class="blog-rev">{{ $client->rev }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>

<!---blog block--->
<section class="blog-block">
    <div class="container">
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="images/blog1.png">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                        <a class="btn btn-default" href="single-blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row offspace-45">
            <div class="view-set-block">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="event-blog-image">
                        <img alt="image" class="img-responsive" src="images/blog2.png">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                    <div class="event-blog-details">
                        <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                        <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                        <a class="btn btn-default" href="single-blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection