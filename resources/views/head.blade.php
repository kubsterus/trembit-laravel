<meta charset="utf-8">
<link rel="canonical" href="https://trembit.com" />
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('view/favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('view/favicons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('view/favicons/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('view/favicons/site.webmanifest')}}">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
<title>{{$meta['title'] ?? ''}}</title>
<script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Trembit",
          "alternateName": "trembit.com",
          "url": "https://trembit.com/",
          "logo": "https://trembit.com/view/images/logoDark@2x.svg",
          "email": "welcome@trembit.com",
           "telephone": "+38 050 647 78 25",
          "sameAs": [
            "https://www.instagram.com/trembit_life/",
            "https://www.linkedin.com/company/trembit/"
          ]
        }
    </script>

<meta name="robots" content="noodp,noydir" />
<meta name="description" content="{{$meta['description'] ?? ''}}" />
<meta name="image" content="{{asset('view/images/logo_trembit.png')}}" />
<meta name="url" content="{{Request::url()}}" />
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="keywords" content="{{$meta['keywords'] ?? ''}}">
<meta property="og:title" content="{{$meta['og:title'] ?? ''}}">
<meta property="og:description" content="{{$meta['og:description'] ?? ''}}">
<meta property="og:url" content="{{Request::url()}}">
<meta property="og:image" content="{{asset('view/images/logo_trembit.png')}}">

<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KD2JSWK');
</script>
<!-- End Google Tag Manager -->
<link rel="stylesheet" href="{{asset('css/header_footer.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
