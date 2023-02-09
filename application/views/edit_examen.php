<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Edit Examens</h2>
            <div style="padding-top:30px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <form action="<?php echo base_url() . 'index.php/examen/edit_examen/'. $exam['id'] ?>" id="edit_examen_form" method="post">
                                    <div class="form-group">
                                        <label for="">Entrer titre</label>
                                        <input type="text" class="form-control" value="<?php echo $exam['titre'] ?>" required name="titre" id="titre" placeholder="Enter titre">
                                    </div>
                                    <div class="form-group">
                                        <label>Date examen</label>
                                        <input type="date" name="date_examen" id="date_examen" value="<?php echo $exam['date_examen'] ?>" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Select categorie</label>
                                        <select name="categorie" id="examen_categorie" class="form-control">
                                            <option value="">Select</option>
                                            <?php
                                            foreach ($categorie as $cat) {
                                            ?>
                                                <option <?php if($exam['categorie']==$cat['nom']) { echo "selected"; } ?> ><?php echo $cat['nom']; ?></option>
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
                                            foreach ($classes as $class) {
                                            ?>
                                                <option <?php if($exam['classe']==$class['nom']) { echo "selected"; } ?> ><?php echo $class['nom']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Ajouter</button>
                                    </div>
                                </form>
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