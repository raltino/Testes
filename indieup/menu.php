<html>
<head> 
<title>teste</title>
<link rel="stylesheet" href="estilo.css" type="text/css">
</head>


<ul id="menu">
    <li><a href="#">Home</a></li>
    <li>
        <a href="#">Categorias</a>
        <ul>
            <li><a href="#">Primeira Pessoa</a></li>
            <li><a href="#">MMO</a></li>
            <li><a href="#">RPG</a></li>
            <li><a href="#">Infantil</a></li>
        </ul>
    </li>
    <li><a href="#">Mais Baixados</a>
		<ul>
            <li><a href="#">Mensal</a></li>
            <li><a href="#">Semanal</a></li>
            <li><a href="#">Por categoria</a></li>
        </ul>
	</li>	
	<li><a href="#">logar</a>
		<ul>
			<li><a href="#">Cliente</a></li>
			<li><a href="#">Desenvolvedor</a></li>
		</ul>
	</li>
    <li><a href="#">Cadastrar</a>
		<ul>
			<li><a href="#">Cliente</a></li>
			<li><a href="#">Desenvolvedor</a></li>
		</ul>
	</li>
    <li><a href="#">Quem Somos</a></li>
	<li>
		<form action='/search' id='search' method='get' name='searchForm' style='display:inline;'>
		<input id='search-box' name='q' onblur='if (this.value == &quot;&quot;) this.value = &quot;Buscar...&quot;;' onfocus='if (this.value == &quot;Buscar...&quot;) this.value = &quot;&quot;;' size='20' type='text' value='Buscar...'/>
		</form>
	</li>
	
	
</ul>

