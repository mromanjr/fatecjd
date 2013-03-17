<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 13:36:04
         compiled from "application/views/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012980591509bd164eb04c5-81595961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924517c391169c7919d10fe8e0386f933d6aa81c' => 
    array (
      0 => 'application/views/templates/login.tpl',
      1 => 1351949706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012980591509bd164eb04c5-81595961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'area' => 0,
    'restrito' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd16504dc8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd16504dc8')) {function content_509bd16504dc8($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/var/www/fatecjd/system/libraries/smarty/plugins/function.html_image.php';
?>﻿<!DOCTYPE html>

<html class="no-js" lang="pt-BR" dir="ltr">    
    <head>                
        <meta charset="UTF-8">
        
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        
        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilo.css');?>
" type="text/css">
        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/login.css');?>
" type="text/css">        
        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/modernizr.js');?>
"></script>
        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/jquery-1.8.1.min.js');?>
"></script>		
	
        <script type="text/javascript">
				var url;
				url = "<?php echo (base_url()).($_smarty_tpl->tpl_vars['area']->value);?>
";		
				
		</script>
	

        
        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/ajax.js');?>
"></script>
        
        
        <!--[if lt IE 7]>
            <script type="text/javascript" src="<?php echo (base_url()).('assets/js/iepngfix_tilebg.js');?>
"></script>
            <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/ie6.css');?>
" type="text/css" media="screen" />
            <style>
            img{
                behavior: url(iepngfix.htc);
            }
            </style>
	<![endif]-->
	
	<style type="text/css">
		#login { 
			top: 50%;  
			left: 50%;  
			margin-top: -84px;  
			margin-left: -152px;  
			position: absolute;  
		}  
	</style>
    </head>
        
    <body>
        
			<div id="login">
			<div id="descricao">
			
				<form action="javascript:login()" method="post" class="formLogin">
					<fieldset class="campos">
						<legend>Acesso Restrito - <?php echo $_smarty_tpl->tpl_vars['restrito']->value;?>
</legend>
						<p class="resposta">
					
					
						</p>
						
						<p>
							<label for="usuario">Usuário:</label>
							<input type="hidden" name="area" value="<?php echo $_smarty_tpl->tpl_vars['area']->value;?>
" id="area" />							
							<input type="text" name="usuario" id="usuario" />							
						</p>
						<p>
							<label for="senha">Senha:</label>
							<input type="password" name="senha" id="senha" />							
						</p>
						
						<p class="submit">						
							<a href="#" class="recovery">Esqueceu sua senha?</a>							
							<?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/ajax-loader.gif"),'class'=>"ie6 ajax"),$_smarty_tpl);?>
 							
							<button class="botao" type="submit">Entrar</button>
						</p>
					</fieldset>
				</form>
			</div>
        
	</body>
</html><?php }} ?>