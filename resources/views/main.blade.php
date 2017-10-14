<!doctype html>

<html lang="en" class="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vinay</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    @if ( url()->current() != url("/portfolio") )
      <style>
        body {
          font-family: Scheme !important;
        }
      </style>  
    @endif
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/port.css">
    <script src="/js/dd2f217cf7.js"></script>
    <link rel="prefetch" href="{{ $data['main_image_path'] }}">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107284365-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
            gtag('js', new Date());

            gtag('config', 'UA-107284365-1');
    </script>

  </head>

  <body class="site-wrapper" data-spy="scroll" data-target="#navbar-example">
        @include ('layouts.header')

        <div id="content-wrapper">
            @yield('content')
        </div>

        @include ('layouts.footer')

        <script type="text/javascript" src="/js/jqueryV1.10.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.bpopup.min.js"></script>
        <script src="/js/jquery.easing.js"></script>
        <script src="/js/port.js"></script>
  </body>
</html>
