<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid text-white bg-white text-muted p-4">
    <div class="row">
        <div class="col p-4">
            <h1>Contact Us</h1>
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="FullName">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputWebsite" class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-10">
                        <input type="website" class="form-control" id="inputWebsite" placeholder="URL">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMessage" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
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