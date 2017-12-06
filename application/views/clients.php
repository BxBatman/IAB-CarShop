<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav">
            <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal"
                    data-target="#clientModal">Dodaj klienta
            </button>

            <div id="clientModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Dodaj klienta</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('clients/addClient'); ?>">
                                <div class="form-group">
                                    <label>Podaj nazwisko:</label>
                                    <input class="form-control" type="text"   pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+" id="surname" placeholder="Wprowadź nazwisko"
                                           name="surname" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj imie:</label>
                                    <input class="form-control" type="text" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]+" id="name" placeholder="Wprowadź imie"
                                           name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj numer telefonu:</label>
                                    <input class="form-control" pattern="\d*" maxlength="9" id="phoneNumber" placeholder="Wprowadź nr telefonu"
                                           name="phoneNumber" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj adres:</label>
                                    <input class="form-control" id="address" placeholder="Wprowadź adres"
                                           name="address" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj miasto:</label>
                                    <input class="form-control" type="text" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+" id="city" placeholder="Wprowadź miasto"
                                           name="city" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj kod pocztowy:</label>
                                    <input class="form-control" pattern="\d{2}-\d{3}" id="postcode" placeholder="Wprowadź kod pocztowy"
                                           name="postcode" required>
                                </div>
                                <div class="form-group">
                                    <label>Podaj NIP:</label>
                                    <input class="form-control" id="nip" placeholder="Wprowadź NIP"
                                           name="nip" pattern="\d*" maxlength="10" required>
                                </div>
                                <button type="submit" class="btn btn-default">Dodaj</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" class="btn btn-danger btn-sm btn-block" style="margin-top:2px" data-toggle="modal"
                    data-target="#removeClient">Usuń
                klienta
            </button>

            <div id="removeClient" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń auto</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('clients/removeClient'); ?>">
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
                                <strong>Błąd! </strong>" . $error['error'] . "</div>";
            }

            ?>
            <div class="container">
            <h2>Klienci</h2>
            <table class="table">
                <thead style="background: rgb(222,239,255); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(222,239,255,1) 0%, rgba(152,190,222,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#deefff', endColorstr='#98bede',GradientType=0 );">
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

        </div>


    </div>
</div>
</div>
</body>
</html>