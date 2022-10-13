<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:15:35
  from 'C:\xampp\htdocs\TPE\templates\viewItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634871e72aca27_69043670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75058ea9143d6b8e580bb596958b075fa2ece8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\viewItem.tpl',
      1 => 1665692130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634871e72aca27_69043670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen;?>
" alt="..." /></div>
            <div class="col-md-6">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen_marca;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->nombre_marca;?>
" width="60px" height="45px"
                    fill="#55595c" />
                <small><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion_marca;?>
</small>
                <h1 class="display-5 fw-bolder"><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</h1>
                <div class="small mb-1"><?php echo $_smarty_tpl->tpl_vars['item']->value->cilindrada;?>
cc</div>
                <div class="fs-5 mb-5">
                </div>
                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</p>
                <span>$<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</span>
                <a class="link-dark" href="showAll">Volver.</a>
                <div class="d-flex">
                </div>
            </div>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
