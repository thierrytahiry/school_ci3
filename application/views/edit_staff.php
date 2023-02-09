<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2 class="text-center">Edit Staff</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <form action="<?php echo base_url() . 'index.php/staff/edit_staff/'. $staff[0]['id'] ?>" id="edit_staff" method="post" style="width: 560px;">
                    <div class="form-group">
                        <label for="">Entrer nom staff</label>
                        <input type="text" class="form-control" required name="nom" id="nom" placeholder="Enter nom etudiant" value="<?php echo $staff[0]['nom']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer nom Parent</label>
                        <input type="text" class="form-control" required name="nom_parent" id="nom_parent" placeholder="Enter nom Parent" value="<?php echo $staff[0]['nom_parent']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer E-mail</label>
                        <input type="email" class="form-control" required name="email" id="email" placeholder="Enter nom Parent" value="<?php echo $staff[0]['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Entrer téléphone</label>
                        <input type="text" class="form-control" required name="telephone" id="telephone" placeholder="Enter nom Parent" value="<?php echo $staff[0]['telephone']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Annee scolaire</label>
                        <input type="date" class="form-control" required name="annee_scolaire" id="annee_scolaire" placeholder="Enter annee scplaire" value="<?php echo $staff[0]['annee_scolaire']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Date de naissence</label>
                        <input type="date" class="form-control" required name="date_naiss" id="date_naiss" placeholder="Enter date de naissance" value="<?php echo $staff[0]['date_naiss']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" required name="experience" id="experience" placeholder="Enter experiance" value="<?php echo $staff[0]['experience']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Payement</label>
                        <input type="text" class="form-control" required name="payement" id="payement" placeholder="Enter le montant payer" value="<?php echo $staff[0]['payement']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Information</label>
                        <textarea name="information" id="information" class="form-control"> <?php echo $staff[0]['information']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>