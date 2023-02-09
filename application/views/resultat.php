<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Resultats() <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Ajout nouvel resultat</a></h2>
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
                                                <th>Etudiant</th>
                                                <th>Examen</th>
                                                <th>Resultat</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($resultat as $result) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $result['etunom'] ?></td>
                                                    <td><?php echo $result['nom_examen'] ?></td>
                                                    <td><?php echo $result['resultat'] ?></td>
                                                    <td><?php echo $result['created_at'] ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/resultat/edit_resultat/' . $result['id']; ?> " class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="<?php echo base_url() . 'index.php/resultat/delete_resultat/' . $result['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>
                                        </tbody>



                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
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
                <h4 class="modal-title">Ajouter nouvel resultat</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/resultat/' ?>" id="add_resultat_form" method="post">
                    <div class="form-group">
                        <label for="">Entrer etudiant</label>
                        <select required name="etudiant" id="select_etudiant" class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($all_etudiant as $etudiant) {
                            ?>
                                <option id="st_<?php echo $etudiant['id'] ?>" data-val="<?php echo $etudiant['classe'] ?>" 
                                value="<?php echo $etudiant['id']; ?>">
                                <?php echo $etudiant['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Examen</label>
                        <select required name="examen" id="examen" class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Resultat</label>
                        <input type="text" name="resultat" id="resultat" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>