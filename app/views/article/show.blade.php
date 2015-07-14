@include('layout.header')
@yield('content')

    <body data-spy="scroll" data-target=".navbar" data-offset="75">

        {{-- Intro loader --}}
        <div class="mask">
            <div id="intro-loader"></div>
        </div>
        {{-- Intro loader --}}

        @include('layout.navigation')
        @yield('content')

        {{-- Blog Section --}}
        <section class="section-content blog-content">
            <div class="container">

                {{-- Section title --}}
                <div class="section-title text-center">
                    <div>
                        <span class="line big"></span>
                        <span><a href="{{ route('home') }}">时光碎片</a></span>
                        <span class="line big"></span>
                    </div>
                    <h1>{{ $article->title }}</h1>
                    <div>
                        <span class="line"></span>
                        <span>{{ $article->meta_title }}</span>
                        <span class="line"></span>
                    </div>
                    <p class="lead">
                        {{ $article->meta_description }}
                    </p>
                </div>
                {{-- Section title --}}

                <div class="row">
                    @include('article.content')
                    @yield('content')
                    @include('article.sidebar')
                    @yield('content')
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="element-line">
                            <div class="pager">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- Blog Section --}}

        {{-- Parallax Container --}}
        @include('layout.footer')
        @yield('content')