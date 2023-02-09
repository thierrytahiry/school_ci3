<div class="content-wrapper">
    <div class="page_container">
        <div class="navbar-white navbar-light box">
            <h2 class="text-center">Edit Coures</h2>
            <div class="row">
                <div class="col-sm-3"></div>
                <form action="<?php echo base_url() . 'index.php/ecole/edit_coure/' . $course[0]['id'] ?>" id="edit_course" method="post">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Nom coures</label>
                            <input type="text" style="width: 615px;" name="nom" id="nom" value="<?php echo $course[0]['nom']; ?>" placeholder="Nom coures" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Entrer course duration</label>
                            <input type="text" name="course_duration" id="course_duration" value="<?php echo $course[0]['duration']; ?>" required placeholder="Entrer course duration" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Entrer course Fees</label>
                            <input type="text" name="course_fees" id="course_fees" value="<?php echo $course[0]['fees']; ?>" required placeholder="Entrer course fees" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Entrer course Stared</label>
                            <input type="text" name="course_stared" id="course_stared" value="<?php echo $course[0]['stared']; ?>" required placeholder="Entrer course stared" class="form-control">
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