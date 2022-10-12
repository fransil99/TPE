<?php
/* Smarty version 4.2.1, created on 2022-10-12 00:49:33
  from 'C:\xampp\htdocs\TPE\templates\bikes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345f2fd07ddb5_40694236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e4e24ccb4b5a0cfa0d0c42e443f15d79ba12ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\bikes.tpl',
      1 => 1665528544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6345f2fd07ddb5_40694236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bikes']->value, 'bike');
$_smarty_tpl->tpl_vars['bike']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bike']->value) {
$_smarty_tpl->tpl_vars['bike']->do_else = false;
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['bike']->value->nombre;?>
</h3>
    <h5>Precio en USD: $<?php echo $_smarty_tpl->tpl_vars['bike']->value->precio;?>
</h5>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <h6>Cilindrada <?php echo $_smarty_tpl->tpl_vars['bike']->value->cilindrada;?>
</h6>
        <?php if ((isset($_smarty_tpl->tpl_vars['bike']->value->imagen))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['bike']->value->imagen;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bike']->value->nombre;?>
" width="100%" height="100%" fill="#55595c"/><?php }?><text x="50%" y="50%"
            fill="#eceeef" dy=".3em"><?php echo $_smarty_tpl->tpl_vars['bike']->value->descripcion;?>
</text>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
            <ul class="list-group align-items-center ">
                <li class="list-group-item bg-dark"><a class="link-light" href="viewBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">View</a></li>
            </ul>
            <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
            <ul class="list-group align-items-center">
                <li class="list-group-item bg-dark"><a class="link-light" href="formEditBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">Edit</a></li>
            </ul>
            <ul class="list-group align-items-center">
                <li class="list-group-item bg-dark"><a class="link-light" href="deleteBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">Delete</a></li>
            </ul>
            <?php }?>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
