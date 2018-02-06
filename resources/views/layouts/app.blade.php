<!DOCTYPE html>
<html>
<head>
    <!-- -------------------------------Voyager------------------------------------------  -->
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    @yield('css')

    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .card {
          display: inline-block;
          flex: 1;
          position: relative;
          min-width: 200px;
          height: 10rem;
          margin: .1rem;
          font-family: 'Lato', sans-serif;
          text-align: center;
          text-decoration: none;
          color: white;
          background-color: #3979B7;
          overflow: hidden;
          font-size: 0.75em;
        }
        .card__icon {
          display: block;
          position: absolute;
          top: 10px;
          right: 0;
          width: 50px;
          line-height: 2rem;
          text-align: center;
          transition: all 0.2s ease-in-out;
        }
        .card__circle {
          display: block;
          position: absolute;
          top: 10px;
          right: 10px;
          width: 30px;
          height: 30px;
          background-color: white;
          border-radius: 50%;
          opacity: 0.2;
          transition: all 0.4s ease-in-out;
        }
        .card__circleRed {
          color:red;
          display: block;
          position: absolute;
          top: 10px;
          right: 10px;
          width: 30px;
          height: 30px;
          background-color: red;
          border-radius: 50%;
          opacity: 0.2;
          transition: all 0.4s ease-in-out;
        }
        .card > p {
          position: relative;
          top: 50%;
          margin: 0 2rem;
          text-transform: uppercase;
          letter-spacing: 1px;
          transform: translateY(-50%);
          transition: all 0.2s ease-in-out;
          color:#ffffff;
        }
        .card--alt-1 {
          background-color: #7E3F82;
        }
        .card--alt-2 {
          background-color: #39B764;
        }
        .card--alt-3 {
          background-color: #CC3F82;
        }
        .card--alt-4 {
          background-color: #EF7C2B;
        }
        .card:hover .card__circle {
          transform: scale(70);
          opacity: 0.8;
        }
        .card:hover .card__circleRed {
          background-color: white;
          transform: scale(70);
          opacity: 0.8;
        }
        .card:hover > p,
        .card:hover .card__icon {
          color: #45556E;
        }
        .container1 {
          display: flex;
          flex-flow: row wrap;
          align-content: stretch;
        }
    </style>

<!-- -------------------------------------------------------------------------------------- -->

<!-- This site is optimized with the Yoast SEO plugin v5.5 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="http://dservices.grupointermedics.info/" />
<meta property="og:locale" content="es_ES" />
<meta property="og:type" content="website" />
<meta property="og:title" content="%title%" />
<meta property="og:url" content="http://dservices.grupointermedics.info/" />
<meta property="og:site_name" content="Avada Health" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-5.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-6.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-7.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/play-icon.png" />
<meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/wave-divider.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="%title%" />
<meta name="twitter:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/icon-5.png" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/dservices.grupointermedics.info\/","name":"Avada Health","potentialAction":{"@type":"SearchAction","target":"http:\/\/dservices.grupointermedics.info\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Avada Health &raquo; Feed" href="http://dservices.grupointermedics.info/feed/" />
<link rel="alternate" type="application/rss+xml" title="Avada Health &raquo; RSS de los comentarios" href="http://dservices.grupointermedics.info/comments/feed/" />

        <meta property="og:title" content="Home"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="http://dservices.grupointermedics.info/"/>
        <meta property="og:site_name" content="Avada Health"/>
        <meta property="og:description" content="Caring For Life Kind words can be short and easy to speak, but their echoes are truly endless. Avada Health focuses on you as if it was our own family.  Learn More   OFFICE HOURS"/>

                                    <meta property="og:image" content="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png"/>
                            <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/dservices.grupointermedics.info\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.3"}};
            !function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
        <style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.4.5.1' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='avada-stylesheet-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/assets/css/style.min.css?ver=5.2.1' type='text/css' media='all' />
