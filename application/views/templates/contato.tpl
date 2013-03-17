{include file="header.tpl" titulo="Sobre a Fatec Jundiaí" config=true}
<link rel="stylesheet" href="{base_url()|cat: 'assets/css/estilos.css'}" type="text/css">
<link rel="stylesheet" href="{base_url()|cat: 'assets/css/contato.css'}" type="text/css">


<div id="mainContent">
    <div class="container">	     

		<div class="conteudoPrincipal right">
			<div class="cabecalhoMateria">       
				<h1>Contato</h1>
			</div>
			
			<div class="corpoMateria resizeable">
				<p style="text-align: justify; ">
					<form action="#" method="post">
						<div class="g_12">
							<div class="widget_header">
								<h4 class="widget_header_title">Por favor, preencha o formulário</h4>
							</div>
							<div class="widget_contents noPadding">
								<div class="line_grid">
									<div class="g_3"><span class="label">Nome</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" />
									</div>
								</div>
								<div class="line_grid">
									<div class="g_3"><span class="label">Email</span></div>
									<div class="g_9">
										<input class="simple_field" type="text" />
									</div>
								</div>
								
								<div class="line_grid">
									<div class="g_3"><span class="label">Departamento</span>
									</div>
									<div class="g_9">
										<select class="simple_form">
											<option value="1" selected="selected" />Secretaria
                                                                                        <option value="2" />Coordenação
											<option value="3" />Outro
										</select>
									</div>
								</div>
								
								<div class="line_grid">
									<div class="g_3"><span class="label">Mensagem</span></div>
									<div class="g_9">
										<textarea class="simple_field mpReply"></textarea>
									</div>
									<input type="submit" value="Enviar" class="button" style="float: right;"/>
								</div>
								
							</div>
							
						</div>
					</form>
				</p>
				
				<div class="clear"></div>   
			</div>
			<div class="clear"></div>
		</div>    

    </div>
	
	<div class="clear"></div>

</div>
<div class="clear"></div>
{include file="footer.tpl"}
