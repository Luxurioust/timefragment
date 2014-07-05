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


		@include('layout.home-navigation')
		@yield('content')

		@include('home.about')
		@yield('content')

		@include('home.creative')
		@yield('content')

		@include('home.travel')
		@yield('content')

		{{-- Parallax Container --}}
		<div id="ichat" class="parallax" style="background-image: url('images/separator2.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
			<div class="parallax-overlay">
				<div class="section-content">
					<div class="container text-center">

						{{-- Parallax title --}}
						<h1>爱聊吧</h1>
						<p class="lead">
							结识新朋友，遇见新自己（本栏目正在开发，将在近期上线，敬请期待）
						</p>
						{{-- Parallax title --}}

						{{-- Parallax content --}}
						<div class="parallax-content social-link">
							<div class="row">

								{{-- Link item --}}
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="element-line">
										<div class="item_top">
											<div class="hi-icon-effect-1">
												<a href="#" class=""> <i class="hi-icon fa fa-heart-o fa-4x"></i> </a>
											</div>
											<span>兴趣相投</span>
											<p class="lead hidden-xs">
												我们兴趣相投
											</p>
										</div>
									</div>
								</div>
								{{-- Link item --}}

								{{-- Link item --}}
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="element-line">
										<div class="item_bottom">
											<div class="hi-icon-effect-1">
												<a href="#" class=""> <i class="hi-icon fa fa-stack-exchange fa-4x"></i> </a>
											</div>
											<span>经验交流</span>
											<p class="lead hidden-xs">
												分享经验·共同进步
											</p>
										</div>
									</div>
								</div>
								{{-- Link item --}}

								{{-- Link item --}}
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="element-line">
										<div class="item_top">
											<div class="hi-icon-effect-1">
												<a href="#" class=""> <i class="hi-icon fa fa-users fa-4x"></i> </a>
											</div>
											<span>老朋友啦</span>
											<p class="lead hidden-xs">
												叙叙旧，谈谈那些年的往事
											</p>
										</div>
									</div>
								</div>
								{{-- Link item --}}

								{{-- Link item --}}
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="element-line">
										<div class="item_bottom">
											<div class="hi-icon-effect-1">
												<a href="#" class=""> <i class="hi-icon fa fa-search fa-4x"></i> </a>
											</div>
											<span>发现TA</span>
											<p class="lead hidden-xs">
												结识新朋友
											</p>
										</div>
									</div>
								</div>
								{{-- Link item --}}

							</div>
						</div>
						{{-- Parallax content --}}

					</div>
				</div>
			</div>
		</div>
		{{-- Parallax Container --}}

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
						<span>And now</span>
						<span class="line big"></span>
					</div>
					<h1 class="item_left">联系我们</h1>
					<div>
						<span class="line"></span>
						<span>Is time to do it</span>
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
							<span class="call-number" >timefragment.com@gmail.com</span>
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