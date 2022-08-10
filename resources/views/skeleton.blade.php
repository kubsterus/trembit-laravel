<!Doctype html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD2JSWK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="application/json">
    {
        "vars": {
            "account": "UA-1758732-8"
        },
        "triggers": {
            "trackPageview": {
                "on": "visible",
                "request": "pageview"
            }
        }
    }
</script>
<div class="body-wrp">
    @include('header')
    <div class="content">
        @yield('content')
    </div>
    @include('footer')
</div>
@include('after_footer')
</body>
</html>
