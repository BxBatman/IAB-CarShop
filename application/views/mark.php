<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav">
            <button type="button" class="btn btn-primary btn-sm btn-block" style="margin-bottom: 2px"
                    data-toggle="modal" data-target="#markModal">Oceny
            </button>

            <div id="markModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Oceny</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nazwisko</th>
                                    <th>Imie</th>
                                    <th>Ocena</th>
                                    <th>Komentarz</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($markData as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['idMechanik'] . "</td>";
                                    echo "<td>" . $row['nazwisko'] . "</td>";
                                    echo "<td>" . $row['imie'] . "</td>";
                                    echo "<td>" . $row['ocena'] . "</td>";
                                    echo "<td>" . $row['komentarz'] . "</td>";
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
            <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#carModal"
                    style="margin-bottom: 2px;">Pokaż bilety
            </button>

            <div id="carModal" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 95%">

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
            <button type="button" class="btn btn-danger btn-sm btn-block" style="margin-bottom: 2px" data-toggle="modal"
                    data-target="#myModal2">Usuń
                ocene
            </button>

            <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń mechanika</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('mark/removeMark'); ?>">
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
            <button type="button" class="btn btn-primary btn-sm btn-block" style="margin-bottom: 2px"
                    data-toggle="modal" data-target="#mechanicModal">Mechanicy
            </button>

            <div id="mechanicModal" class="modal fade" role="dialog">
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
                                foreach ($markData as $row) {

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
                                <strong>Błąd! </strong>" . $error['error'] . "</div>";
            }

            ?>
            <div class="container" style="width:50%; padding-top: 20px">
                <h2>Dodaj ocene</h2>
                <form name="carForm" method="post" action="<?php echo site_url('mark/addMark'); ?>">
                    <div class="form-group">
                        <label>Id mechanika</label>
                        <input class="form-control" pattern="\d*" id="id" placeholder="Wprowadź id mechanika "
                               name="id" required>
                    </div>
                    <div class="form-group">
                        <label>Id biletu</label>
                        <input class="form-control" pattern="\d*" id="ticketID" placeholder="Wprowadź id biletu "
                               name=ticketID required>
                    </div>
                    <div class="form-group">
                        <label>Ocena</label>
                        <input class="form-control" pattern="\d*" id="mark" placeholder="Wprowadź ocene mechanika"
                               name="mark" required>
                    </div>
                    <div class="form-group">
                        <label>Komentarz</label>
                        <input class="form-control" id="comment" placeholder="Wprowadź komentarz"
                               name="comment" required>
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