<!--[if lte IE 9]>
<link rel='stylesheet' id='avada-IE-fontawesome-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/includes/lib/assets/fonts/fontawesome/font-awesome.css?ver=5.2.1' type='text/css' media='all' />
<![endif]-->
<!--[if IE]>
<link rel='stylesheet' id='avada-IE-css'  href='http://dservices.grupointermedics.info/wp-content/themes/Avada/assets/css/ie.css?ver=5.2.1' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='fusion-dynamic-css-css'  href='http://dservices.grupointermedics.info/wp-content/uploads/fusion-styles/fusion-5.css?timestamp=1508970442&#038;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-font-awesome-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai/assets/css/font-awesome.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-googlemaps-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai-googlemaps/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='stylesheet' id='sabai-directory-css'  href='http://dservices.grupointermedics.info/wp-content/plugins/sabai-directory/assets/css/main.min.css?ver=1.3.25' type='text/css' media='all' />
<link rel='https://api.w.org/' href='http://dservices.grupointermedics.info/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dservices.grupointermedics.info/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://dservices.grupointermedics.info/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.3" />
<link rel='shortlink' href='http://dservices.grupointermedics.info/' />
<link rel="alternate" type="application/json+oembed" href="http://dservices.grupointermedics.info/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdservices.grupointermedics.info%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://dservices.grupointermedics.info/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdservices.grupointermedics.info%2F&#038;format=xml" />
        
</head>



