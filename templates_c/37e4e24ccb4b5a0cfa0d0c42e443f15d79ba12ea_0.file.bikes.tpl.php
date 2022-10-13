<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:53:36
  from 'C:\xampp\htdocs\TPE\templates\bikes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634850a0d6b0c8_73840902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e4e24ccb4b5a0cfa0d0c42e443f15d79ba12ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\bikes.tpl',
      1 => 1665683616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634850a0d6b0c8_73840902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['brand']->value))) {?>
    <div class="d-flex justify-content-center">
    <img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value->imagen_marca;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['brand']->value->nombre_marca;?>
"  class="d-flex justify-content-center" width="15%" height="15%" fill="#55595c" />
    </div>
    <h6><?php echo $_smarty_tpl->tpl_vars['brand']->value->descripcion_marca;?>
</h6>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bikes']->value, 'bike');
$_smarty_tpl->tpl_vars['bike']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bike']->value) {
$_smarty_tpl->tpl_vars['bike']->do_else = false;
?>
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['bike']->value->imagen;?>
" class="w-100"/>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5><?php echo $_smarty_tpl->tpl_vars['bike']->value->nombre;?>
</h5>
                                <div class="d-flex flex-row">
                                    <h6><?php echo $_smarty_tpl->tpl_vars['bike']->value->cilindrada;?>
cc</h6>
                                </div>
                                <p class=" mb-4 mb-md-0 text-truncate"><?php echo $_smarty_tpl->tpl_vars['bike']->value->descripcion;?>
</p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">$<?php echo $_smarty_tpl->tpl_vars['bike']->value->precio;?>
</h4>
                                </div>
                                <div class="d-flex flex-column mt-4">
                                    <button class="btn btn-primary btn-sm" type="button"><a class="link-light" href="viewBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">View</a></button>
                                    <?php if ((isset($_SESSION['IS_LOGGED']))) {?>
                                    <button class="btn btn-primary btn-sm mt-2" type="button"><a class="link-light" href="formEditBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">Editar</a></button>
                                    <button class="btn btn-outline-primary btn-sm mt-2" type="button"><a class="link-danger" href="deleteBike/<?php echo $_smarty_tpl->tpl_vars['bike']->value->id_moto;?>
">Eliminar</a></button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
