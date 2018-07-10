<?php
require('../core/config.php');
if (isset($_POST['sub'])){
    if ($_POST['description'] === ''){
        $_POST['description'] = NULL;
    }
    if ($_POST['keys'] === ''){
        $_POST['keys'] = NULL;
    }
    if ($_POST['category'] == ''){
        $_POST['category'] = NULL;
    }
    $save_product = $db->insert('product',[
        'name'          => @$_POST['name'],
        'description'   => @$_POST['description'],
        'keys'          => @$_POST['keys'],
        'category'      => @$_POST['category']
    ]);
    if ($save_product == true){
        $db->redirect('../index.php?linkOne=add_product','success','کالا با موفقیت افزوده شد');
    }
    elseif ($save_product == false){

        $db->redirect('../index.php?linkOne=add_product','danger',' افزدون کالا با خطا مواجه شد  ');
    }
}
?>