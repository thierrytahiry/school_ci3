<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2>Categorie (<?php echo sizeof($all_categorie) ?>) <a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add new Categorie</a></h2>
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
                                        $i=1;
                                            foreach($all_categorie as $cat)
                                            {
                                        ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $cat['nom']; ?></td>
                                                <td><input type="checkbox" <?php if($cat['status']==1) {echo "checked";} ?> name="status" id=""></td>
                                                <td>
                                                    <a href="<?php echo base_url() . 'index.php/ecole/edit_cat/'.$cat['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="<?php echo base_url() . 'index.php/ecole/delete_cat/' . $cat['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                <h4 class="modal-title">Ajouter categorie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/ecole/categorie' ?>" id="add_cat" method="post">
                    <div class="form-group">
                        <label for="">Entrer Categorie</label>
                        <input type="text" class="form-control" required name="nom" id="nom" placeholder="Enter nom categorie">
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