<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Staff(s) (<?php echo sizeof($staff) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Ajouter nouveau etudiant</a></h2>
            <div style="padding-top:30px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-hover example">
                                        <thead class="text-center">
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Parent</th>
                                                <th>E-mail</th>
                                                <th>Téléphone</th>
                                                <th>Annee scolaire</th>
                                                <th>Naissance</th>
                                                <th>Experiance</th>
                                                <th>Payement</th>
                                                <th>Informations</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($staff as $st) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $st['nom']; ?></td>
                                                    <td><?php echo $st['nom_parent']; ?></td>
                                                    <td><?php echo $st['email']; ?></td>
                                                    <td><?php echo $st['telephone']; ?></td>
                                                    <td><?php echo $st['annee_scolaire']; ?></td>
                                                    <td><?php echo $st['date_naiss']; ?></td>
                                                    <td><?php echo $st['experience']; ?></td>
                                                    <td><?php echo $st['payement']; ?></td>
                                                    <td><?php echo $st['information']; ?></td>
                                                    <td><input type="checkbox" <?php if ($st['status'] == 1) {
                                                                                    echo "checked";
                                                                                } ?> name="status" id=""></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/staff/edit_staff/' . $st['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="<?php echo base_url() . 'index.php/staff/delete_staff/' . $st['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>
                                        </tbody>




                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </div>

</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter Staff</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/staff/staff' ?>" id="add_staff" method="post">
                    <div class="form-group">
                        <label for="">Entrer nom staff</label>
                        <input type="text" class="form-control" required name="nom" id="nom" placeholder="Enter nom etudiant">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer nom Parent</label>
                        <input type="text" class="form-control" required name="nom_parent" id="nom_parent" placeholder="Enter nom Parent">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer E-mail</label>
                        <input type="email" class="form-control" required name="email" id="email" placeholder="Enter nom Parent">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer téléphone</label>
                        <input type="text" class="form-control" required name="telephone" id="telephone" placeholder="Enter nom Parent">
                    </div>

                    <div class="form-group">
                        <label for="">Annee scolaire</label>
                        <input type="date" class="form-control" required name="annee_scolaire" id="annee_scolaire" placeholder="Enter date de naissance">
                    </div>
                    <div class="form-group">
                        <label for="">Date de naissence</label>
                        <input type="date" class="form-control" required name="date_naiss" id="date_naiss" placeholder="Enter date de naissance">
                    </div>
                    <div class="form-group">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" required name="experience" id="experience" placeholder="Enter date de naissance">
                    </div>
                    <div class="form-group">
                        <label for="">Payement</label>
                        <input type="text" class="form-control" required name="payement" id="payement" placeholder="Enter date de naissance">
                    </div>
                    <div class="form-group">
                        <label for="">Information</label>
                        <textarea name="information" id="information" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>