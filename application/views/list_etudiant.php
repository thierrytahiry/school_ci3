<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Liste etudiant dans la classe</h2>
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
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($list_etudiant as $etudiant) {
                                                $all_count =sizeof($this->CM->select_data('attandance_manage', 'status', array('etudiant_id' => $etudiant['id'])));
                                                $all_countp =sizeof($this->CM->select_data('attandance_manage', 'status', array('etudiant_id' => $etudiant['id'], 'status' => 'Present')));
                                            ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $etudiant['nom']; ?></td>
                                                    <td><?php echo $all_count* $all_countp/100; ?>%</td>
                                                    <td><a href="<?php echo base_url() . 'index.php/attandance/add_attandance/' . $etudiant['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
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
                <h4 class="modal-title">Ajouter nouvelle ccoure</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/ecole/course' ?>" id="add_coure" method="post">
                    <div class="form-group">
                        <label for="">Entrer nom coure</label>
                        <input type="text" class="form-control" required name="nom" id="nom" placeholder="Enter nom coure">
                    </div>
                    <div class="form-group">
                        <label>Entrer course duration</label>
                        <input type="text" name="course_duration" id="course_duration" required placeholder="Entrer course duration" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Entrer course Fees</label>
                        <input type="text" name="course_fees" id="course_fees" required placeholder="Entrer course fees" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Entrer course Stared</label>
                        <input type="text" name="course_stared" id="course_stared" required placeholder="Entrer course stared" class="form-control">
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