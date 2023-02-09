<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ajouter nouvelle Attandance</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'index.php/attandance/add_attandance/' . $this->uri->segment(5); ?>" id="add_attandance_form" method="post">
                    <div class="form-group">
                        <label>Select categorie</label>
                        <select name="id" id="etudiant_id" required class="form-control">
                            <option value="">Select</option>
                            <?php
                            foreach ($etudiants as $etu) {
                            ?>
                                <option value="<?php echo $etu['id']; ?>"><?php echo $etu['nom']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Entrer Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Present">Present</option>
                            <option value="Absent">Absent</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Select date</label>
                        <input type="date" name="date" id="date" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Entrer Remarks</label>
                        <textarea name="remarks" id="remarks" required class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>