<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Car Shop Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
            background: #a7cfdf; /* Old browsers */
            background: -moz-linear-gradient(top, #a7cfdf 0%, #23538a 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top, #a7cfdf 0%,#23538a 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom, #a7cfdf 0%,#23538a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7cfdf', endColorstr='#23538a',GradientType=0 );

        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: white;
            height: 100%;
            border-right-width: 2px;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }

        .btn-block{
            min-width: 130%;
        }


    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('home/index');?>"><span class="glyphicon glyphicon-home" style="color: white;"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url('clients/index');?>" style="color:white">Klienci</a></li>
                <li><a href="<?php echo site_url('cars/index');?>" style="color: white">Samochody</a></li>
                <li><a href="<?php echo site_url('invoices/index');?>" style="color: white">Faktury</a></li>
                <li><a href="<?php echo site_url('ticket/index');?>" style="color: white">Bilet</a></li>
                <li><a href="<?php echo site_url('mechanic/index');?>" style="color: white">Mechanicy</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" >
                <li ><a href="#"><span  style="color: white;"> Zalogowano jako: <?php echo $_SESSION['imie']." ".$_SESSION['nazwisko']; ?></span></a></li>
                <li><a href="<?php echo site_url('login/logout');?>" style="color: white;" ><span class="glyphicon glyphicon-log-in" style="color: white;"></span> Wyloguj</a></li>
            </ul>

        </div>
    </div>
</nav>