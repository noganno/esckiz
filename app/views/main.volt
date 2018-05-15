<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">
  <title>{{ helper.title().get()|escape }}</title>

  {{ helper.meta().get('description') }}
  {{ helper.meta().getOG('type') }}
  {{ helper.meta().getOG('site_name') }}
  {{ helper.meta().getOG('url') }}
  {{ helper.meta().getOG('title') }}
  {{ helper.meta().getOG('description') }}
  {{ helper.meta().getOG('image') }}
  {{ helper.meta().get('robots') }}
  <link href="/{{ helper.favicon() }}" rel="shortcut icon" type="image/vnd.microsoft.icon"> 
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="/assets/css/price-range.css" rel="stylesheet">
  <link href="/assets/css/animate.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">
  <link href="/assets/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="/vendor/js/html5shiv.js"></script>
  <script src="/vendor/js/respond.min.js"></script>
  <![endif]-->       
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/assets/images/ico/apple-touch-icon-57-precomposed.png">
  <script src="/assets/js/jquery.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.scrollUp.min.js"></script>
  <script src="/assets/js/price-range.js"></script>
  <script src="/assets/js/jquery.prettyPhoto.js"></script>
  <script src="/vendor/form.min.js"></script>
  <script src="/assets/js/main.js"></script>
</head>

<body>
  {{ content() }} 
</body>
</html>
