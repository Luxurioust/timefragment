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
                        <span><a href="{{ route('job.getIndex') }}">时光碎片 · 酷工作</a></span>
                        <span class="line big"></span>
                    </div>
                    <h1>{{ $job->title }}</h1>
                    <div>
                        <span class="line"></span>
                        <span>{{ $job->location }} · {{ $job->category->name }}</span>
                        <span class="line"></span>
                    </div>
                    @if($job->user->nickname)
                    <p class="lead">
                        来自 {{ $job->user->nickname }} 的招聘，发布于{{ $job->friendly_created_at }}
                    </p>
                    @else
                    <p class="lead">
                        发布于{{ $job->friendly_created_at }}
                    </p>
                    @endif
                </div>
                {{-- Section title --}}

                <div class="row">
                    @include('job.content')
                    @yield('content')
                    @include('job.sidebar')
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