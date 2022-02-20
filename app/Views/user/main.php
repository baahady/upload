<?= $this->extend("user/layouts/app") ?>

<?= $this->section("body") ?>
    <div class="row">
        <div class="col">
            Hello, <?= session()->get('name') ?>
            <?php foreach($files as $val){
                echo $val['name'];
            } ?>
        </div>
    </div>
<?= $this->endSection() ?>