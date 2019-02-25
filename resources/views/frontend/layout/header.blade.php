<div class="profile_details">
    <div class="col-md-4 serch-part">
        <div id="sb-search" class="sb-search">
            <form action="#" method="post">
                <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search"> <img src="source/image/search.png" /></span>
            </form>
        </div>
    </div>
    <!-- search-scripts -->
    <script src="source/js/classie.js"></script>
    <script src="source/js/uisearch.js"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
    <!-- //search-scripts -->
    <!---->
    <div class="col-md-4 player">
        <div class="audio-player">
            <audio id="audio-player"  controls="controls">
                <source src="media/Blue Browne.ogg" type="audio/ogg"></source>
                <source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
                <source src="media/Georgia.ogg" type="audio/ogg"></source>
                <source src="media/Georgia.mp3" type="audio/mpeg"></source>
            </audio>
        </div>
        <!---->
        <script type="text/javascript">
            $(function(){
                $('#audio-player').mediaelementplayer({
                alwaysShowControls: true,
                features: ['playpause','progress','volume'],
                audioVolume: 'horizontal',
                iPadUseNativeControls: true,
                iPhoneUseNativeControls: true,
                AndroidUseNativeControls: true
            });
            });
        </script>
        <!--audio-->
        <link rel="stylesheet" type="text/  " media="all" href="source/css/audio.css">
        <script type="text/javascript" src="source/js/mediaelement-and-player.min.js"></script>
        <!---->
        <!--//-->
        <ul class="next-top">
            <li><a class="ar" href="#"> <img src="source/image/arrow.png" alt=""/></a></li>
            <li><a class="ar2" href="#"><img src="source/image/arrow2.png" alt=""/></i></a></li>
        </ul>
    </div>
    <div class="col-md-4 login-pop">
        <div id="loginpop">
            <a href="#" id="loginButton"><span>Login <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"><img src="source/image/user.png" /></a>
            <div id="loginBox">
                <form action="#" method="post" id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-------->
</div>
<div class="clearfix"></div>
