<?= $this->extend("user/layouts/app") ?>
<?php use App\Libraries\jdf; ?>

<?= $this->section("body") ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">فایل</th>
                    <th scope="col">فرمت</th>
                    <th scope="col">تاریخ آپلود</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                 $id=1; 
                 $this->jdf = new jdf(); 
                 ?>
              <?php foreach($files as $val){
                ?>
                  <tr>
                    <th scope="row"><?php echo $id ?></th>
                    <td><img src="/uploads/<?php echo $val['name']; ?>" class="uploaded-image"></td>
                    <td><?php echo $val['type']; ?></td>
                    <td><?php echo $this->jdf->jdate("تاریخ:Y/m/d زمان:H:i:s", strtotime($val['created_at'])); ?></td>
                    <?php $id++;?>
                  </tr>
              <?php
            } ?>
                </tbody>
              </table>
        </div>
    </div>
<?= $this->endSection() ?>