<?php /* Smarty version Smarty 3.1.4, created on 2013-02-23 23:32:17
         compiled from "application/views/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587510999509bcea34f88c4-38119409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c5f3220bc959dcdb0f8227dba3175dd7f8fdd89' => 
    array (
      0 => 'application/views/templates/admin/header.tpl',
      1 => 1361673136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587510999509bcea34f88c4-38119409',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bcea36555a',
  'variables' => 
  array (
    'titulo' => 0,
    'usuario' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcea36555a')) {function content_509bcea36555a($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/var/www/fatecjd/system/libraries/smarty/plugins/function.html_image.php';
?>﻿<!DOCTYPE html><html class="no-js" lang="pt-BR" dir="ltr">        <head>                        <meta charset="UTF-8">                <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>                <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilo.css');?>
" type="text/css">		        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/destaque.css');?>
" type="text/css">		        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/noticias.css');?>
" type="text/css">	        <script type="text/javascript">				var url;				url = "<?php echo base_url();?>
";								</script>                 <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/jquery-1.8.1.min.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/jqueryui/jquery-ui-1.8.21.min.js');?>
"></script>		<script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/modernizr.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/ajax.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/jquery.cycle.all.min.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/jquery.destaques.js');?>
"></script>		        				<script type="text/javascript">			$(document).ready(function(){							if($.browser.mozilla == true || $.browser.webkit == true) {										$("#cps").mouseover(function(){										$(this).css("opacity","1");										}).mouseout(function(){										$(this).css("opacity","0.5");											})									$("#sp").mouseover(function(){						$(this).css("opacity","1");										}).mouseout(function(){										$(this).css("opacity","0.5");						})   				}												$(".social-icons a").mouseover(function(){										$(this).css("top","-9px");				}).mouseout(function(){										$(this).css("top","0");									})								if($.browser.msie == true){					$(".ie").css("border-right","0.5px solid #888");					$(".active").css("background","#942019");										if($.browser.version < 8)					{						$("#menuiel").css("display","block");												$("#menuier").css("display","block");						$("#loginButton").css("position","absolute");						$("#loginButton").css("top","-66px");						$("#loginButton").css("right","0px");						$("#loginBox").css("position","absolute");						$("#loginBox").css("top","-34px");					}				}							})		</script>                <script type="text/javascript" src="<?php echo (base_url()).('assets/js/login.js');?>
"></script>                <script type="text/javascript" src="<?php echo (base_url()).('assets/js/ajax.js');?>
"></script>                        <!--[if lt IE 7]>            <script type="text/javascript" src="<?php echo (base_url()).('assets/js/iepngfix_tilebg.js');?>
"></script>            <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/ie6.css');?>
" type="text/css" media="screen" />            <style>            img{                behavior: url(iepngfix.htc);            }            </style>					<![endif]-->	    </head>            <body>        <div id="tudo">            <header class="topo">                <div id="logo">                                       <?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/fatec.png"),'class'=>"ie6",'id'=>"fatec"),$_smarty_tpl);?>
 			  					  					 <?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/cps.png"),'class'=>"ie6",'id'=>"cps"),$_smarty_tpl);?>
     					<?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/sp.png"),'class'=>"ie6",'id'=>"sp"),$_smarty_tpl);?>
                        				   				   					                   <div id="loginContainer">                    						<div id="usuariobv"><span>Bem vindo <span class="bolder"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</span></span> |						<a href="<?php echo (base_url()).('sair');?>
"><span>Sair</span></a></div>						<br>						<div id="usuariobv"><span>Voltar ao </span>						<a href="<?php echo base_url();?>
"><span>Site</span></a></div>								                                                                        </div>								<div id="onde">                                       <div id="menuiel"></div>                    <nav id="menu">                        <ul>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='home'){?>active <?php }?> ie home" href="<?php echo base_url();?>
admin">Início</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='noticias'){?>active <?php }?> ie" href="<?php echo base_url();?>
admin/noticias">Noticias</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='paginas'){?>active <?php }?> ie" href="<?php echo base_url();?>
admin/paginas">Páginas</a></li>                                                        <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='usuarios'){?>active <?php }?>ie" href="<?php echo base_url();?>
admin/usuarios">Usuários</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='usuarios'){?>active <?php }?>ie" href="<?php echo base_url();?>
admin/usuarios">Configurações</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='estatisticas'){?>active <?php }?>ie" href="<?php echo base_url();?>
admin/estatisticas">Estatísticas</a></li>                                         </ul>                   </nav>                    <div id="menuier"></div>				                   </div>            </header>                 <div id="geral">                			  				                                <div id="conteudo"> <?php }} ?>