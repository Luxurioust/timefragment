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
                        <a href="{{ route('job.getIndex') }}"><span>时光碎片 · 酷工作</span></a>
                        <span class="line big"></span>
                    </div>
                    <h1>{{ $current_category->name }}</h1>
                </div>
                {{-- Section title --}}

                <div class="row">
                    @include('job.list')
                    @yield('content')
                    @include('job.sidebar')
                    @yield('content')
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="element-line">
                            {{ pagination($job->appends(Input::except('page')), 'layout.home-paginator') }}
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- Blog Section --}}

        {{-- Parallax Container --}}
        @include('layout.footer')
        @yield('content')