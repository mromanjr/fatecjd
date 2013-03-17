<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 15:16:28
         compiled from "application/views/templates/noticias/c80aa6a146ee00d29d9f7898728ec603.tpl" */ ?>
<?php /*%%SmartyHeaderCode:916788603509be8ec9f00e0-37309954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5f1b46293dd624d9caf450f88e5f77634bc76b' => 
    array (
      0 => 'application/views/templates/noticias/c80aa6a146ee00d29d9f7898728ec603.tpl',
      1 => 1352394976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '916788603509be8ec9f00e0-37309954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509be8ecb4358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509be8ecb4358')) {function content_509be8ecb4358($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>($_smarty_tpl->tpl_vars['titulo']->value),'config'=>true), 0);?>
<link rel='stylesheet' href='<?php echo (base_url()).('assets/css/estilos.css');?>
' type='text/css'><div class='cabecalhoMateria'><h1>Teste Noticia novo</h1></div><div class='corpoMateria resizeable'><h1 style="text-align: center; ">
	Teste conteudo</h1>
</div><div class="clear"></div><div class="clear"></div><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Fatec Jundiaí",'config'=>true), 0);?>
<?php }} ?>