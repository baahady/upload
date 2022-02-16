<?= $this->extend("admin/layouts/app") ?>

<?= $this->section("body") ?>
    <div class="row">
        <div class="col">
            Hello, <?= session()->get('name') ?>
        </div>
    </div>
<?= $this->endSection() ?>