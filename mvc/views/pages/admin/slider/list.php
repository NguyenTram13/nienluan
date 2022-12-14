<a href=""></a>
<div class="container pt-3" data-aos="fade-right">
    <?php
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="alert alert-success text-center">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <?php
    if (isset($_SESSION['msg']) && $_SESSION['msg'] != "") {
        echo  '<div class="alert alert-success text-center">' . $_SESSION['msg'] . '</div>';
        unset($_SESSION['msg']);
    }
    ?>
    <p class="d-block text-end ">
        <a href="<?php echo _WEB_ROOT . '/slider/add' ?>" class="px-5 btn btn-primary">Add</a>
    </p>
    <form method="POST" action="" class="form-slider">
        <div class="d-flex gap-2 mb-3">

            <input type="text" name="kyw" class="form-control slider-input" placeholder="Search...">
            <button type="submit" class="btn btn-primary px-4">Search</button>
        </div>
    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader"></div>
    </div>
    <table class="table table-hover w-100 table-slider" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
        <thead>
            <tr>
                <td>#</td>
                <td>Caption</td>
                <td>Img</td>
                <td>Title</td>

                <td>Created</td>
                <td>Updated</td>

                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['slider']) && !empty($data['slider'])) {
                foreach ($data['slider'] as $item) {
                    $hinhpath = _PATH_UPLOAD_SLIDER . trim($item['img']);
            ?>

                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['caption'] ?></td>
                        <td><?php echo '<img height="80" src="' . $hinhpath . '"/>' ?></td>

                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['created_at'] ?></td>
                        <td><?php echo $item['updated_at'] ?></td>
                        <td><a href="<?php echo _WEB_ROOT . '/slider/edit/' . $item['id'] ?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                        <td><a href="<?php echo _WEB_ROOT . '/slider/delete/' . $item['id'] ?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="8" class="text-danger text-center">Kh??ng c?? d??? li???u</td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>
</div>