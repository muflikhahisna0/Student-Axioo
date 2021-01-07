<?= $this->extend('layout/student_layout'); ?>

<?= $this->section('content'); ?>
<div class="col container-fluid">
    <div class="row justify-content-between container-fluid pt-4">
        <h3>Student</h3>
        <hr>
        <div class="btn-group btn-group-toggle">
            <a href="/student/create" class="btn btn-success inline">Add</a>
            <form action="<?= base_url('Student/excel') ?>" method="POST">
                <button type="submit" class="btn btn-success">Excel</button>
            </form>
            <a href="<?php echo base_url('Student/pdf') ?>" class="btn btn-primary">
                PDF
            </a>
        </div>
    </div>
    <hr>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">School</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Deparmetn</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (2 * ($currentPage - 1)); ?>
                    <?php foreach ($student as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['name']; ?></td>
                            <td><?= $k['school']; ?></td>
                            <td><?= $k['grade']; ?></td>
                            <td><?= $k['department']; ?></td>
                            <td><a href="/student/<?= $k['slug']; ?>" class="btn btn-success d-inline">Detail</a>
                                <a href="/student/edit/<?= $k['slug']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/student/<?= $k['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field();; ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Data akan dihapus');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?= $pager->links('student', 'student_pagination'); ?>
</div>
<?= $this->endSection(); ?>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script>
    $('.pdf').on("click", function() {
        window.location = "<?= base_url("Student/pdf"); ?>";
    });
</script>