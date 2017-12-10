<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav">

            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal"
                    style="margin-bottom: 2px" data-target="#myModal3">
                Pokaż bilety
            </button>

            <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width:100%">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Bilety</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Numer biletu</th>
                                    <th>Data otrzymania</th>
                                    <th>Komentarz</th>
                                    <th>Data zwrotu</th>
                                    <th>Nazwisko</th>
                                    <th>Imie</th>
                                    <th>Numer telefonu</th>
                                    <th>Adres</th>
                                    <th>Miasto</th>
                                    <th>Kod pocztowy</th>
                                    <th>Nip</th>
                                    <th>Marka</th>
                                    <th>Model</th>
                                    <th>Rok</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($ticketData as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['idBilet'] . "</td>";
                                    echo "<td>" . $row['numerBiletu'] . "</td>";
                                    echo "<td>" . $row['dataOtrzymania'] . "</td>";
                                    echo "<td>" . $row['komentarz'] . "</td>";
                                    echo "<td>" . $row['dataZwrotu'] . "</td>";
                                    echo "<td>" . $row['nazwiskoK'] . "</td>";
                                    echo "<td>" . $row['imieK'] . "</td>";
                                    echo " <td>" . $row['numerTelefonu'] . "</td>";
                                    echo " <td>" . $row['adres'] . "</td>";
                                    echo " <td>" . $row['miasto'] . "</td>";
                                    echo " <td>" . $row['kodPocztowy'] . "</td>";
                                    echo " <td>" . $row['nip'] . "</td>";
                                    echo " <td>" . $row['marka'] . "</td>";
                                    echo " <td>" . $row['model'] . "</td>";
                                    echo " <td>" . $row['rok'] . "</td>";
                                    echo "</tr>";


                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal"
                    style="margin-bottom: 2px" data-target="#myModal4">
                Części
            </button>

            <div id="myModal4" class="modal fade" role="dialog">
                <div class="modal-dialog" >

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Części</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Numer</th>
                                    <th>Opis</th>
                                    <th>Cena zakupu</th>
                                    <th>Cena detaliczna</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($partsData as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['idCzesci'] . "</td>";
                                    echo "<td>" . $row['numerCzesci'] . "</td>";
                                    echo "<td>" . $row['opis'] . "</td>";
                                    echo "<td>" . $row['cenaZakupu'] . "</td>";
                                    echo "<td>" . $row['cenaDetaliczna'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>

            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal"
                    style="margin-bottom: 2px" data-target="#myModal5">
                Mechanicy
            </button>

            <div id="myModal5" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Mechanicy</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal"
                    style="margin-bottom: 2px" data-target="#myModal6">
                Pokaż naprawy
            </button>

            <div id="myModal6" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Mechanicy</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>


            <button type="button" class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#myModal2">
                Usuń
                bilet
            </button>

            <div id="myModal4" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń auto</h4>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>


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
                                <strong>Błąd! </strong>" . $error['error'] . "</div>";
            }

            ?>
            <div class="container" style="width:50%; padding-top: 20px">
                <h2>Naprawa</h2>
                <form method="post" action="<?php echo site_url('repair/addRepair'); ?>">
                    <div class="form-group">
                        <label>Id biletu:</label>
                        <input class="form-control" id="ticketID" placeholder="Wprowadź id biletu"
                               name="ticketID" required>
                    </div>
                    <div class="form-group">
                        <label>ID części:</label>
                        <input class="form-control" id="partID" placeholder="Wprowadź id części"
                               name="partID" pattern="\d*" required>
                    </div>
                    <div class="form-group">
                        <label>Ilość: </label>
                        <input class="form-control" id="number" placeholder="Wprowadź ilość użytych"
                               name="number" pattern="\d*" required>
                    </div>
                    <div class="form-group">
                        <label>Kwota </label>
                        <input class="form-control" id="cost" placeholder="Wprowadź koszt"
                               name="cost" required>
                    </div>
                    <div class="form-group">
                        <label>Data zwrotu</label>
                        <div class="input-group date" >
                            <input type="date" id="date" name="date" class="form-control" placeholder="Wybierz date"
                                   required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </form>
            </div>

        </div>


    </div>
</div>
</div>
</body>
</html>