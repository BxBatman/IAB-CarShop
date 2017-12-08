<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav"  >
            <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#carModal" style="margin-bottom: 2px;">Dodaj auto
            </button>

            <div id="carModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Dodaj auto</h4>
                        </div>




                        <div class="modal-body">
                            <form name="carForm" method="post" action="<?php echo site_url('cars/addCar'); ?>">
                                <div class="form-group">
                                    <label>Numer Seryjny:</label>
                                    <input class="form-control" id="serialNumber" placeholder="Wprowadź numer"
                                           name="serialNumber" required>
                                </div>
                                <div class="form-group">
                                    <label>Marka:</label>
                                    <input class="form-control" id="make" placeholder="Wprowadź marke"
                                           name="make" required>
                                </div>
                                <div class="form-group">
                                    <label>Model:</label>
                                    <input class="form-control" id="model" placeholder="Wprowadź model"
                                           name="model" required>
                                </div>
                                <div class="form-group">
                                    <label>Kolor:</label>
                                    <input class="form-control" id="color" placeholder="Wprowadź kolor"
                                           name="color" type="text" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+" required>
                                </div>
                                <div class="form-group">
                                    <label>Rok:</label>
                                    <input class="form-control" id="year" placeholder="Wprowadź rok produkcji"
                                           name="year" pattern="\d*" maxlength="4" required>
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
                    auto
                </button>

                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Usuń auto</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo site_url('cars/removeCar'); ?>" >
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
                <h2>Samochody</h2>
                <table class="table table-striped">
                    <thead style="background: rgb(222,239,255); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(222,239,255,1) 0%, rgba(152,190,222,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#deefff', endColorstr='#98bede',GradientType=0 );">
                    <tr>
                        <th>Id</th>
                        <th>Nr Seryjny</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Kolor</th>
                        <th>Rok</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($carData as $row) {

                        echo "<tr>";
                        echo "<td>" . $row['idAuto'] . "</td>";
                        echo "<td>" . $row['numerSeryjny'] . "</td>";
                        echo "<td>" . $row['marka'] . "</td>";
                        echo " <td>" . $row['model'] . "</td>";
                        echo " <td>" . $row['kolor'] . "</td>";
                        echo " <td>" . $row['rok'] . "</td>";
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