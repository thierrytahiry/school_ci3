<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Examens(<?php echo sizeof($all_examen); ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Ajout nouvelle examen</a></h2>
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
                                                <th>Nom Examen</th>
                                                <th>Date examen</th>
                                                <th>Categorie</th>
                                                <th>Classe</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($all_examen as $exam) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $exam['titre'] ?></td>
                                                    <td><?php echo $exam['date_examen'] ?></td>
                                                    <td><?php echo $exam['categorie'] ?></td>
                                                    <td><?php echo $exam['classe'] ?></td>
                                                    <td><a href="<?php echo base_url().'index.php/examen/edit_examen/'. $exam['id'] ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a></td>
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
                <h4 class="modal-title">Ajouter nouvelle examen</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/examen/add_examen' ?>" id="add_examen_form" method="post">
                    <div class="form-group">
                        <label for="">Entrer titre</label>
                        <input type="text" class="form-control" required name="titre" id="titre" placeholder="Enter titre">
                    </div>
                    <div class="form-group">
                        <label>Date examen</label>
                        <input type="date" name="date_examen" id="date_examen" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Select categorie</label>
                        <select name="categorie" id="examen_categorie" class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($categorie as $cat) {
                            ?>
                                <option value="<?php echo $cat['nom']; ?>"><?php echo $cat['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select classe</label>
                        <select name="class" id="classe" class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>