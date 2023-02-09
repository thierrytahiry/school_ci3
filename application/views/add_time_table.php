<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Time Table() <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Ajouter Time Table</a></h2>
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
                                                <th>File</th>
                                                <th>Createtd At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i=1;
                                            foreach($time_tables as $tt)
                                            {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $tt['examen_id']; ?></td>
                                                        <td><a target="_blank" href="<?php echo base_url().'uploads/time_table/'.$tt['file'] ?>"><i class="fas fa-download"></i></a></td>
                                                        <td><?php echo $tt['created_at']; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url(). 'index.php/examen/edit_time_table/'. $tt['id']; ?> " class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="<?php echo base_url(). 'index.php/examen/delete_time_table/'. $tt['id']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                <h4 class="modal-title">Ajouter nouvelle Time Table</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/examen/add_time_table' ?>" id="add_time_table_form" method="post">
                    <div class="form-group">
                        <label for="">Select Examen</label>
                        <select name="examen_id" id="select_examen" required class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($exams as $exa) {
                            ?>
                                <option value="<?php echo $exa['titre'] ?>"><?php echo $exa['titre'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" id="file" required class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>