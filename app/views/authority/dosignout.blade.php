@include('layout.authority-header')
@yield('content')
    <body class="dark">
        <div id="fb-root"></div>
        <header>
        @include('layout.navigation')
        @yield('content')
        </header>

        <form id="signupForm" method="post" action="/signup" class=" " autocomplete="off" data-reservation-mode="" data-auto-submit="" data-user="" data-signup-redirect="" >
            <h1>您已登出</h1>
            <fieldset id="message" class="message">
                <p class="center">欢迎来到时光碎片</p></fieldset>
            <fieldset id="quotes">
                <p>&ldquo;时光不老，我们不散&rdquo;
                    <cite>&ndash; 时光碎片</cite>
                </p>
                <p>&ldquo;编织梦想，程就未来&rdquo;
                    <cite>&ndash; luxurioust</cite>
                </p>
            </fieldset>
        </form>

    </body>
</html>