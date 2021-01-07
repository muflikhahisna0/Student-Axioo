<?= $this->extend('layout/student_layout'); ?>

<?= $this->section('content'); ?>
<div class="col container-fluid">
    <h3>Student</h3>
    <hr>
    <form action="/student/save" method="post">
        <?= csrf_field(); ?>
        <div class="card">
            <h5 class="card-header">Create</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" placeholder="Masukkan name film" name="name" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="school">school</label>
                            <input type="text" class="form-control <?= ($validation->hasError('school')) ? 'is-invalid' : ''; ?>" id="school" placeholder="Masukkan nama school" name="school">
                            <div class="invalid-feedback">
                                <?= $validation->getError('school'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" placeholder="Masukkan email film" name="email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" id="phone" placeholder="Masukkan phone film" name="phone">
                            <div class="invalid-feedback">
                                <?= $validation->getError('phone'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="grade">grade</label>
                            <input type="text" class="form-control <?= ($validation->hasError('grade')) ? 'is-invalid' : ''; ?>" id="grade" placeholder="Masukkan grade film" name="grade">
                            <div class="invalid-feedback">
                                <?= $validation->getError('grade'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department">department</label>
                            <input type="text" class="form-control <?= ($validation->hasError('department')) ? 'is-invalid' : ''; ?>" id="department" placeholder="Masukkan department film" name="department">
                            <div class="invalid-feedback">
                                <?= $validation->getError('department'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/student" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>

</div>
<?= $this->endSection(); ?>