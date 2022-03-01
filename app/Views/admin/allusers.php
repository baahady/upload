<?= $this->extend("admin/layouts/app") ?>
<?php use App\Libraries\jdf; ?>

<?= $this->section("body") ?>
<div class="row">
        <div class="col">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">ایمیل</th>
                <th scope="col">تاریخ ثبت نام</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $id = 1;
            $this->jdf = new jdf();
            ?>
            <?php foreach($users as $user){ ?>
                <tr>
                <th scope="row">1</th>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $this->jdf->jdate("تاریخ:Y/m/d زمان:H:i:s", strtotime($user['created_at'])); ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>