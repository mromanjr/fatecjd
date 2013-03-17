<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 14:05:27
         compiled from "application/views/templates/vestibular.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159956160509bd847371979-08073978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce42226f0394ce0bf34231f47a85737a8f4e421' => 
    array (
      0 => 'application/views/templates/vestibular.tpl',
      1 => 1351429618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159956160509bd847371979-08073978',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd8473e4d2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd8473e4d2')) {function content_509bd8473e4d2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Sobre a Fatec Jundiaí",'config'=>true), 0);?>

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilos.css');?>
" type="text/css">
<div id="mainContent">
    <div class="container">
	     

<div class="navLateral left">
    <ul id="navInst">
    	
        <li><a href="#" style="background-image: url(<?php echo (base_url()).('assets/imagens/bg_itemList.jpg');?>
); padding: 2px 20px; color: rgb(255, 255, 255); background-position: 0% 50%; background-repeat: no-repeat no-repeat; ">vestibular</a></li>
        <li><a href="#">Manual do Candidato</a></li>
        

        
    </ul>  
    
    
        
</div> 

<div class="conteudoPrincipal right">
    <div class="cabecalhoMateria">       
       <h1>VESTIBULAR</h1>
    </div>
    <div class="corpoMateria resizeable">
		<p style="text-align: justify; ">
		
			As inscrições para o Vestibular das Faculdades de Tecnologia (Fatecs) do Estado de São Paulo são semestrais. A FATEC JUNDIAÍ oferece 5 cursos superiores em tecnologia.
			

		
		</p>
    <div class="clear"></div>   
    </div>
<div class="clear"></div>
</div>    


    </div><div class="clear"></div>

</div>
<div class="clear"></div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>