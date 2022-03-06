<?= $this->extend("admin/layouts/app") ?>
<?php use App\Libraries\jdf; ?>

<?= $this->section("body") ?>
        <div class="mb-3 border-bottom">
        <h1 class="h3">فرمت فایل های مجاز</h1>
        </div>
    <div class="row">
        <div class="col-md-5">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">فرمت فایل های قابل آپلود </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <p class="form-text">مثال: jpg,jpeg,png,mp4,</p>
            </div>
            <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>