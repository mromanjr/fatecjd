{include file="admin/header.tpl" titulo="Fatec Jundiaí" config=true}
<!-- destaques -->

<link rel="stylesheet" href="{base_url()|cat: 'assets/css/estilos.css'}" type="text/css">
<link rel="stylesheet" href="{base_url()|cat: 'assets/css/contato.css'}" type="text/css">

{literal}
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

{/literal}

	<div class="cabecalhoMateria">       
		<h1>Nova Notícia</h1>
		
	</div>
		
	<div class="corpoMateria resizeable">
		{if isset($alerta)}
			<div class="success"><span>{$alerta[0]}</span></div>
		{/if}
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
										{display_ckeditor($ckeditor_texto1)}
										{html_image file=base_url()|cat: "assets/imagens/ajax-loader.gif" class="ie6 ajax"} 
									</div>
									<input type="submit" value="Salvar" class="button" style="float: right;"/>
								</div>
								
							</div>
							
						</div>
					</form>
	</div>
	<div class="clear"></div>   
{include file="admin/footer.tpl"}
