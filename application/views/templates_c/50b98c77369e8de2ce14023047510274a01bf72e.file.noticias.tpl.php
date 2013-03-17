<?php /* Smarty version Smarty 3.1.4, created on 2013-02-25 18:24:56
         compiled from "application/views/templates/admin/noticias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1292188304509bcea31b5295-95996708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50b98c77369e8de2ce14023047510274a01bf72e' => 
    array (
      0 => 'application/views/templates/admin/noticias.tpl',
      1 => 1361827459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1292188304509bcea31b5295-95996708',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_509bcea34efda',
  'variables' => 
  array (
    'paginacao' => 0,
    'p' => 0,
    'noticias' => 0,
    'cont' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcea34efda')) {function content_509bcea34efda($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/fatecjd/system/libraries/smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('titulo'=>"Fatec Jundiaí",'config'=>true), 0);?>

<!-- destaques -->

<link rel="stylesheet" href="<?php echo (base_url()).('assets/css/estilos.css');?>
" type="text/css">

<link rel="stylesheet" href="../assets/jqueryui/development-bundle/themes/base/jquery.ui.all.css">
<script src="../assets/jqueryui/js/jquery-1.8.2.js"></script>
<script src="../assets/jqueryui/development-bundle/external/jquery.bgiframe-2.1.2.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.core.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.mouse.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.button.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.draggable.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.position.js"></script>
<script src="../assets/jqueryui/development-bundle/ui/jquery.ui.dialog.js"></script>
<link rel="stylesheet" href="../assets/jqueryui/development-bundle/demos/demos.css">



    <script>
         $(function() {
            
             $.fn.excluir = $(".excluirRegistro").submit(function(id){
                var acao = $(this).children(".acao").val();
                var noticia = $(this).children(".noticia").val();
                var url = $(this).children(".url").val();
                 $( "#dialog-confirm" ).dialog({
                         resizable: false,
                         height:140,
                         modal: true,
                         buttons: {
                                 "Excluir": function() {
                                         $.post(url+"admin/noticias",{
                                             noticia : noticia,
                                             acao : acao
                                         },function(resp){
                                             location.reload();
                                         });
                                 },
                                 "Cancelar": function() {
                                         $( this ).dialog( "close" );
                                 }
                         }
                 });
            
             });
                
             $.fn.porpag = $("#filtro").change(function(){
                 var url = $(".url").val();
                 var valor = $("#filtro").val();
                  document.location = url + "admin/noticias?p="+valor+"&registros=";
               
             })
		
         });
    </script>

<div style="display: none">
    <div id="dialog-confirm" title="Mensagem do sistema">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;x"></span>Deseja excluir a notícia?</p>
    </div>
</div>
<div class="cabecalhoMateria">       
    <h1>Gerenciador de notícias</h1>
    <br />
</div>

<div class="corpoMateria resizeable">		


    <table id="atalhos">
        <tr id="icones">
            <td>
                <form action="<?php echo base_url();?>
admin/noticias" method="post">
                    <input type="hidden" name="acao" value="criar" />
                    <input type="image" src="<?php echo base_url();?>
assets/imagens/icons/color/list_add.png" />
                </form>		
            </td>




        </tr>


    </table>
    <?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>
	
    <form action="javascript:porpag()" method="get" id="porpag">
        <input type="hidden" name="url" value="<?php echo base_url();?>
" class="url"/>
        <label for="filtro" id="lblFiltro">Mostrar:</label>
        <select name="filtro" id="filtro">

            <option <?php if ($_smarty_tpl->tpl_vars['p']->value=='5'){?>selected<?php }?> value="5">5</option>                 
            <option <?php if ($_smarty_tpl->tpl_vars['p']->value=='10'){?>selected<?php }?> value="10">10</option>
            <option <?php if ($_smarty_tpl->tpl_vars['p']->value=='15'){?>selected<?php }?> value="15">15</option>
            <option <?php if ($_smarty_tpl->tpl_vars['p']->value=='20'){?>selected<?php }?> value="20">20</option>
        </select>
    </form>
    <table id="registros">
        <tr>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Destaque</th>
            <th>Data</th>		
            <th>Autor</th>		
            <th>Visualizações</th>		
            <th class="icons">Ação</th>		
        </tr>
        <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <?php $_smarty_tpl->tpl_vars['cont'] = new Smarty_variable($_smarty_tpl->tpl_vars['cont']->value+1, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['cont']->value%2==0){?>
                <tr style="background: #e9e9e9;">		
                <?php }else{ ?>
                <tr>
                <?php }?>
                <td class="largo" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['titulo'],40);?>
</td>
                <td class="largo" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['descr'],40);?>
</td>		
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['destaque']==1){?>
                        <span style="color: green; font-weight: bolder">Sim</span>
                    <?php }else{ ?>                                            
                        <span style="color: red; font-weight: bolder">Não</span>
                    <?php }?>
                </td>		
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['data'];?>
</td>		
                <td>Data</td>		
                <td>Data</td>		
                <td class="icons">
                    <form action="<?php echo base_url();?>
admin/noticias" method="post">
                        <input type="hidden" name="acao" value="editar" />
                        <input type="hidden" name="noticia" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_noticia'];?>
" />
                        <input type="hidden" name="ati" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['titulo'];?>
"/>
                        <input type="hidden" name="descr" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['descr'];?>
"/>
                        
                        <input type="image" src="<?php echo base_url();?>
assets/imagens/icons/color/pencil.png" class='acaoregistro'/>
                    </form>	
                    <form action="javascript:excluir()" method="post" class="excluirRegistro">
                        <input type="hidden" name="acao" value="deletar" class="acao"/>
                        <input type="hidden" name="url" value="<?php echo base_url();?>
" class="url"/>
                        <input type="hidden" name="noticia" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_noticia'];?>
" class="noticia" />
                        <input type="image" src="<?php echo base_url();?>
assets/imagens/icons/color/busy.png" class='acaoregistro'/>
                    </form>			
                </td>		
            </tr>
        <?php } ?>	

    </table>

</div>
<div class="clear"></div>   
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>