<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-1 sidenav"  >
            <button type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#carModal" style="margin-bottom: 2px;">Dodaj część
            </button>

            <div id="carModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Dodaj część</h4>
                        </div>




                        <div class="modal-body">
                            <form name="carForm" method="post" action="<?php echo site_url('parts/addPart'); ?>">
                                <div class="form-group">
                                    <label>Numer części</label>
                                    <input class="form-control"  id="partNumber" placeholder="Wprowadź numer części"
                                           name="partNumber" required>
                                </div>
                                <div class="form-group">
                                    <label>Krótki opis</label>
                                    <input class="form-control" pattern="[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+" id="description" placeholder="Wprowadź opis"
                                           name="description" required>
                                </div>
                                <div class="form-group">
                                    <label>Cena zakupu</label>
                                    <input class="form-control"  id="hurtPrice" placeholder="Wprowadź cene"
                                           name="hurtPrice" required>
                                </div>
                                <div class="form-group">
                                    <label>Cena detaliczna</label>
                                    <input class="form-control" id="fullPrice" placeholder="Wprowadź cene"
                                           name="fullPrice" required>
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
                część
            </button>

            <div id="myModal2" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Usuń część</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo site_url('parts/removePart'); ?>" >
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
                <h2>Części</h2>
                <table class="table table-striped">
                    <thead style="background: rgb(222,239,255); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(222,239,255,1) 0%, rgba(152,190,222,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(222,239,255,1) 0%,rgba(152,190,222,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#deefff', endColorstr='#98bede',GradientType=0 );">
                    <tr>
                        <th>Id</th>
                        <th>Numer Części</th>
                        <th>Opis</th>
                        <th>Cena Zakupu</th>
                        <th>Cena Detaliczna</th>
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

        </div>


    </div>
</div>
</div>
</body>
</html>
