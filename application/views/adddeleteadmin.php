<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
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
                    <h3 class="panel-title">Admin</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post"
                          action="<?php echo site_url('admin/loadAddIndex'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <?php
                                if (isset($error_message)) {
                                    echo "<div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Błąd! </strong> $error_message</div>";
                                } ?>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Nazwisko</th>
                                        <th>Imie</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($sellerData as $row) {

                                        echo "<tr>";
                                        echo "<td>" . $row['idSprzedawca'] . "</td>";
                                        echo "<td>" . $row['nazwisko'] . "</td>";
                                        echo "<td>" . $row['imie'] . "</td>";

                                        echo "</tr>";


                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </fieldset>
                    </form>
                    <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#carModal" style="margin-bottom: 2px;">Dodaj mechanika
                    </button>

                    <div id="carModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Dodaj sprzedawce</h4>
                                </div>
                                <div class="modal-body">
                                    <form name="carForm" method="post" action="<?php echo site_url('admin/addSeller'); ?>">
                                        <div class="form-group">
                                            <label>Nazwisko:</label>
                                            <input class="form-control" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+" id="surname" placeholder="Wprowadź nazwisko"
                                                   name="surname" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Imie:</label>
                                            <input class="form-control" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+" id="name" placeholder="Wprowadź imie"
                                                   name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Hasło</label>
                                            <input type="password" class="form-control" id="pass" placeholder="Wprowadź hasło"
                                                   name="pass" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Dodaj</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                                </div>
                            </div>

                        </div>

                    </div>
                    <button type="button" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#myModal2">Usuń
                        sprzedawce
                    </button>

                    <div id="myModal2" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Usuń sprzedawce</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo site_url('admin/deleteSeller'); ?>" >
                                        <div class="form-group">
                                            <label>Podaj numer ID:</label>
                                            <input class="form-control" id="id" placeholder="Wprowadź ID"
                                                   name="id" pattern="\d*" required>
                                        </div>
                                        <button type="submit" class="btn btn-danger">Usuń</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>