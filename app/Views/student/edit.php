<?= $this->extend('layout/student_layout'); ?>

<?= $this->section('content'); ?>
<div class="col container-fluid">
    <h3>Student</h3>
    <hr>
    <form action="/student/update/<?= $student['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $student['slug']; ?>">
        <div class="card">
            <div class="card-header">
                <h5>Edit</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" value="<?= $student['name']; ?>" placeholder="Masukkan name student" name="name" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="school">school</label>
                            <input type="text" class="form-control <?= ($validation->hasError('school')) ? 'is-invalid' : ''; ?>" id="school" value="<?= $student['school']; ?>" placeholder="Masukkan nama school" name="school">
                            <div class="invalid-feedback">
                                <?= $validation->getError('school'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" value="<?= $student['email']; ?>" placeholder="Masukkan email student" name="email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control <?= ($validation->hasError('phone')) ? 'is-invalid' : ''; ?>" id="phone" value="<?= $student['phone']; ?>" placeholder="Masukkan phone student" name="phone">
                            <div class="invalid-feedback">
                                <?= $validation->getError('phone'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="grade">grade</label>
                            <input type="text" class="form-control <?= ($validation->hasError('grade')) ? 'is-invalid' : ''; ?>" id="grade" value="<?= $student['grade']; ?>" placeholder="Masukkan grade student" name="grade">
                            <div class="invalid-feedback">
                                <?= $validation->getError('grade'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department">grade</label>
                            <input type="text" class="form-control <?= ($validation->hasError('department')) ? 'is-invalid' : ''; ?>" id="department" value="<?= $student['department']; ?>" placeholder="Masukkan grade student" name="department">
                            <div class="invalid-feedback">
                                <?= $validation->getError('department'); ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/student" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>