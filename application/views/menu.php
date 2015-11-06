<!DOCTYPE html>
<html lang="en">
<head>

	<style>
	.menu{
		font-size: 19px;
		font-weight: normal;
		list-style: none;
		width: 300px;
		margin: 0px 10px;
		padding: 0px;
	}

	.menu a{
		margin: 0 10px;
		padding: 0;
		text-decoration: none;
	}

	.menu a:hover{
		text-decoration: underline;
		cursor: pointer;
	}
	</style>
</head>
<body>
<span class=menu>
	[
	<a href=<?=base_url()?>index.php/bancos>Bancos</a>
	<a href=<?=base_url()?>index.php/cajas>Cajas</a>
	<a href=<?=base_url()?>index.php/usuarios>Usuarios</a>
	]
</span>
</body>
</html>