<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="views/dist/img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/dist/css/font-awesome.min.css">
	<!-- nalika Icon CSS -->
    <link rel="stylesheet" href="views/dist/css/nalika-icon.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="views/dist/css/animate.css">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="views/dist/css/normalize.css">
    <!-- meanmenu icon CSS -->
    <link rel="stylesheet" href="views/dist/css/meanmenu.min.css">
    <!-- main CSS -->
    <link rel="stylesheet" href="views/dist/css/main.css">
    <!-- metisMenu CSS -->
    <link rel="stylesheet" href="views/dist/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="views/dist/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS -->
    <link rel="stylesheet" href="views/dist/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="views/dist/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="views/dist/css/style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="views/dist/css/responsive.css">
    
</head>

<body>

    <div class="left-sidebar-pro">
        <?php 
        include "views/modulos/sidebar.php";
        ?>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <?php 
        include "views/modulos/header.php";
        include "views/modulos/btn-header.php";
        if (isset($_GET["ruta"])) {
            $enrutar = new ControllerEnrutamiento();
            $enrutar -> enrutamiento();
        } else {
            include "views/modulos/home.php";
        }
        include "views/modulos/footer.php";
        ?>
        
    </div>
    <!-- jquery -->
    <script src="views/dist/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS -->
    <script src="views/dist/js/bootstrap.min.js"></script>
    <!-- Ocultar Menu -->
    <script src="views/dist/js/jquery.meanmenu.js"></script>
    <!-- sparkline JS Ajusta los Container -->
    <script src="views/dist/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="views/dist/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS -->
    <script src="views/dist/js/calendar/moment.min.js"></script>
    <script src="views/dist/js/calendar/fullcalendar.min.js"></script>
    <script src="views/dist/js/calendar/fullcalendar-active.js"></script>
    <!-- sticky JS -->
    <script src="views/dist/js/jquery.sticky.js"></script>
    <!-- metisMenu JS -->
    <script src="views/dist/js/metisMenu/metisMenu.min.js"></script>
    <script src="views/dist/js/metisMenu/metisMenu-active.js"></script>
    <!-- main JS -->
    <script src="views/dist/js/main.js"></script>
</body>

</html>