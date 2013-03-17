<?php /* Smarty version Smarty 3.1.4, created on 2012-11-08 14:05:24
         compiled from "application/views/templates/paginas/graduacao-cursos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551066526509bd8449cc115-36137487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1dd5e989d9f4e18ae0df831637279e592f5dca' => 
    array (
      0 => 'application/views/templates/paginas/graduacao-cursos.tpl',
      1 => 1351647186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551066526509bd8449cc115-36137487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bd844ad44f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd844ad44f')) {function content_509bd844ad44f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Sobre a Fatec Jundiaí",'config'=>true), 0);?>

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilos.css');?>
" type="text/css">

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/jqueryui/jquery-ui.css');?>
" type="text/css">



<script type="text/javascript">
	$(document).ready(function(){
		$("#accordion").accordion();
	});
</script>


<div id="mainContent">
    <div class="container">
	     
<div class="navLateral left">
    <ul id="navInst">
    	
        <li><a href="<?php echo (base_url()).('graduacao');?>
">O tecnólogo</a></li>
        
        <li ><a href="<?php echo (base_url()).('graduacao/cursos');?>
" class="menuvativo" style="color: #fff; background-repeat: no-repeat;">Cursos</a></li>
        
        <li><a href="<?php echo (base_url()).('graduacao/coordenadoria');?>
">Coordenadoria</a></li>
        
        <li><a href="<?php echo (base_url()).('graduacao/mercado-de-trabalho');?>
">o mercado de trabalho</a></li>          
        
        <li><a href="<?php echo (base_url()).('graduacao/avaliacao-cursos');?>
">Avaliação de Cursos</a></li>
        
    </ul>  
    
    
        
</div> 

<div class="conteudoPrincipal right">
    <div class="cabecalhoMateria">       
       <h1>Cursos</h1>
    </div>
    <div class="corpoMateria resizeable">
		<p style="text-align: justify; ">
		
			<div id="accordion">
			<h3>Tecnologia em Gestão da Tecnologia da Informação - GTI</h3>
			<div>
				<p>
				Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
				ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
				amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
				odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
				</p>
			</div>
			<h3>Tecnologia em Análise e Desenvolvimento de Sistemas - ADS</h3>
			<div>
				<p>
				Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
				purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
				velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
				suscipit faucibus urna.
				</p>
			</div>
			<h3>Tecnologia em Logística</h3>
			<div>
				<p>
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
				<ul>
					<li>List item one</li>
					<li>List item two</li>
					<li>List item three</li>
				</ul>
			</div>
			
			<h3>Tecnologia em Eventos</h3>
			<div>
				<p>
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
				<ul>
					<li>List item one</li>
					<li>List item two</li>
					<li>List item three</li>
				</ul>
			</div>
			<h3>Tecnologia em Gestão Ambiental</h3>
			<div>
				<p>
				Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
				Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
				ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
				lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
				</p>
				<ul>
					<li>List item one</li>
					<li>List item two</li>
					<li>List item three</li>
				</ul>
			</div>
			
		</div>
		
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