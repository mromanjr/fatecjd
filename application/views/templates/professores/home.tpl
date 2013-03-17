{include file="header.tpl" titulo="Fatec Jundiaí" config=true}
<!-- destaques -->
<div id="blocoDestaques">

	<a class="faixa" href="#" title=""><!-- --></a>
	
	<ul>
		{foreach from=$destaques key=k item=v}
		{$url = str_replace(" ","-",strtolower($v['descr']))}
		
		<li>
			
			<a href="{base_url()|cat: "noticias/"|cat: $url|cat: "/"|cat:$v['id_noticia']}" title="{$v['descr']}">
				{html_image file=base_url()|cat: "assets/destaques/"|cat: $v['imgdestaque'] class="ie6"} 
			</a>
			<div class="fundo"><!--  --></div>
			<p><a href="#" title="Destaque 1">{$v['descr']}</a></p>
		</li>
		{/foreach}		
		
		
	</ul>
</div>
<!-- /destaques -->



<div id="contentCentral">
	<div id="un">
		<span>Ultimas Notícias</span>
	</div>
	<div id="noticias">
		

		{foreach from=$ultimasnoticias key=k item=v}
			 <div class="resumoNoticias">
			
				<div class="dataNoticiasHome left" style="width:52px;">
					<p class="right first">{$v['data']}</p>
				</div>
				<div class="textNoticiasHome left">
					<h2>{$v['titulo']}</h2>
					<a href="#" style="text-decoration: none;"><p>{$v['descr']}</p></a>
				</div>            
        
				<div class="clear"></div>

			</div>
		{/foreach}
      
       
	</div>



    	

        <a href="{base_url()|cat: 'noticias' }" class="lnkMais" style=" margin:-10px 0px 10px 0px;">Mais notícias</a>

        <div class="clear"></div>

       

 	</div>
	





{include file="footer.tpl"}
