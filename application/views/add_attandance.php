<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>All Attandance <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Attandance</a></h2>
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
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <?php
                                            $i = 1;
                                            foreach ($all_attandance as $att) {
                                            
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $att['date']; ?></td>
                                                    <td><?php echo $att['status']; ?></td>
                                                    <td><?php echo $att['remarks']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url().'index.php/attandance/edit_attandance/'. $att['id']; ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
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
