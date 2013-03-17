<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 13:33:07
         compiled from "application/views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402955446509bd0b3bc6a25-74411632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624aee4ddd80f6a0390166f17f94c29ba4eb3119' => 
    array (
      0 => 'application/views/templates/home.tpl',
      1 => 1352160373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402955446509bd0b3bc6a25-74411632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'destaques' => 0,
    'v' => 0,
    'url' => 0,
    'ultimasnoticias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd0b3d570c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd0b3d570c')) {function content_509bd0b3d570c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include '/var/www/fatecjd/system/libraries/smarty/plugins/function.html_image.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Fatec Jundiaí",'config'=>true), 0);?>

<!-- destaques -->
<div id="blocoDestaques">

	<a class="faixa" href="#" title=""><!-- --></a>
	
	<ul>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['destaques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(str_replace(" ","-",strtolower($_smarty_tpl->tpl_vars['v']->value['titulo'])), null, 0);?>
		
		<li>
			
			<a href="<?php echo ((base_url()).("noticias/")).($_smarty_tpl->tpl_vars['url']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
">
				<?php echo smarty_function_html_image(array('file'=>((base_url()).("uploads/destaques/")).($_smarty_tpl->tpl_vars['v']->value['imgdestaque']),'class'=>"ie6"),$_smarty_tpl);?>
 
			</a>
			<div class="fundo"><!--  --></div>
			<p><a href="#" title="Destaque 1"><?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
</a></p>
		</li>
		<?php } ?>		
		
		
	</ul>
</div>
<!-- /destaques -->



<div id="contentCentral">
	<div id="un">
		<span>Ultimas Notícias</span>
	</div>
	<div id="noticias">
		

		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ultimasnoticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			 <div class="resumoNoticias">
			
				<div class="dataNoticiasHome left" style="width:52px;">
					<p class="right first"><?php echo $_smarty_tpl->tpl_vars['v']->value['data'];?>
</p>
				</div>
				<div class="textNoticiasHome left">
					<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>
</h2>
					<a href="#" style="text-decoration: none;"><p><?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
</p></a>
				</div>            
        
				<div class="clear"></div>

			</div>
		<?php } ?>
      
       
	</div>



    	

        <a href="<?php echo (base_url()).('noticias');?>
" class="lnkMais" style=" margin:-10px 0px 10px 0px;">Mais notícias</a>

        <div class="clear"></div>

       

 	</div>
	





<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>