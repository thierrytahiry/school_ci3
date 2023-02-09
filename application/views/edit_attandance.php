<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Liste Attandance </h2>
            <div style="padding-top:30px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <form action="<?php echo base_url() . 'index.php/attandance/edit_attandance/' . $this->uri->segment(5); ?>" id="edit_attandance_form" method="post">
                                    <!-- <div class="form-group">
                                        <label>Select categorie</label>
                                        <select name="id" id="etudiant_id" class="form-control">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($etudiants as $etu) {
                                            ?>
                                                <option value="<?php echo $etu['id']; ?>"><?php echo $etu['nom']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <input type="hidden" name="etudiant_id" id="etudiant_id" value="<?php echo $attandance[0]['id'] ?>">
                                        <label for="">Entrer Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option <?php if ($attandance[0]['status'] == 'Present') {
                                                        echo "selected";
                                                    } ?>>Present</option>
                                            <option <?php if ($attandance[0]['status'] == 'Absent') {
                                                        echo "selected";
                                                    } ?>>Absent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select date</label>
                                        <input type="date" name="date" value="<?php echo $attandance[0]['date'] ?>" id="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Entrer Remarks</label>
                                        <textarea name="remarks" id="remarks" class="form-control"><?php echo $attandance[0]['remarks'] ?></textarea>
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