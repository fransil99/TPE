<?php
/* Smarty version 4.2.1, created on 2022-09-30 22:28:52
  from 'C:\xampp\htdocs\TPE\templates\motos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633751847ca0d0_08979413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d5e23091f48bfe1ba44aad5f000817fe4437f1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\motos.tpl',
      1 => 1664569727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633751847ca0d0_08979413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bikes']->value, 'bike');
$_smarty_tpl->tpl_vars['bike']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bike']->value) {
$_smarty_tpl->tpl_vars['bike']->do_else = false;
?> {
    
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <h3><?php echo $_smarty_tpl->tpl_vars['bike']->value->nombre;?>
</h3>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['bike']->value->imagen;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['bike']->value->nombre;?>
" width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em"><?php echo $_smarty_tpl->tpl_vars['bike']->value->descripcion;?>
</text>
                            <p>Cilindrada:<?php echo $_smarty_tpl->tpl_vars['bike']->value->cilindrada;?>
</p>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <ul class="list-group align-items-center" >
                            <li class="list-group-item"><a href="view/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">View</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
}
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
