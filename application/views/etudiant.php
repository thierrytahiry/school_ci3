<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Etudiant(s) (<?php echo sizeof($etudiants) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Ajouter nouveau etudiant</a></h2>
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
                                                <th>Nom parent</th>
                                                <th>Categorie</th>
                                                <th>Classe</th>
                                                <th>Annee scolaire</th>
                                                <th>Date de naissance</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($etudiants as $etu) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $etu['nom']; ?></td>
                                                    <td><?php echo $etu['nom_parent']; ?></td>
                                                    <td><?php echo $etu['categorie']; ?></td>
                                                    <td><?php echo $etu['classe']; ?></td>
                                                    <td><?php echo $etu['annee_scolaire']; ?></td>
                                                    <td><?php echo $etu['date_naiss']; ?></td>
                                                    <td><input type="checkbox" <?php if ($etu['status'] == 1) {
                                                                                    echo "checked";
                                                                                } ?> name="status" id=""></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/etudiant/edit_etudiant/' . $etu['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="<?php echo base_url() . 'index.php/etudiant/delete_etudiant/' . $etu['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                <h4 class="modal-title">Ajouter Etudiant</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/etudiant/etudiant' ?>" id="add_etudiant" method="post">
                    <div class="form-group">
                        <label for="">Entrer nom etudiant</label>
                        <input type="text" class="form-control" required name="nom" id="nom" placeholder="Enter nom etudiant">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer nom Parent</label>
                        <input type="text" class="form-control" required name="nom_parent" id="nom_parent" placeholder="Enter nom Parent">
                    </div>
                    <div class="form-group">
                        <label>Select categorie</label>
                        <select name="categorie" id="categorie" class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($all_categorie as $cat) {
                            ?>

                                <option><?php echo $cat['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select classe</label>
                        <select name="classe" id="classe" class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($classes as $cl) {
                            ?>

                                <option><?php echo $cl['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
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