<body class="home page-template page-template-100-width page-template-100-width-php page page-id-5 fusion-image-hovers fusion-body ltr no-tablet-sticky-header no-mobile-sticky-header mobile-logo-pos-left layout-wide-mode fusion-top-header menu-text-align-center mobile-menu-design-modern fusion-show-pagination-text">
                <div id="wrapper" class="">
        <div id="home" style="position:relative;top:-1px;"></div>
                
        
            <header class="fusion-header-wrapper">
                <div class="fusion-header-v1 fusion-logo-left fusion-sticky-menu- fusion-sticky-logo-1 fusion-mobile-logo-1 fusion-mobile-menu-design-modern ">
                    <div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
    <div class="fusion-row">
        <div class="fusion-logo" data-margin-top="31px" data-margin-bottom="31px" data-margin-left="0px" data-margin-right="0px">
                <a class="fusion-logo-link" href="http://dservices.grupointermedics.info/">
                        <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Logo" class="fusion-logo-1x fusion-standard-logo" />

                            <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Retina Logo" class="fusion-standard-logo fusion-logo-2x" />
            
            <!-- mobile logo -->
                                            <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Mobile Logo" class="fusion-logo-1x fusion-mobile-logo-1x" />

                                    <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Mobile Retina Logo" class="fusion-logo-2x fusion-mobile-logo-2x" />
                            
            <!-- sticky header logo -->
                                            <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Sticky Logo" class="fusion-logo-1x fusion-sticky-logo-1x" />

                                    <img src="http://dservices.grupointermedics.info/wp-content/uploads/2017/11/SmallLogoBlanco-2.png" width="300" height="181" alt="Avada Health Sticky Logo Retina" class="fusion-logo-2x fusion-sticky-logo-2x" />
                                    </a>
        </div>             
        <style>
            .navbar {
               background-color: transparent;
               background: transparent;
               border-color: transparent;
            }

        .navbar li { color: #000 } 
        .menuBarra{
            box-sizing: border-box !important; 
            color: #ffffff; 
            line-height: 115px !important; 
            font-family: Montserrat, Arial,Helvetica, sans-serif; font-size: 14px !important; 
            font-weight: bold !important; 
            letter-spacing: 1px !important; 
            cursor: pointer;font: 13px/20px PTSansRegular,Arial,Helvetica,sans-serif !important;
        }
        </style>

<nav class="navbar navbar-default" aria-label="Main Menu" style="line-height: 115px !important;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="http://dservices.grupointermedics.info/"><span class="menu-text menuBarra">HOME</span></a></li><li></li>
                    <li><a href="http://dservices.grupointermedics.info/abaut/"><span class="menu-text menuBarra">CONÓCENOS</span></a></li>
                    <li><a href="http://dservices.grupointermedics.info/departments/"><span class="menu-text menuBarra">DEPARTMENTS</span></a></li>
                    <li><a href="http://dservices.grupointermedics.info/articles/"><span class="menu-text menuBarra">ARTICLES</span></a></li>
                @else
                    @if( Auth::user()->role_id=='2')
                        <li><a href="http://dservices.grupointermedics.info/"><span class="menu-text menuBarra">HOME</span></a></li><li></li>
                        <li><a href="http://dservices.grupointermedics.info/abaut/"><span class="menu-text menuBarra">CONÓCENOS</span></a></li>
                        <li><a href="http://dservices.grupointermedics.info/departments/"><span class="menu-text menuBarra">DEPARTMENTS</span></a></li>
                        <li><a href="http://dservices.grupointermedics.info/articles/"><span class="menu-text menuBarra">ARTICLES</span></a></li>
                    @endif
                @endif
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}" style="color: #3bafbf;">
                            <span class="btn btn-primary btn-lg" >Entrar</span>
                        </a>
                    </li>                                                        
                    @else    
                        @if( Auth::user()->role_id=='1')
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contratistas<span class="caret"></span></a>
                              <ul class="dropdown-menu" style="background-color: transparent;">
                                <li><a href={{ route('contratistas.index') }}><span class="menu-text menuBarra">Contratistas</span></a></li>                                
                                <li><a href={{ url('admin1/admservicioscontratistas') }}><span class="menu-text menuBarra">Administrar Servicios contratistas</span></a></li>
                                <li><a href={{ route('servicioscontratistas.index') }}><span class="menu-text menuBarra">servicioscontratistas</span></a></li>                                
                              </ul>
                            </li>
                            <li class="dropdown" >
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Solicitudes<span class="caret"></span></a>
                              <ul class="dropdown-menu" style="background-color: transparent;">
                                <li><a href={{ url('admin1/solicituddetalle') }}><span class="menu-text menuBarra">Solicitud Detalle</span></a></li>
                                <li><a href={{ route('admsolicitudes.index') }}><span class="menu-text menuBarra">Adm. solicitudes</span></a></li>
                                <li><a href={{ url('admin1/mostrarsolicitudes') }}><span class="menu-text menuBarra">Mostrar solicitudes</span></a></li>

                              </ul>
                            </li>
                            <li><a href={{ route('categorias.index') }}><span class="menu-text menuBarra">Categorías</span></a></li>
                            <li><a href={{ route('sedes.index') }}><span class="menu-text menuBarra">Sedes</span></a></li>
                        @endif 
                        <li>
                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ Auth::user()->name }} (Salir)
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    @endif
              </ul>
              @if (Auth::guest())

              @else
                @if( Auth::user()->role_id=='2')
                  <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href={{ url('/') }} class="card card--alt-3">
                            <i class="card__circle"></i>
                            <span style="color: #ffffff;"><i class="card__icon fa fa-info"></i></span>
                            <p><span >Buscar Servicio</span></p>
                        </a>  
                    </li>
                    <li>
                        <a href={{ route('membresia.index') }} class="card card--alt-1">
                            <i class="card__circle"></i>
                            <span style="color: #ffffff;"><i class="card__icon fa fa-info"></i></span>
                            <p><span >Adquirir membresía</span></p>
                        </a>  
                    </li>
                    <li>
                        <a href={{ url('solicitudestabla') }} class="card card--alt-2">
                            <i class="card__circleRed"></i>
                            <span style="color: #a22121;"><i class="card__icon">{{ dservices\Model\solicitudes::where('users_id',Auth::id())->where('estadosolicitudes_id',6)->count() }}</i></span>
                            <p><span>Solcitudes</span></p>
                        </a>  
                    </li>
                    <li>
                        <a href={{ url('/confirmardatos') }} class="card card--alt-4">
                            <i class="card__circle"></i>
                            <span style="color: #ffffff;"><i class="card__icon fa fa-info"></i></span>
                            <p><span>Datos personales</span></p>
                        </a>  
                    </li>
                </ul>
                @endif
              @endif              
            </div>
          </div>
