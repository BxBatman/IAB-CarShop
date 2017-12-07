<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav"  >
            <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#carModal" style="margin-bottom: 2px;">Dodaj mechanika
            </button>

            <div id="carModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Dodaj mechanika</h4>
                        </div>




                        <div class="modal-body">
                            <form name="carForm" method="post" action="<?php echo site_url('mechanic/addMechanic'); ?>">
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
                mechanika
            </button>

            <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń mechanika</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('mechanic/removeMechanic'); ?>" >
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
            </a>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-10 text-left">
            <?php
            if (isset($success)) {
                echo "<div class=\"alert alert-success alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Sukces! </strong>" . $success['success'] . "</div>";

            } else if (isset($error)) {
                echo "<div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Błąd! </strong>" .$error['error']."</div>";
            }

            ?>
            <div class="container">
                <h2>Mechanicy</h2>
                <table class="table table-striped">
                    <thead style="background: rgb(222,239,255); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(222,239,255,1) 0%, rgba(152,190,222,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#deefff', endColorstr='#98bede',GradientType=0 );">
                    <tr>
                        <th>Id</th>
                        <th>Nazwisko</th>
                        <th>Imie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($mechanicData as $row) {

                        echo "<tr>";
                        echo "<td>" . $row['idMechanik'] . "</td>";
                        echo "<td>" . $row['nazwisko'] . "</td>";
                        echo "<td>" . $row['imie'] . "</td>";
                        echo "</tr>";


                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>


    </div>
</div>
</div>
</body>
</html>
