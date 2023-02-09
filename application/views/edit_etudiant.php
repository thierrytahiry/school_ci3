<head>
    <link rel="stylesheet" href="<?php echo base_url() . 'tools/css/style.css' ?>">
</head>
<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light">
            <h2 class="text-center">Edit Etudiant</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <form action="<?php echo base_url() . 'index.php/etudiant/edit_etudiant/'. $etudiant_data['id']?>" id="edit_etudiant" method="post" style="width: 600px;">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Entrer nom etudiant</label>
                            <input type="text" class="form-control" required name="nom" id="nom" value="<?php echo $etudiant_data['nom'] ?>" placeholder="Enter nom etudiant">
                        </div>
                        <div class="form-group">
                            <label for="">Entrer nom Parent</label>
                            <input type="text" class="form-control" required name="nom_parent" id="nom_parent" value="<?php echo $etudiant_data['nom_parent'] ?>" placeholder="Enter nom Parent">
                        </div>
                        <div class="form-group">
                            <label>Select categorie</label>
                            <select name="categorie" id="categorie" class="form-control">
                                <option value="">Select</option>
                                <?php
                                foreach ($categorie as $cat) {
                                ?>

                                    <option <?php if($etudiant_data['categorie']==$cat['nom']) { echo "selected"; } ?>><?php echo $cat['nom']; ?></option>
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
                                foreach ($classes as $cl) {
                                ?>

                                    <option <?php if($etudiant_data['classe']==$cl['nom']) { echo "selected"; } ?>><?php echo $cl['nom']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Annee scolaire</label>
                            <input type="date" class="form-control" required name="annee_scolaire" id="annee_scolaire" value="<?php echo $etudiant_data['annee_scolaire'] ?>" placeholder="Enter date de naissance">
                        </div>
                        <div class="form-group">
                            <label for="">Date de naissence</label>
                            <input type="date" class="form-control" required name="date_naiss" id="date_naiss" value="<?php echo $etudiant_data['date_naiss'] ?>" placeholder="Enter date de naissance">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>