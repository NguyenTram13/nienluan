<?php
class SliderModel extends DB
{
    function getSlider($kyw)
    {
        if ($kyw != "") {
            $sql = "SELECT * FROM slider WHERE name like '%" . $kyw . "%' order by id desc";
        } else {

            $sql = "SELECT * FROM slider order by id desc";
        }
        return $this->pdo_query($sql);
    }
    function getone_Slider($id)
    {
        $sql = "SELECT * FROM slider where id='$id'";
        return $this->pdo_query_one($sql);
    }
    function addSlider($caption, $img, $title, $date)
    {
        $sql = "INSERT INTO slider(caption, img, title, created_at) values('$caption',' $img', '$title', '$date')";
        if ($this->pdo_execute($sql)) {
            return true;
        }
        return false;
    }
    function editSlider($id, $name, $date)
    {
        $sql = "UPDATE slider SET name='$name', updated_at='$date' Where id='$id' ";

        return $this->pdo_execute($sql);
    }
    function deleteSlider($id)
    {
        $sql = "DELETE FROM slider WHERE id='$id'";
        return  $this->pdo_execute($sql);
    }
}
