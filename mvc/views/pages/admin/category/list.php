<a href=""></a>
<div class="container pt-3">
    <?php
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <p class="d-block text-end ">
        <a href="<?php echo _WEB_ROOT . '/category/add' ?>" class="px-5 btn btn-primary">Add</a>
    </p>
    <form method="POST" action="">
        <div class="d-flex gap-2 mb-3">

            <input type="text" name="kyw" class="form-control " placeholder="Search...">
            <button type="submit" class="btn btn-primary px-4">Search</button>
        </div>
    </form>
    <table class="table table-hover w-100">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Created</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['cates']) && !empty($data['cates'])) {
                foreach ($data['cates'] as $item) {
            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td><?php echo $item['updated_at'] ?></td>
                        <td><a href="<?php echo _WEB_ROOT . '/category/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/category/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5" class="text-danger text-center">Không có dữ liệu</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>