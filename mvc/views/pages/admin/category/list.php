<a href=""></a>
<div class="container pt-3">
    <p class="d-block text-end">
        <a href="<?php echo _WEB_ROOT.'/category/add'?>" class="btn btn-primary">Add</a>
    </p>
    <table class="table table-hover w-100">
        <thead>
        <tr >
            <td>#</td>
            <td>Name</td>
            <td>Created</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            <?php
            if(isset($data['cates']) && !empty($data['cates'])){
                foreach($data['cates'] as $item){
                ?>

                <tr>
                    <td><?php echo $item['id']?></td>
                    <td><?php echo $item['name']?></td>
                    <td><?php echo $item['created_at']?></td>
                    <td><a href="<?php echo _WEB_ROOT.'/category/edit/'.$item['id']?>" class='text-warning d-inline-block fs-3'><i class="fa-solid fa-pen-to-square"></i></a></td>

                    <td><a href="<?php echo _WEB_ROOT.'/category/delete/'.$item['id']?>" class='text-danger d-inline-block fs-3'><i class="fa-solid fa-trash-can"></i></a></td>

                </tr>
            <?php
                }
            }else{
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