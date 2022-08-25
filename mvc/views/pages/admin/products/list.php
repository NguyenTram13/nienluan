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
    <form method="POST" action="" class="form-product">
        <div class="row">
            <div class=" col-2">
                <select class="form-select select-product" name="cate" aria-label="Default select example">
                    <option value="0" <?php echo 0 === $data['idCateSelected'] ? "selected" : "" ?>>Chọn danh mục </option>
                    <?php
                    foreach ($data['Cates'] as $item) {
                        $selected =   $item['id'] == $data['idCateSelected'] ? "selected" : "";
                        echo '<option ' . $selected . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
                    }

                    ?>


                </select>

            </div>
            <div class=" d-flex gap-2 mb-3 col-10">

                <input type="text" name="kyw" class="product-input form-control " placeholder="Search...">
                <button type="submit" class="btn btn-primary px-4">Search</button>
            </div>
        </div>
    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader"></div>
    </div>
    <table class="table table-hover w-100 table-products">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Img</td>
                <td>Price</td>
                <td width='25%'>Describes</td>
                <td>Views</td>
                <td>Created</td>
                <!-- <td>Cate</td> -->

                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['pros']) && !empty($data['pros'])) {
                foreach ($data['pros'] as $item) {
                    $hinhpath = _PATH_UPLOAD_PRODUCT . $item['img'];

            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo  '<img height="80" src="' . $hinhpath . '"/> ' ?></td>
                        <td><?php echo $item['price'] ?></td>
                        <td><?php echo $item['describes'] ?></td>
                        <td><?php echo $item['views'] ?></td>

                        <td><?php echo $item['created_at'] ?></td>
                        <!-- <td><?php echo $item['Cates']['name'] ?></td> -->
                        <td><a href="<?php echo _WEB_ROOT . '/products/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/products/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="10" class="text-danger text-center">Không có dữ liệu</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>