</nav>
    </div>
</div>
                </div>
                <div class="fusion-clearfix"></div>
            </header>
                    
        <div id="sliders-container">
                    </div>
                        
</div>  

<main id="main" role="main" class="clearfix width-100" style="padding-left:30px;padding-right:30px">
            <div class="fusion-row" style="max-width:100%;">
<section id="content" class="full-width">
            <div id="post-5" class="post-5 page type-page status-publish hentry">
            
            <span class="entry-title rich-snippet-hidden">Home</span>
    
            <span class="vcard rich-snippet-hidden">
            <span class="fn">
                <a href="http://dservices.grupointermedics.info/author/grupointermedics/" title="Entradas de grupointermedics" rel="author">D'Services</a>          </span>
        </span>
    
            <span class="updated rich-snippet-hidden">
            </span>
    
            <div class="post-content">
                <div class=" fusion-bg-parallax"  data-bg-align="center center" data-direction="up" data-mute="false" data-opacity="100" data-velocity="-0.4" data-mobile-enabled="false" data-break_parents="0" data-bg-image="http://dservices.grupointermedics.info/wp-content/uploads/2015/12/make-an-appointment.jpg" data-bg-repeat="false" data-bg-height="" data-bg-width=""></div>
                <div  class="fusion-fullwidth fullwidth-box fusion-parallax-up nonhundred-percent-fullwidth"  style='background-color: rgba(255,255,255,0);background-image: url("http://dservices.grupointermedics.info/wp-content/uploads/2015/12/make-an-appointment.jpg");background-position: center center;background-repeat: no-repeat;padding-top:14%;padding-right:5%;padding-bottom:14%;padding-left:5%;border-top-width:0px;border-bottom-width:0px;border-color:#eae9e9;border-top-style:solid;border-bottom-style:solid;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-attachment:up;'>
                    <div class="fusion-builder-row fusion-row ">
                        <div  class="fusion-layout-column fusion_builder_column fusion_builder_column_2_3  fusion-two-third fusion-column-first 2_3"  style='margin-top:0px;margin-bottom:30px;width:90%; margin-right: 4%;'>
                            <div class="fusion-column-wrapper" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;"  data-bg-url="">
                                <p style="font-size: 26px; line-height: 26px;">
                                    <span style="color: #ffffff;">
                                        @yield('content')
                                    </span>
                                </p>
                            <div class="fusion-sep-clear"></div>
                            <div class="fusion-separator fusion-full-width-sep sep-none" style="margin-left: auto;margin-right: auto;margin-top:15px;margin-bottom:10px;"></div>
                            
                            </div>
                            <div class="fusion-clearfix">

                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>

</section>
</div>
</main>

<a class="fusion-one-page-text-link fusion-page-load-link"></a>

<!-- Javascript Libs -->


<script src="/js/app.js"></script>
<script src="/js/dservices.js"></script>

<script>
    @if(Session::has('alerts'))
        let alerts = {!! json_encode(Session::get('alerts')) !!};
        helpers.displayAlerts(alerts, toastr);
    @endif

    @if(Session::has('message'))

    // TODO: change Controllers to use AlertsMessages trait... then remove this
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
    var alerter = toastr[alertType];

    if (alerter) {
        alerter(alertMessage);
    } else {
        toastr.error("toastr alert-type " + alertType + " is unknown");
    }

    @endif
</script>

</body>
</html>