<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2 class="text-center">Edit Categorie</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <form action="<?php echo base_url() . 'index.php/ecole/edit_cat/' . $cat_info[0]['id'] ?>" id="edit_sub_cat" method="post">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Nom categorie</label>
                            <input type="text" style="width: 615px;" name="nom" id="nom" value="<?php echo $cat_info[0]['nom']; ?>" placeholder="Nom categorie" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Modifier" class="btn btn-info" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>