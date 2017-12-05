<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"/>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.js"); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</head>
<body>


<div class="container" >
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="padding-top: 15%;">
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <h3 class="panel-title">Podaj swój unikalny kod</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="<?php echo site_url('login/show');?>">
                        <fieldset>
                            <div class="form-group">
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Błąd!</strong> $error_message</div>";
                                } ?>
                                <input class="form-control" placeholder="Kod" name="code" type="password">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" style="background-color: transparent; color:black; border-color: #0f0f0f" type="submit" value="Akceptuj">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>