<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>{{ $title or '早' }} - 飞鱼秀非官方回放</title>
        <meta name="keywords" content="早嗷嗷嗷嗷 飞鱼秀 回放 下载 小飞 喻舟">
        <meta name="description" content="{{ $description or '亲爱的飞鱼人，这里可以在线收听或下载自 2004 年飞鱼秀开播以来的几乎所有的节目回放喔~' }}">
        <link type="text/plain" rel="author" href="/humans.txt">
        <link rel="stylesheet" href="/static/module/tipsy/tipsy.css">
        <link rel="stylesheet" href="/static/module/AmaranJS/css/amaran.min.css">
        <link rel="stylesheet" href="/static/css/font-awesome.min.css">
        <link rel="stylesheet" href="/static/css/main.css">
        <link rel="stylesheet" href="/static/css/amaran.css">
        <script src="/static/module/jquery/jquery-2.1.4.min.js"></script>
        <script src="/static/module/jquery/jquery.cookie.js"></script>
        <script src="/static/module/tipsy/jquery.tipsy.js"></script>
        <script src="/static/module/js-emoji/js/emoji.min.js"></script>
        <script src="/static/module/AmaranJS/js/jquery.amaran.min.js"></script>
        <script src="/static/js/common.js"></script>
        <script src="/static/js/base.js"></script>
        <!--[if lt IE 9]>
            <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="sidebar">
                <img class="avatar" src="/static/img/avatar.jpg">
                <h2 class="description">再见飞鱼秀，不散的飞鱼人</h2>
                <form action="/" method="get" class="search">
                    <i class="fa fa-search"></i>
                    <input type="search" name="s" value="{{ $_GET['s'] or '' }}" placeholder="" autocomplete="off">
                </form>
                <nav>
                    <a href="{{ URL('/') }}"><i class="fa fa-home" original-title="首页"></i></a>
                    <a href="{{ URL('music') }}"><i class="fa fa-music" original-title="歌曲"></i></a>
                    <!--a href="{{ URL('program/apptoday') }}"><i class="fa fa-calendar-check-o" original-title="APP 同期节目"></i></a-->
                    <a href="{{ URL('here') }}"><i class="fa fa-map-o" original-title="签到"></i></a>
                    <a href="{{ URL('about') }}"><i class="fa fa-about" original-title="关于"></i></a>
                </nav>

                @if ( ! Agent::isMobile())
                <a href="/{{ $cover['original'] }}" target="_blank" class="image-copyright">{{ $cover['copyright'] }}</a>
                @endif
            </div>
        </header>

        <div class="content" id="content" data-notification='{!! $notification or "{}" !!}'>

            @yield('content')

            <footer id="footer">
                © 2016 <a href="{{ URL('/') }}">Zao~ao~ao~ao~ao.com</a> @yield('extra')
            </footer>
        </div>

        <script src="/static/js/cn-tw.js"></script>

        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-72733017-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
