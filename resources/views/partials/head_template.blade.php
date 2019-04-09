    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="shortcut icon" href="favicon.ico">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{ Html::style('https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900') }}

   <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('template')}}/css/animate.css">
    <link rel="stylesheet" href="{{url('centro')}}/css/main.css">

    <link rel="stylesheet" href="{{url('centro')}}/css/anicollection.css">




    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" type="text/css" href="{{url('template')}}/css/component.css" />
    <!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <!-- remove this if you use Modernizr -->

    <link rel="stylesheet" href="{{url('centro')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('centro')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('centro')}}/css/fileinput.min.css">

    <link rel="stylesheet" type="text/css" href="{{url('centro')}}/css/hover-min.css">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130888170-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130888170-1');
    </script>

      <style>
        p.primeralinea {
          text-indent: 40px;
        }
      </style>
   <link rel="stylesheet"
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

<link rel="stylesheet"
      href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>
    @yield('css')