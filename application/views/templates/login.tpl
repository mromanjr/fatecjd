<!DOCTYPE html>

<html class="no-js" lang="pt-BR" dir="ltr">    
    <head>                
        <meta charset="UTF-8">
        
        <title>{$titulo}</title>
        
        <link rel="stylesheet" href="{base_url()|cat: 'assets/css/estilo.css'}" type="text/css">
        <link rel="stylesheet" href="{base_url()|cat: 'assets/css/login.css'}" type="text/css">        
        <script type="text/javascript" src="{base_url()|cat: 'assets/js/libs/modernizr.js'}"></script>
        <script type="text/javascript" src="{base_url()|cat: 'assets/js/libs/jquery-1.8.1.min.js'}"></script>		
	
        <script type="text/javascript">
				var url;
				url = "{base_url()|cat: $area}";		
				
		</script>
	

        
        <script type="text/javascript" src="{base_url()|cat: 'assets/js/ajax.js'}"></script>
        
        
        <!--[if lt IE 7]>
            <script type="text/javascript" src="{base_url()|cat: 'assets/js/iepngfix_tilebg.js'}"></script>
            <link rel="stylesheet" href="{base_url()|cat: 'assets/css/ie6.css'}" type="text/css" media="screen" />
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
						<legend>Acesso Restrito - {$restrito}</legend>
						<p class="resposta">
					
					
						</p>
						
						<p>
							<label for="usuario">Usuário:</label>
							<input type="hidden" name="area" value="{$area}" id="area" />							
							<input type="text" name="usuario" id="usuario" />							
						</p>
						<p>
							<label for="senha">Senha:</label>
							<input type="password" name="senha" id="senha" />							
						</p>
						
						<p class="submit">						
							<a href="#" class="recovery">Esqueceu sua senha?</a>							
							{html_image file=base_url()|cat: "assets/imagens/ajax-loader.gif" class="ie6 ajax"} 							
							<button class="botao" type="submit">Entrar</button>
						</p>
					</fieldset>
				</form>
			</div>
        
	</body>
</html>