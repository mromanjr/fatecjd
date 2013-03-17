{include file="admin/header.tpl" titulo="Fatec Jundiaí" config=true}
<!-- destaques -->

<link rel="stylesheet" href="{base_url()|cat: 'assets/css/estilos.css'}" type="text/css">

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


{literal}
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
{/literal}
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
                <form action="{base_url()}admin/noticias" method="post">
                    <input type="hidden" name="acao" value="criar" />
                    <input type="image" src="{base_url()}assets/imagens/icons/color/list_add.png" />
                </form>		
            </td>




        </tr>


    </table>
    {$paginacao}	
    <form action="javascript:porpag()" method="get" id="porpag">
        <input type="hidden" name="url" value="{base_url()}" class="url"/>
        <label for="filtro" id="lblFiltro">Mostrar:</label>
        <select name="filtro" id="filtro">

            <option {if $p == '5'}selected{/if} value="5">5</option>                 
            <option {if $p == '10'}selected{/if} value="10">10</option>
            <option {if $p == '15'}selected{/if} value="15">15</option>
            <option {if $p == '20'}selected{/if} value="20">20</option>
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
        {$cont=0}
        {foreach from=$noticias item=v key=k}
            {$cont=$cont+1}
            {if $cont % 2 == 0}
                <tr style="background: #e9e9e9;">		
                {else}
                <tr>
                {/if}
                <td class="largo" title="{$v['titulo']}">{$v['titulo']|truncate:40}</td>
                <td class="largo" title="{$v['descr']}">{$v['descr']|truncate:40}</td>		
                <td>
                    {if $v['destaque'] == 1}
                        <span style="color: green; font-weight: bolder">Sim</span>
                    {else}                                            
                        <span style="color: red; font-weight: bolder">Não</span>
                    {/if}
                </td>		
                <td>{$v['data']}</td>		
                <td>Data</td>		
                <td>Data</td>		
                <td class="icons">
                    <form action="{base_url()}admin/noticias" method="post">
                        <input type="hidden" name="acao" value="editar" />
                        <input type="hidden" name="noticia" value="{$v['id_noticia']}" />
                        <input type="hidden" name="ati" value="{$v['titulo']}"/>
                        <input type="hidden" name="descr" value="{$v['descr']}"/>
                        
                        <input type="image" src="{base_url()}assets/imagens/icons/color/pencil.png" class='acaoregistro'/>
                    </form>	
                    <form action="javascript:excluir()" method="post" class="excluirRegistro">
                        <input type="hidden" name="acao" value="deletar" class="acao"/>
                        <input type="hidden" name="url" value="{base_url()}" class="url"/>
                        <input type="hidden" name="noticia" value="{$v['id_noticia']}" class="noticia" />
                        <input type="image" src="{base_url()}assets/imagens/icons/color/busy.png" class='acaoregistro'/>
                    </form>			
                </td>		
            </tr>
        {/foreach}	

    </table>

</div>
<div class="clear"></div>   
{include file="admin/footer.tpl"}
