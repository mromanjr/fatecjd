<?php /* Smarty version Smarty 3.1.4, created on 2013-02-23 22:51:09
         compiled from "application/views/templates/admin/criar_noticia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584051503509bd868c7f838-54218415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '004093019fb291c57ac5ed31b0dc2dcf07a79d22' => 
    array (
      0 => 'application/views/templates/admin/criar_noticia.tpl',
      1 => 1361623704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584051503509bd868c7f838-54218415',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd868d5545',
  'variables' => 
  array (
    'alerta' => 0,
    'ckeditor_texto1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd868d5545')) {function content_509bd868d5545($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/var/www/fatecjd/system/libraries/smarty/plugins/function.html_image.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Fatec Jundiaí",'config'=>true), 0);?>

<!-- destaques -->

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilos.css');?>
" type="text/css">
<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/contato.css');?>
" type="text/css">


<script type="text/javascript">
	$(document).ready(function(){
		$(".line_grid .g_9 #nao").click(function(){			
			 $("#imgdest").replaceWith( $("#imgdest").clone( true ) );
			$("#imgdest").hide();
		})
		$(".line_grid .g_9 #sim").click(function(){
			$("#imgdest").show();
		})
	});
	
	
	
</script>



	<div class="cabecalhoMateria">       
		<h1>Nova Notícia</h1>
		
	</div>
		
	<div class="corpoMateria resizeable">
		<?php if (isset($_smarty_tpl->tpl_vars['alerta']->value)){?>
			<div class="success"><span><?php echo $_smarty_tpl->tpl_vars['alerta']->value[0];?>
</span></div>
		<?php }?>
		<form action="" method="post" id="formSalvarNoticia" enctype="multipart/form-data">
						<p class="resposta"></p>
						<input type="hidden" name="acao" value="salvar" id="acao" />
						<div class="g_12">
							<div class="widget_header">
								<h4 class="widget_header_title">Insira as informações para a notícia</h4>
							</div>
							<div class="widget_contents noPadding">
								<div class="line_grid">
									<div class="g_3"><span class="label">Titulo</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" id="titulo" name="titulo" />
									</div>
								</div>
								<div class="line_grid">
									<div class="g_3"><span class="label">Descrição</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" id="descricao" name="descricao" />
									</div>
								</div>
								<div class="line_grid">
									<div class="g_3"><span class="label">Destaque</span></div>
									<div class="g_9">
										<input type="radio" class="destaque" name="destaque" id="sim" value="1" /> Sim
										<input type="radio" class="destaque" name="destaque" id="nao" value="0" /> Não
									</div>
								</div>
								
								<div class="line_grid" id="imgdest" style="display: none">
									<div class="g_3"><span class="label">Imagem</span></div>
									<div class="g_9">										
										<input type="file" name="imgdestaque" id="imgdestaque" />
									</div>
								</div>
								
							
								<div class="line_grid">
									<div class="g_3"><span class="label">Conteúdo</span></div>
									<div class="g_9">
										<textarea id="texto1" name="texto1">			
										</textarea>
										<?php echo display_ckeditor($_smarty_tpl->tpl_vars['ckeditor_texto1']->value);?>

										<?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/ajax-loader.gif"),'class'=>"ie6 ajax"),$_smarty_tpl);?>
 
									</div>
									<input type="submit" value="Salvar" class="button" style="float: right;"/>
								</div>
								
							</div>
							
						</div>
					</form>
	</div>
	<div class="clear"></div>   
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>