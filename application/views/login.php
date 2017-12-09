<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Witamy w systemie</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"/>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.js"); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="padding-top: 15%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Podaj swój unikalny kod</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post"
                          action="<?php echo site_url('login/show'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Błąd! </strong> $error_message</div>";
                                } ?>
                                <input class="form-control" placeholder="Kod" name="code" type="password">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" style="border:1px solid #2a2c2f; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:12px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #45484d; background-image: -webkit-gradient(linear, left top, left bottom, from(#45484d), to(#000000));
 background-image: -webkit-linear-gradient(top, #45484d, #000000);
 background-image: -moz-linear-gradient(top, #45484d, #000000);
 background-image: -ms-linear-gradient(top, #45484d, #000000);
 background-image: -o-linear-gradient(top, #45484d, #000000);
 background-image: linear-gradient(to bottom, #45484d, #000000);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#45484d, endColorstr=#000000);"
                                   type="submit" value="Akceptuj">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>