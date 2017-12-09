<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav">
            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#carModal"
                    style="margin-bottom: 2px">Tabela aut
            </button>

            <div id="carModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tabela aut</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal"
                    data-target="#clientModal" style="margin-bottom: 2px">Tabela klientów
            </button>

            <div id="clientModal" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 60%">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Tabela klientów</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nazwisko</th>
                                    <th>Imie</th>
                                    <th>Numer telefonu</th>
                                    <th>Adres</th>
                                    <th>Miasto</th>
                                    <th>Kod pocztowy</th>
                                    <th>Nip</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($clientData as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['idKlient'] . "</td>";
                                    echo "<td>" . $row['nazwiskoK'] . "</td>";
                                    echo "<td>" . $row['imieK'] . "</td>";
                                    echo " <td>" . $row['numerTelefonu'] . "</td>";
                                    echo " <td>" . $row['adres'] . "</td>";
                                    echo " <td>" . $row['miasto'] . "</td>";
                                    echo " <td>" . $row['kodPocztowy'] . "</td>";
                                    echo " <td>" . $row['nip'] . "</td>";
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
            <button type="button" class="btn btn-primary btn-sm btn-block" style="margin-bottom: 2px"
                    data-toggle="modal" data-target="#invoiceModal">Pokaż faktury
            </button>

            <div id="invoiceModal" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width:95%">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Faktury</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>IdFaktura</th>
                                    <th>Numer faktury</th>
                                    <th>Data</th>
                                    <th>Numer seryjny</th>
                                    <th>Auto</th>
                                    <th>Kolor</th>
                                    <th>Rok</th>
                                    <th>Klient</th>
                                    <th>Telefon</th>
                                    <th>Adres</th>
                                    <th>Miasto</th>
                                    <th>Kod pocztowy</th>
                                    <th>Sprzedawca</th>
                                    <th>Kwota</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($invoiceData as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row['idFaktura'] . "</td>";
                                    echo "<td>" . $row['numerFaktury'] . "</td>";
                                    echo "<td>" . $row['data'] . "</td>";
                                    echo " <td>" . $row['numerSeryjny'] . "</td>";
                                    echo " <td>" . $row['marka'] . " " . $row['model'] . "</td>";
                                    echo " <td>" . $row['kolor'] . "</td>";
                                    echo " <td>" . $row['rok'] . "</td>";
                                    echo " <td>" . $row['nazwiskoK'] . " " . $row['imieK'] . "</td>";
                                    echo " <td>" . $row['numerTelefonu'] . "</td>";
                                    echo " <td>" . $row['adres'] . "</td>";
                                    echo " <td>" . $row['miasto'] . "</td>";
                                    echo " <td>" . $row['kodPocztowy'] . "</td>";
                                    echo " <td>" . $row['nazwisko'] . " " . $row['imie'] . "</td>";
                                    echo " <td>" . $row['kwota'] . "</td>";

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
            <button type="button" class="btn btn-danger btn-sm btn-block" data-toggle="modal"
                    data-target="#deleteModal">Usuń
                fakture
            </button>

            <div id="deleteModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń fakture</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('invoices/deleteInvoice'); ?>">
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
            <form method="post" action="<?php echo site_url('invoices/generate'); ?>">
                <button type="button" class="btn btn-primary btn-block " style="padding-top: 2px; margin-top: 2px">
                    Wygeneruj
                </button>
            </form>
        </div>
        <div class="col-sm-10 text-center">
            <?php
            if (isset($success)) {
                echo "<div class=\"alert alert-success alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Sukces! </strong>" . $success['success'] . " </div>";

            } else if (isset($error)) {
                echo "<div class=\"alert alert-danger alert-dismissable fade in\">
                                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                <strong>Błąd! </strong>" . $error['error'] . "</div>";
            }

            ?>
            <div class="container" style="width:50%; padding-top: 20px">
                <h2>Stwórz fakture</h2>
                <form method="post" action="<?php echo site_url('invoices/addInvoice'); ?>">
                    <div class="form-group">
                        <label>Numer faktury:</label>
                        <input class="form-control" id="invoiceNumber" placeholder="Wprowadź numer faktury"
                               name="invoiceNumber" required>
                    </div>
                    <div class="form-group">
                        <input type="date" id="date" name="date" class="form-control" placeholder="Wybierz date"
                               required>
                    </div>
                    <div class="form-group">
                        <label>ID auta:</label>
                        <input class="form-control" id="carID" placeholder="Wprowadź id auta"
                               name="carID" pattern="\d*" required>
                    </div>
                    <div class="form-group">
                        <label>ID klienta:</label>
                        <input class="form-control" id="clientID" placeholder="Wprowadź id klienta"
                               name="clientID" pattern="\d*" required>
                    </div>
                    <div class="form-group">
                        <label>ID sprzedawcy:</label>
                        <input class="form-control" id="clientID" placeholder="Wprowadź id sprzedawcy"
                               name="sellerID" pattern="\d*" required>
                    </div>

                    <div class="form-group">
                        <label>Kwota na fakturze </label>
                        <input class="form-control" id="price" placeholder="Wprowadź kwote"
                               name="price" required>
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

