<head>
    <meta charset="utf-8">
    <title>{{ $meta_title ?? 'Password hints for websites and mobile apps' }} &rarr; PassHints</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $meta_description ?? '' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $meta_title ?? 'Password hints for websites and mobile apps' }}" />
    <meta property="og:description" content="{{ $meta_description ?? '' }}" />
    <meta property="og:url" content="https://passhints.co/{{ $slug === '/' ? '' : $slug }}" />
    <meta property="og:site_name" content="PassHints" />
    <meta property="og:image" content="https://passhints.co/assets/img/passhints-social-image.png" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $meta_description ?? '' }}" />
    <meta name="twitter:title" content="{{ $meta_title ?? 'Password hints for websites and mobile apps' }}" />
    <meta name="twitter:site" content="@aschmelyun" />
    <meta name="twitter:image" content="https://passhints.co/assets/img/passhints-social-image.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <meta name="theme-color" content="#4A69BD">

    <link rel="stylesheet" type="text/css" href="{{ $mix['/assets/css/app.css']  }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:700|Open+Sans:400,600,700" rel="stylesheet">

    <script data-ad-client="ca-pub-5644982708290077" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>