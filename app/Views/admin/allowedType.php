<?= $this->extend("admin/layouts/app") ?>
<?php use App\Libraries\jdf; ?>

<?= $this->section("body") ?>
        <div class="mb-3 border-bottom">
        <h1 class="h3">فرمت فایل های مجاز</h1>
        </div>
    <div class="row">
        <div class="col-md-5">

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                
            <form action="<?php echo base_url(); ?>/allowedType" method="post"> 
            <div class="form-group">
                <label for="exampleInputEmail1">فرمت فایل های قابل آپلود </label>
                <textarea type="text" name="allowedTypes" class="form-control"><?php echo $types['allowedTypes']; ?></textarea>
                <p class="form-text">مثال: jpg,jpeg,png,mp4 - (با کاما «,» از هم جدا کنید)</p>
            </div>
            <button type="submit" class="btn btn-primary">ویرایش</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>