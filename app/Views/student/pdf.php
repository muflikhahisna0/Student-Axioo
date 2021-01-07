<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="col container-fluid">
        <div class="row justify-content-between container-fluid pt-4">
            <h3>Student</h3>
            <hr>
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
                            <th colspan="2">
                                <h5>Logo</h5>
                            </th>
                            <th colspan="4">
                                <h5>Daftar Siswa</h5>
                            </th>
                        </tr>
                        <tr class=" table-bordered">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">School</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Deparmetn</th>
                        </tr>
                    </thead>
                    <tbody class=" table-bordered">
                        <?php $i = 1; ?>
                        <?php foreach ($student as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $k['name']; ?></td>
                                <td><?= $k['school']; ?></td>
                                <td><?= $k['grade']; ?></td>
                                <td><?= $k['department']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>