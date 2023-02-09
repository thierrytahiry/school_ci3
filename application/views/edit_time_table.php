<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Edition Time Table</h2>
            <div style="padding-top:30px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <form action="<?php echo base_url() . 'index.php/examen/edit_time_table/'. $time_table[0]['id'] ?>" id="edit_time_table_form" method="post">
                                    <div class="form-group">
                                        <label for="">Select Examen</label>
                                        <select name="examen_id" id="select_examen" required class="form-control">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($exams as $exa) {
                                            ?>
                                                <option <?php if($time_table[0]['examen_id']==$exa['titre']) {echo "selected"; } ?>><?php echo $exa['titre'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File</label>
                                        <input type="file" name="file" id="file"  class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Modifier</button>
                                    </div>
                                </form>

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