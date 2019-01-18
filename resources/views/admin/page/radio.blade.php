
@extends('frontend.trangchu')
@section('content')
<div id="page-wrapper">
    <div class="inner-content">
        <div class="music-browse">
            <!--albums-->
            <!-- pop-up-box --> 
            <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all">
            <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
            <div class="browse">
                <div class="tittle-head two">
                    <h3 class="tittle">New Song <span class="new">New</span></h3>
                    <a href="{{ route('radio')}} ">
                        <h4 class="tittle third">See all</h4>
                    </a>
                    <div class="clearfix"> </div>
                </div>
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Telugu</a></li>
                        <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hindi</a></li>
                        <li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">English <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">Melody</a></li>
                                <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">Classic</a></li>
                            </ul>
                        </li>
                        <li role="presentation"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tamil</a></li>
                        <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Malayalam</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="browse-inner">
                                <!-- /agileits -->
                                @foreach($songs as $song)
                                <div class="col-md-3 artist-grid">
                                    <a  href="{{ route('single', '$song->id')}} "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXxm_ZtTJUPebXYHoQzkKfwvL9hr52gv5St5B8_QLGQsOG-RWXYZg" title="allbum-name"></a>
                                    <a href="{{ route('single', '$song->id')}} "></a>
                                    <a class="art" href="{{ route('single', '$song->id')}} "> {{$song->name}} </a>
                                </div>
                                @endforeach
                                
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        
                        
                        </div>
                    </div>
                </div>
                <!-- /agileinfo -->
            </div>
            <!--//End-albums-->
            <!--//discover-view-->
            <div class="albums fourth">
                <div class="tittle-head two">
                    <h3 class="tittle">Albums <span class="new">View</span></h3>
                    <a href="browse.html">
                        <h4 class="tittle third">See all</h4>
                    </a>
                    <div class="clearfix"> </div>
                </div>
                @foreach($albums as $album)
                <div class="col-md-3 artist-grid">
                    <a href="{{route('single', '$album->id')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXxm_ZtTJUPebXYHoQzkKfwvL9hr52gv5St5B8_QLGQsOG-RWXYZg" title="allbum-name"></a>
                    <div class="inner-info">
                        <h5>{{$album->album_name}}</h5>
                    </div>
                </div>
                @endforeach
                
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--//discover-view-->
        <!--//music-left-->
    </div>
    <!--body wrapper start-->
    
</div>
<div class="clearfix"></div>
<!--body wrapper end-->
<!-- /w3layouts-agile -->
</div>
</div>
@endsection
