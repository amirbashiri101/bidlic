<?php
require('../core/config.php');
if (isset($_POST['sub'])){

    if ($_POST['parent']== ''){
        $_POST['parent'] = NULL;
    }
    if ($_POST['description'] == ''){
        $_POST['description'] = NULL;
    }

    $cate = $db->insert('category',[
        'name' => @$_POST['cate_name'],
        'parent_id' => @$_POST['parent'],
        'description' => @$_POST['discription'],
    ]);
    if ($cate == true){
        $db->redirect('../index.php?linkOne=category','success','دسته با موفقیت افزوده شد');
    }
    elseif ($cate == false){

        $db->redirect('../index.php?linkOne=category','danger',' افزدون دسته با خطا مواجه شد  ');

    }
}
?>