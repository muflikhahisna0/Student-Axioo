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
                <h5>Detil</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" value="<?= $student['name']; ?>" placeholder="Masukkan name student" readonly name="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="school">school</label>
                            <input type="text" class="form-control " id="school" value="<?= $student['school']; ?>" placeholder="Masukkan nama school" readonly name="school">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control " id="email" value="<?= $student['email']; ?>" placeholder="Masukkan email student" readonly name="email">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" id="phone" value="<?= $student['phone']; ?>" placeholder="Masukkan phone student" readonly name="phone">
                        </div>
                        <div class="form-group">
                            <label for="grade">grade</label>
                            <input type="text" class="form-control " id="grade" value="<?= $student['grade']; ?>" placeholder="Masukkan grade student" readonly name="grade">

                        </div>
                        <div class="form-group">
                            <label for="department">grade</label>
                            <input type="text" class="form-control " id="department" value="<?= $student['department']; ?>" placeholder="Masukkan grade student" readonly name="department">

                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer text-center">
                <a href="/student" class="btn btn-danger">Back</a>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>