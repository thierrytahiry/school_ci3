<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2 class="text-center">Edit Classes</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <form action="<?php echo base_url() . 'index.php/ecole/edit_class/' . $classes[0]['id'] ?>" id="edit_classe" method="post">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Nom classe</label>
                            <input type="text" style="width: 615px;" name="nom" id="nom" value="<?php echo $classes[0]['nom']; ?>" placeholder="Nom classes" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="">Nom Categorie</label>
                            <select name="cate" id="cat" class="form-control">
                                    <option value="">Select</option>
                                    <?php
                                    foreach($categories as $cl)
                                    {
                                        ?>
                                        <option <?php if($cl['nom'] == $classes[0]['cat']) { echo "selected"; } ?> ><?php echo $cl['nom']; ?></option>
                                        <?php
                                    
                                    }

                                    ?>
                            </select>
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