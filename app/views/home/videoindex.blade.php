@include('layout.header')
@yield('content')

    <body data-spy="scroll" data-target=".navbar" data-offset="75">

        {{-- Intro loader --}}
        <div class="mask">
            <div id="intro-loader">
                <div class="container">
                    <div class="box">
                        <div class="clock"></div>
                            <p>时光碎片</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Intro loader --}}
        @if(Agent::isMobile() || Agent::isTablet())
        {{-- Home Section --}}
        <section id="home">

            <a id="slider_left" class="fullscreen-slider-arrow">
                {{HTML::image('assets/img/arrow_left.png')}}
            </a>
            <a id="slider_right" class="fullscreen-slider-arrow">
                {{HTML::image('assets/img/arrow_right.png')}}
            </a>

            <div id="fullscreen-slider">
                {{-- Slider item --}}
                <div class="slider-item">
                    {{HTML::image('images/slide1.jpg')}}
                    <div class="pattern">
                        <div class="slide-content">

                            {{-- Section title --}}
                            <div class="section-title text-center">
                                <div>
                                    <span class="line big"></span>
                                    <span>欢迎来到</span>
                                    <span class="line big"></span>
                                </div>
                                <h1>时光碎片<i>时光不老，我们不散</i></h1>
                                <div class="hidden-xs">
                                  <span class="line"></span>
                                  <span>有关琐碎时间的高效利用</span>
                                  <span class="line"></span>
                                </div>
                                <p class="lead">
                                    一场关于新奇与创意的探险
                                </p>
                                <div class="mybutton ultra">
                                    <a class="start-button" href="#about"> <span data-hover="从这里开始!">你，准备好了吗?</span> </a>
                                </div>
                            </div>
                            {{-- Section title --}}

                        </div>
                    </div>
                </div>
                {{-- Slider item --}}

                {{-- Slider item --}}
                <div class="slider-item">
                    {{HTML::image('images/slide2.jpg')}}
                    <div class="pattern">
                        <div class="slide-content">

                            {{-- Section title --}}
                            <div class="section-title text-center">
                                <div>
                                    <span class="line big"></span>
                                    <span>小智慧·大人生</span>
                                    <span class="line big"></span>
                                </div>
                                <h1>时光碎片<i>岁月静好，年华无伤</i></h1>
                                <div class="hidden-xs">
                                  <span class="line"></span>
                                  <span>有关琐碎时间的高效利用</span>
                                  <span class="line"></span>
                                </div>
                                <p class="lead">
                                    时尚生活与创意设计的探索者
                                </p>
                                <div class="mybutton ultra">
                                    <a class="start-button" href="#about"> <span data-hover="关于我们">从这里开始</span> </a>
                                </div>
                            </div>
                            {{-- Section title --}}

                        </div>
                    </div>
                </div>
                {{-- Slider item --}}

            </div>
        </section>
        {{-- Home Section --}}
        @else
        {{-- Home Section --}}
        <section id="home">
            <div>
                <a id="video-volume" onclick="jQuery('#bgndVideo').toggleVolume()">
                    <i class="fa fa-volume-down"></i>
                </a>

                <div id="div" style="width:100%; height:100%; position:absolute; overflow:hidden;">
                    <video id="video" style="position:absolute; width:100%;">
                        <source src="{{ route('home') }}/uploads/video/media.webm" />
                        <source src="{{ route('home') }}/uploads/video/media.mp4" />
                        <source src="{{ route('home') }}/uploads/video/media.ogg" />
                        <source src="{{ route('home') }}/uploads/video/media.mpeg4" />
                        {{-- IE Support--}}
                    </video>
                </div>

                <div style="width:100%; height:100%; position:absolute; top:0px; background:rgba(0,0,0,0)" id="fullscreen-slider">

                    {{-- Slider item --}}
                    <div class="slider-item">
                        {{HTML::image('images/header_bg3.png')}}
                        <div class="pattern">
                            <div class="slide-content">

                                {{-- Section title --}}
                                <div class="section-title text-center">
                                    <div>
                                        <span class="line big"></span>
                                        <span>欢迎来到</span>
                                        <span class="line big"></span>
                                    </div>
                                    <h1>时光碎片<i>时光不老，我们不散</i></h1>
                                    <div class="hidden-xs">
                                      <span class="line"></span>
                                      <span>有关琐碎时间的高效利用</span>
                                      <span class="line"></span>
                                    </div>
                                    <p class="lead">
                                        一场关于新奇与创意的探险
                                    </p>
                                    <div class="mybutton ultra">
                                        <a class="start-button" href="#about"> <span data-hover="从这里开始!">你，准备好了吗?</span> </a>
                                    </div>
                                </div>
                                {{-- Section title --}}

                            </div>
                        </div>
                    </div>
                    {{-- Slider item --}}

                    {{-- Slider item --}}
                    <div class="slider-item">
                        {{HTML::image('images/header_bg3.png')}}
                        <div class="pattern">
                            <div class="slide-content">

                                {{-- Section title --}}
                                <div class="section-title text-center">
                                    <div>
                                        <span class="line big"></span>
                                        <span>小智慧·大人生</span>
                                        <span class="line big"></span>
                                    </div>
                                    <h1>时光碎片<i>岁月静好，年华无伤</i></h1>
                                    <div class="hidden-xs">
                                        <span class="line"></span>
                                        <span>有关琐碎时间的高效利用</span>
                                        <span class="line"></span>
                                    </div>
                                    <p class="lead">
                                        时尚生活与创意设计的探索者
                                    </p>
                                    <div class="mybutton ultra">
                                        <a class="start-button" href="#about"> <span data-hover="关于我们">从这里开始</span> </a>
                                    </div>
                                </div>
                                {{-- Section title --}}

                            </div>
                        </div>
                    </div>
                    {{-- Slider item --}}
                </div>

            </div>
        </section>
        {{-- Home Section --}}
        <script>
            var oDiv=document.getElementById('div');
            var oV=document.getElementById('video');
            var oW=document.getElementById('video-volume');
            oW.onclick=function(){
                if(oV.muted==false){
                    oV.muted=true;
                }else{
                    oV.muted=false;
                }
            }
            oV.muted=true;
                if(oV.offsetHeight<oDiv.offsetHeight){
                    oV.style.height='100%';
                    oV.style.width='';
                    oV.style.top=0;

                }else if(oV.offsetWidth<oDiv.offsetWidth){
                    oV.style.width='100%';
                    oV.style.height='';
                    oV.style.left=0;
                }
                oV.style.top=(oDiv.offsetHeight-oV.offsetHeight)/2+'px';
                oV.style.left=(oDiv.offsetWidth-oV.offsetWidth)/2+'px';
            window.onresize=function(){
                if(oV.offsetHeight<oDiv.offsetHeight){
                    oV.style.height='100%';
                    oV.style.width='';
                    oV.style.top=0;

                }else if(oV.offsetWidth<oDiv.offsetWidth){
                    oV.style.width='100%';
                    oV.style.height='';
                    oV.style.left=0;
                }
                oV.style.top=(oDiv.offsetHeight-oV.offsetHeight)/2+'px';
                oV.style.left=(oDiv.offsetWidth-oV.offsetWidth)/2+'px';
            }
            var oI=document.getElementById('intro-loader');
            setInterval(function(){
                if(oI.style.display=='none'){
                    oV.play();
                }
            },1);
        </script>
        @endif

        @include('layout.home-navigation')
        @yield('content')

        @include('home.about')
        @yield('content')

        @include('home.creative')
        @yield('content')

        @include('home.travel')
        @yield('content')

        {{--
        @include('home.forum')
        @yield('content')
        --}}

        @include('home.product')
        @yield('content')

        @include('home.job')
        @yield('content')

        @include('home.event')
        @yield('content')

        {{-- Contact Section --}}
        <section id="contact" class="section-content">
            <div class="container">

                {{-- Section title --}}
                <div class="section-title text-center">
                    <div>
                        <span class="line big"></span>
                        <span>时光碎片</span>
                        <span class="line big"></span>
                    </div>
                    <h1 class="item_left">联系我们</h1>
                    <div>
                        <span class="line"></span>
                        <span>倾听每一位用户的声音</span>
                        <span class="line"></span>
                    </div>
                    <p class="lead">
                        中国 黑龙江省 哈尔滨市 松北区 浦源路2468号
                        <br>
                        <br />
                        <br />
                        {{-- <a target="_blank" href="https://maps.google.it/maps?q=Level+13,+2+Elizabeth+St,+Melbourne,+Victoria+3000,+Australia+&hl=it&ll=-37.819446,144.971595&spn=0.03407,0.066047&geocode=+&hnear=13/2+Elizabeth+St,+Melbourne+Victoria+3000,+Australia&t=m&z=15&iwloc=A">View on Google Map</a>--}}
                    </p>
                </div>
                {{-- Section title --}}

            </div>

            {{-- Google maps print --}}
            {{-- <div id="map_canvas" class="element-line"></div> --}}
            {{-- Google maps print --}}

            {{-- Contact Selction --}}

        {{-- Parallax Container --}}
        <div id="seven-parallax" class="parallax" style="background-image: url('images/separator7.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
            <div class="parallax-overlay parallax-background-color">
                <div class="section-content">
                    <div class="container text-center">
                        <div class="item_right">

                            {{-- Parallax title --}}
                            <h1><i class="fa fa-envelope-o fa-5x"></i></h1>
                            <span class="call-number" >support@timefragment.com</span>
                            <p class="lead">
                                发送 E-mail 联系我们 您将在一个工作日内收到回复
                            </p>
                            {{-- Parallax title --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <br />
        <br />
        {{-- Parallax Container --}}
        @include('layout.footer')
        @yield('content')