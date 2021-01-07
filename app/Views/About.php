<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid text-white bg-white text-muted p-4">
    <div class="row">
        <div class="col p-4">
            <h1>About Us</h1>
            <p>Axioo Class Program adalah sebuah program pendidikan dalam menyiapkan tenaga terampil yang sesuai dengan kebutuhan industri lewat program sinkronisasi kurikulum, workshop berkelanjutan bagi guru, pembelajaran berbasis IT serta validasi sertifikasi bertaraf internasional.</p>
        </div>
        <div class="col-4 text-right p-4">
            <img src="/img/axioo.jpeg">
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col">
            <p>©2019 Axioo Class Program</p>
        </div>
        <div class="col text-right"><a href="">Back to top</a></div>
    </div>
</div>
<?= $this->endSection(); ?>