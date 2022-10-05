<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:21:35
  from 'C:\xampp\htdocs\TPE\templates\viewItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633df55f0f10c0_81080210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75058ea9143d6b8e580bb596958b075fa2ece8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\viewItem.tpl',
      1 => 1665004281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633df55f0f10c0_81080210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->nombre;?>
</h3>
    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen;?>
" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
        dy=".3em"><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion;?>
</text>
    <p>Cilindrada:<?php echo $_smarty_tpl->tpl_vars['item']->value->cilindrada;?>
</p>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <ul class="list-group align-items-center">
                </ul>
                <small class="text-muted"> Precio:$<?php echo $_smarty_tpl->tpl_vars['item']->value->precio;?>
</small>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen_marca;?>
" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                    fill="#eceeef" dy=".3em"><?php echo $_smarty_tpl->tpl_vars['item']->value->descripcion_marca;?>
</text>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
