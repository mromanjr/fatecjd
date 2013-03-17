<?php /* Smarty version Smarty 3.1.4, created on 2012-11-11 23:20:52
         compiled from "application/views/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194918634509bd0b3d5bde4-04844945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304e7d7913bc61a5ba57117e97d53a86f77f79d' => 
    array (
      0 => 'application/views/templates/header.tpl',
      1 => 1352683251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194918634509bd0b3d5bde4-04844945',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd0b40150c',
  'variables' => 
  array (
    'titulo' => 0,
    'url' => 0,
    'usuario' => 0,
    'area' => 0,
    'menu' => 0,
    'msg' => 0,
    'dia' => 0,
    'mes' => 0,
    'ano' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd0b40150c')) {function content_509bd0b40150c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/var/www/fatecjd/system/libraries/smarty/plugins/function.html_image.php';
?>﻿<!DOCTYPE html><html class="no-js" lang="pt-BR" dir="ltr">        <head>                        <meta charset="UTF-8">                <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>                <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilo.css');?>
" type="text/css">		        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/destaque.css');?>
" type="text/css">		        <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/noticias.css');?>
" type="text/css">	        <script type="text/javascript">				var url;				url = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";								</script>                 <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/jquery-1.8.1.min.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/jqueryui/jquery-ui-1.8.21.min.js');?>
"></script>		<script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/modernizr.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/libs/ajax.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/jquery.cycle.all.min.js');?>
"></script>        <script type="text/javascript" src="<?php echo (base_url()).('assets/js/jquery.destaques.js');?>
"></script>		        				<script type="text/javascript">			$(document).ready(function(){							if($.browser.mozilla == true || $.browser.webkit == true) {										$("#cps").mouseover(function(){										$(this).css("opacity","1");										}).mouseout(function(){										$(this).css("opacity","0.5");											})									$("#sp").mouseover(function(){						$(this).css("opacity","1");										}).mouseout(function(){										$(this).css("opacity","0.5");						})   				}												$(".social-icons a").mouseover(function(){										$(this).css("top","-9px");				}).mouseout(function(){										$(this).css("top","0");									})								if($.browser.msie == true){					$(".ie").css("border-right","0.5px solid #888");					$(".active").css("background","#942019");										if($.browser.version < 8)					{						$("#menuiel").css("display","block");												$("#menuier").css("display","block");						$("#loginButton").css("position","absolute");						$("#loginButton").css("top","-66px");						$("#loginButton").css("right","0px");						$("#loginBox").css("position","absolute");						$("#loginBox").css("top","-34px");																	}				}							})		</script>                <script type="text/javascript" src="<?php echo (base_url()).('assets/js/login.js');?>
"></script>                <script type="text/javascript" src="<?php echo (base_url()).('assets/js/ajax.js');?>
"></script>                        <!--[if lt IE 7]>            <script type="text/javascript" src="<?php echo (base_url()).('assets/js/iepngfix_tilebg.js');?>
"></script>            <link rel="stylesheet" href="<?php echo (base_url()).('assets/css/ie6.css');?>
" type="text/css" media="screen" />            <style>            img{                behavior: url(iepngfix.htc);            }            </style>					<![endif]-->	    </head>            <body>        <div id="tudo">            <header class="topo">                <div id="logo">                                       <?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/fatec.png"),'class'=>"ie6",'id'=>"fatec"),$_smarty_tpl);?>
 					  					  					 <?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/cps.png"),'class'=>"ie6",'id'=>"cps"),$_smarty_tpl);?>
     					<?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/sp.png"),'class'=>"ie6",'id'=>"sp"),$_smarty_tpl);?>
                        				   				   					                   <div id="loginContainer">                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value==false){?>					<a href="#" id="loginButton"><span>Intranet</span><em></em></a>									<?php }else{ ?>						<div id="usuariobv"><span>Bem vindo <span class="bolder"><a href="<?php echo (base_url()).($_smarty_tpl->tpl_vars['area']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</a></span></span> |						<a href="<?php echo (base_url()).('sair');?>
"><span>Sair</span></a></div>							<?php }?>					                    <div style="clear:both"></div>					                        <div id="loginBox">                                            <form id="loginForm" action="javascript:login();" method="post" class="formLogin">                                <fieldset id="body">                                    <fieldset>                                        <label for="usuario">Usuário</label>                                        <input type="text" name="usuario" id="usuario" />                                        <input type="hidden" name="area" id="area" value="alunos" />                                    </fieldset>                                    <fieldset>                                        <label for="senha">Senha</label>                                        <input type="password" name="senha" id="senha" />                                    </fieldset>									<fieldset class="resposta">                                                                            </fieldset>																			<?php echo smarty_function_html_image(array('file'=>(base_url()).("assets/imagens/ajax-loader.gif"),'class'=>"ie6 ajax"),$_smarty_tpl);?>
                                         <input type="submit" id="login" value="Entrar" class="botao" />                                        <label for="checkbox" id="ck"><input type="checkbox" id="checkbox" />Lembrar-me</label>                                </fieldset>                                <span><a href="#">Esqueceu sua senha?</a></span>                            </form>                        </div>                    </div>                   <div class="social-icons">																							<a href="#" class="twitter" title="Twitter">Twitter</a>																										<a href="#" class="facebook" title="Facebook">Facebook</a>														<a href="#" class="rss" title="RSS">RSS Feed</a>										</div>                                  </div>								<div id="onde">                                       <div id="menuiel"></div>                    <nav id="menu">                        <ul>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='home'){?>active <?php }?> ie home" href="<?php echo base_url();?>
">Início</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='noticias'){?>active <?php }?> ie" href="<?php echo (base_url()).('noticias');?>
">Notícias</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='a-fatec-jd'){?>active <?php }?>ie" href="<?php echo (base_url()).('a-fatec-jd');?>
">A Fatec JD</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='graduacao'){?>active <?php }?>ie" href="<?php echo (base_url()).('graduacao');?>
">Graduação</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='vestibular'){?>active <?php }?>ie" href="<?php echo (base_url()).('vestibular');?>
">Vestibular</a></li>                            <li><a class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='contato'){?>active <?php }?>ie" href="<?php echo (base_url()).('contato');?>
">Contato</a></li>                                                  </ul>												<form action="#" method="post">												<input type="text" class="search" placeholder="Procurar...">							<input type="image" class="iconsearch" src="<?php echo base_url();?>
assets/imagens/icons/18/i_18_search.png">						</form>                   </nav>                    <div id="menuier"></div>				                   </div>            </header>                 <div id="geral">                			   <div class="breadLine">				<div class="bc">				<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?>					<span><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
, bem vindo ao portal da FATEC Jundiaí!<span>				<?php }else{ ?>					<?php echo set_breadcrumb();?>
				<?php }?>				</div>					<div id="data">						<span><?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
, <?php echo date('d');?>
 de <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
 de <?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</span>					</div>				</div>                                <div id="conteudo"> <?php }} ?>