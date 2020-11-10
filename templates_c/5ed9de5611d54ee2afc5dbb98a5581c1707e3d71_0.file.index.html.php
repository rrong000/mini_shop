<?php
/* Smarty version 3.1.29, created on 2020-11-10 06:03:27
  from "C:\Users\Rong\Downloads\UniServerZ\www\mini_shop\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa2d2fd98b85_75807137',
  'file_dependency' => 
  array (
    '5ed9de5611d54ee2afc5dbb98a5581c1707e3d71' => 
    array (
      0 => 'C:\\Users\\Rong\\Downloads\\UniServerZ\\www\\mini_shop\\templates\\index.html',
      1 => 1604988205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index_side.html' => 1,
    'file:goods_form.html' => 1,
    'file:goods_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:bill_check_out.html' => 1,
    'file:display_bill.html' => 1,
    'file:list_bill.html' => 1,
    'file:goods_list.html' => 1,
  ),
),false)) {
function content_5faa2d2fd98b85_75807137 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">

      <div id="shop_head">
        <a href="index.php">
          <img src="images/books.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive " style="height: 500px;width: 1300px;">
        </a>
      </div>
        <div class="col-md-12 col-sm-12">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
          <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
            <div class="alert alert-primary"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "goods_display") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "check_out") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:bill_check_out.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:display_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "list_bill") {?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:list_bill.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          <?php }?>
        </div>
        
      </div>

      <div id="shop_foot" >
        <div>地址：LEE市JI區EUN路5巷16號</div>
        <div>電話：(06)19930516</div>
        <div>版權所有 copyright © 2020 rrong.net. All Rights Reserved. </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
