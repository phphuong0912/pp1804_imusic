
@extends('frontend.trangchu')
@section('content')
<!-- //header-ends -->
<div id="page-wrapper">
    <div class="inner-content">
        <div class="music-left">
            <!--banner-section-->
            <div class="banner-section">
                <div class="banner">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="banner-img">
                                    <a href="{{ route('radio')}} "><img src="source/image/126.jpg" class="img-responsive" alt=""></a>
                                </div>
                                <div class="banner-info">
                                    <p><span>Nhac Hot</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-img">
                                    <img src="source/image/125.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="banner-info">
                                    <a class="trend" href="{{ route('radio')}} ">TRENDING</a>
                                    <h3>Relaxing</h3>
                                    <p>Album by <span>Relax</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-img">
                                    <img src="source/image/127.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="banner-info">
                                    <a class="trend" href="{{ route('radio')}} ">TRENDING</a>
                                    <h3>VPOP</h3>
                                    <p>Album by <span>Pop star</span></p>
                                </div>
                                <!-- /w3layouts-agileits -->
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    <script src="source/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                            });
                        
                        });
                    </script>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--//End-banner-->
            <!--albums-->
            <!-- pop-up-box --> 
            <link href="source/css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
            <script src="source/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
                });
            </script>		
            <!--//pop-up-box -->
            <div class="albums">
                <div class="tittle-head">
                    <h3 class="title">New Song <span class="new">New</span></h3>
                    <a href="{{ route('radio')}} ">
                        <h4 class="tittle">See all</h4>
                    </a>
                    <div class="clearfix"> </div>
                </div>
                @foreach($songs as $song)
                <div class="col-md-3 content-grid">

                    <a class="button play-icon popup-with-zoom-anim" href="{{ route('trang-chu', '$song->id')}} ">{{ $song->name }}</a>
                </div>
                @endforeach
                <div class="clearfix"> </div>
                {{ $songs->links() }}
            </div>
        </div>
        <!--//music-left-->
        <!--/music-right-->
        <div class="music-right">
            <!--/video-main-->
            <div class="video-main">
                <div class="video-record-list">
                    <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                            <div class="jp-playlist">
                                <ul style="display: block;">
                                @foreach($charts as $chart)
                                    <li class="jp-playlist-current">
                                        <div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a>
                                        <a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">{{ $serial = $serial + 1 }}.{{ $chart->name }} 
                                            @foreach($chart->artists as $artist)
                                            <span class="jp-artist">{{ $artist->artist_name }}</span></a>
                                        </div>
                                            @endforeach
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="jp-no-solution" style="display: none;">
                            
                                <span>Update Required</span>
                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- script for play-list -->
            <link href="source/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css">
        </div>
        <!--//music-right-->
        <div class="clearfix"></div>
        <!-- /w3l-agile-its -->
    </div>
    <!--body wrapper start-->
</div>
    <div class="albums">
        <div class="tittle-head">
            <h3 class="tittle">Artists <span class="new">New</span></h3>
            <a href="{{ route('radio')}} ">
                <h4 class="tittle">See all</h4>
            </a>
            <div class="clearfix"> </div>
        </div>
        @foreach($artists as $artist)
        <div class="col-md-3 content-grid">
            <a class="image-artists" href="{{ route('single', '$song->id')}} ">
                <img src="{{ $artist->image }}" title="allbum-name">
            </a>
            <a class="button play-icon popup-with-zoom-anim" href="{{ route('trang-chu', '$song->id')}} ">{{ $artist->artist_name }}</a>
        </div>
        @endforeach
        <div class="clearfix"> </div>
        
    </div>
<div class="clearfix"></div>
@endsection
