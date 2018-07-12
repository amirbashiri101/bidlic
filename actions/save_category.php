<?php
require('../core/config.php');
if (isset($_POST['sub'])){
    if ($_POST['cvid'] == '') {
        if ($_POST['parent'] == '') {
            $_POST['parent'] = NULL;
        }
        if ($_POST['description'] == '') {
            $_POST['description'] = NULL;
        }
        $name = $_FILES['upload']['name'];
        $type = $_FILES['upload']['type'];
        $size = $_FILES['upload']['size'];
        $tmp = $_FILES['upload']['tmp_name'];
        $error = $_FILES['upload']['error'];
        if ($error == 0) {
                $uniq = uniqid();
                $new = md5($uniq);
                $format = substr($type , 6);
                $result_image = $new . "." . $format;
            if (is_uploaded_file($tmp)) {
                $move = move_uploaded_file($tmp, "../uploads/category/".$result_image);
            }

        }
        $cate = $db->insert('category', [
            'name'          => @$_POST['cate_name'],
            'parent_id'     => @$_POST['parent'],
            'description'   => @$_POST['discription'],
            'image'         => $result_image
        ]);
        if ($cate == true) {
            $db->redirect('../index.php?linkOne=category', 'success', 'دسته با موفقیت افزوده شد');

            $db->redirect('../index.php?linkOne=category', 'danger', ' افزدون دسته با خطا مواجه شد  ');

        }
    }elseif ($_POST['cvid'] !== ''){
        if ($_POST['parent'] == '') {
            $_POST['parent'] = NULL;
        }
        if ($_POST['description'] == '') {
            $_POST['description'] = NULL;
        }
        if ($_POST['upload'] !== '') {
            $vselect_image = $db->where('id', $_POST['cvid'])->getOne('category', 'image');
            unlink("../uploads/category/" . $vselect_image['image']);
            $name = $_FILES['upload']['name'];
            $type = $_FILES['upload']['type'];
            $size = $_FILES['upload']['size'];
            $tmp = $_FILES['upload']['tmp_name'];
            $error = $_FILES['upload']['error'];
            if ($error == 0) {
                $uniq = uniqid();
                $new = md5($uniq);
                $format = substr($type, 6);
                $result_image = $new . "." . $format;
                if (is_uploaded_file($tmp)) {
                    $move = move_uploaded_file($tmp, "../uploads/category/" . $result_image);
                }

            }
        }
            $cvid = $db->where('id', $_POST['cvid'])->update('category', [
                'name' => @$_POST['cate_name'],
                'parent_id' => @$_POST['parent'],
                'description' => @$_POST['discription'],
                'image' => $result_image
            ]);

        if ($cvid == true){
            $db->redirect('../index.php?linkOne=list_category', 'success', 'دسته با موفقیت ویرایش شد');
        }
        if ($cvid == false){
            $db->redirect('../index.php?linkOne=list_category', 'danger', ' ویرایش دسته با خطا مواجه شد  ');
        }
    }


}
if ($_GET['hvid'] !== ''){
    $select_image = $db->where('id',$_GET['hvid'])->getOne('category','image');
    unlink("../uploads/category/".$select_image['image']);
    $del_category =$db->where('id',$_GET['hvid'])->delete('category');
    if ($del_category == true){
        $db->redirect('../index.php?linkOne=list_category', 'success', 'دسته با موفقیت حذف شد');
    }
    if ($del_category == false){
        $db->redirect('../index.php?linkOne=list_category', 'danger', ' حذف دسته با خطا مواجه شد  ');
    }
}
?>