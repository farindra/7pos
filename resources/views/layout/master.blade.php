<!doctype html>
<html lang="ina">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    @yield('meta')

    <title>@yield('title')</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset("/core/assets/ico/apple-touch-icon-144-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset("/core/assets/ico/apple-touch-icon-114-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset("/core/assets/ico/apple-touch-icon-72-precomposed.png") }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset("/core/assets/ico/apple-touch-icon-57-precomposed.png") }}">
    <link rel="shortcut icon" href="{{ asset("/core/assets/ico/favicon.ico") }}">

    @yield('topcss')

    @yield('topstyle')

    @yield('topscript')

</head>

<body class="leftMenu nav-collapse">
    <div id="wrapper">

        <div id="header">
            @yield('header')
        </div><!--header--> 


        <div id="nav">
            @yield('sidenav')
        </div><!--nav-->        

        <div class="widget-top-search">
            @yield('topsearch')
        </div><!--widget-top-search-->

        <div id="main">

            <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
            </ol>

            <div class="content">

               @yield('content')

            </div><!--content-->

        </div> <!--main-->

        @yield('append')

        <nav id="menu" data-search="close">
            @yield('menuleft')
        </nav> <!-- menu left -->

        <nav id="menu-right">
            @yield('menuright')
        </nav> <!-- menu right -->

    </div><!--wrapper-->    
</body>

    @yield('bottomcss')

    @yield('bottomscript')

<!-- Jquery Library -->
<script type="text/javascript" src="{{ asset("/core/assets/js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/js/jquery.ui.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/angular/angular.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/angular/angular-route.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/bootstrap/bootstrap.min.js") }}"></script>
<!-- Modernizr Library For HTML5 And CSS3 -->
<script type="text/javascript" src="{{ asset("/core/assets/js/modernizr/modernizr.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/mmenu/jquery.mmenu.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/js/styleswitch.js") }}"></script>
<!-- Library 10+ Form plugins-->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/form/form.js") }}"></script>
<!-- Datetime plugins -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datetime/datetime.js") }}"></script>
<!-- Library Chart-->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/chart/chart.js") }}"></script>
<!-- Library  5+ plugins for bootstrap -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/pluginsForBS/pluginsForBS.js") }}"></script>
<!-- Library 10+ miscellaneous plugins -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/miscellaneous/miscellaneous.js") }}"></script>
<!-- Library Themes Customize-->
<script type="text/javascript" src="{{ asset("/core/assets/js/caplet.custom.js") }}"></script>
<!-- Library jqvmap -->
<script src="{{ asset("/core/assets/plugins/vmap/jquery.vmap.js") }}" type="text/javascript"></script>
<script src="{{ asset("/core/assets/plugins/vmap/maps/jquery.vmap.world.js") }}" type="text/javascript"></script>
<script src="{{ asset("/core/assets/plugins/vmap/data/jquery.vmap.sampledata.js") }}" type="text/javascript"></script>
<!-- Library Owl Carousel  -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/owl-carousel/owl.carousel.js") }}"></script>
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.carousel.css") }}" rel="stylesheet">
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.theme.css") }}" rel="stylesheet">
<link href="{{ asset("/core/assets/plugins/owl-carousel/owl.transitions.css") }}" rel="stylesheet">
<!-- Library datable -->
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datable/jquery.dataTables.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("/core/assets/plugins/datable/dataTables.bootstrap.js") }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: '#736086',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ["#0aa699", "#0bbeaf"],
            normalizeFunction: 'polynomial'
        });
        $("#owl-demo").owlCarousel({
            autoPlay : 5000,
            stopOnHover : true,
            paginationSpeed : 5000,
            goToFirstSpeed : 3000,
            singleItem : true,
            autoHeight : true,
            transitionStyle:"fade"
        });
        /*$('table[data-provide="data-table"]').dataTable({
            "iDisplayLength": 5
        });*/
    });
</script>

</html>