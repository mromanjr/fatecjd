<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 15:17:13
         compiled from "application/views/templates/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350528834509be919b12ca1-08168220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7597d7d5b82de00efef5faf91d8b5f1b7e55d02' => 
    array (
      0 => 'application/views/templates/contato.tpl',
      1 => 1352150349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350528834509be919b12ca1-08168220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509be919bf7f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509be919bf7f1')) {function content_509be919bf7f1($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Sobre a Fatec Jundiaí",'config'=>true), 0);?>

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilos.css');?>
" type="text/css">
<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/contato.css');?>
" type="text/css">


<div id="mainContent">
    <div class="container">	     

		<div class="conteudoPrincipal right">
			<div class="cabecalhoMateria">       
				<h1>Contato</h1>
			</div>
			
			<div class="corpoMateria resizeable">
				<p style="text-align: justify; ">
					<form action="#" method="post">
						<div class="g_12">
							<div class="widget_header">
								<h4 class="widget_header_title">Por favor, preencha o formulário</h4>
							</div>
							<div class="widget_contents noPadding">
								<div class="line_grid">
									<div class="g_3"><span class="label">Nome</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" />
									</div>
								</div>
								<div class="line_grid">
									<div class="g_3"><span class="label">Email</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" />
									</div>
								</div>
								
								<div class="line_grid">
									<div class="g_3"><span class="label">Departamento</span>
									</div>
									<div class="g_9">
										<select class="simple_form">
											<option value="1" selected="selected" />Secretaria
                                                                                        <option value="2" />Coordenação
											<option value="3" />Outro
										</select>
									</div>
								</div>
								
								<div class="line_grid">
									<div class="g_3"><span class="label">Mensagem</span></div>
									<div class="g_9">
										<textarea class="simple_field mpReply"></textarea>
									</div>
									<input type="submit" value="Enviar" class="button" style="float: right;"/>
								</div>
								
							</div>
							
						</div>
					</form>
				</p>
				
				<div class="clear"></div>   
			</div>
			<div class="clear"></div>
		</div>    

    </div>
	
	<div class="clear"></div>

</div>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>