<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 16:18:02
         compiled from "application/views/templates/admin/usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1701589988509bf75a721be1-83975943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d3916289d1a4e7931c29334bf0dbae2aa99a161' => 
    array (
      0 => 'application/views/templates/admin/usuarios.tpl',
      1 => 1349195658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701589988509bf75a721be1-83975943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bf75a807eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bf75a807eb')) {function content_509bf75a807eb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Fatec Jundiaí",'config'=>true), 0);?>

<!-- destaques -->

	


<table id="atalhos">
<tr id="icones">
	<td>
		<a href="<?php echo base_url();?>
paginas/nova" title="Criar nova página"><img src="<?php echo base_url();?>
assets/imagens/icons/color/plus.png" /></a>
	</td>
	
</tr>	


</table>


<table id="registros">
	<tr>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Ultimo Login</th>				
		<th>Status</th>		
		<th>Nivel</th>		
		<th>Ação</th>		
	</tr>
	
	<tr>
		<td>Titulo</td>
		<td>Data</td>		
		<td>Data</td>		
		<td>Data</td>					
		<td>Data</td>					
		<td>			
			<a href="<?php echo base_url();?>
noticias/nova" title="Criar nova notícia"><img src="<?php echo base_url();?>
assets/imagens/icons/color/pencil.png" class="acaoregistro" /></a>
			<a href="<?php echo base_url();?>
noticias/nova" title="Criar nova notícia"><img src="<?php echo base_url();?>
assets/imagens/icons/color/busy.png" class="acaoregistro" /></a>					
		</td>		
	</tr>
	
	<tr>
		<td>Titulo</td>
		<td>Data</td>		
		<td>Data</td>		
		<td>Data</td>		
		<td>Data</td>		
			
		<td>			
			<a href="<?php echo base_url();?>
noticias/nova" title="Criar nova notícia"><img src="<?php echo base_url();?>
assets/imagens/icons/color/pencil.png" class="acaoregistro" /></a>			
			<a href="<?php echo base_url();?>
noticias/nova" title="Criar nova notícia"><img src="<?php echo base_url();?>
assets/imagens/icons/color/busy.png" class="acaoregistro" /></a>					
		</td>		
	</tr>
</table>


<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>