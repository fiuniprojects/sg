<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SG</title>

	<style type="text/css">
		table.cabecera{
			margin: auto;
			border: solid 1px;
			padding: 20px;
		}
	</style>
</head>
<body>
<?php
	$this->table->set_caption('Gestión de bancos');

	$txt_banco 	= array(
		'type' 		=> 'text',
		'name'		=> 'txt_banco',
		'id'		=> 'txt_banco',
		'size'		=> 45,
		'maxlengt'	=> '20',
		'value'		=> set_value('txt_banco'),
	);
	$this->table->add_row(array(
		form_label('Banco:', 'txt_banco'),
		form_input($txt_banco),
		form_error('txt_banco', '<span class=error>', '</span>'),
	));

	$txt_telefono 	= array(
		'type' 		=> 'text',
		'name'		=> 'txt_telefono',
		'id'		=> 'txt_telefono',
		'size'		=> 15,
		'maxlengt'	=> '50',
		'value'		=> set_value('txt_telefono'),
	);
	$this->table->add_row(array(
		form_label('Teléfono:', 'txt_telefono'),
		form_input($txt_telefono),
		form_error('txt_telefono', '<span class=error>', '</span>'),
	));

	$btn_guardar 	= array(
		'type' 		=> 'submit',
		'name'		=> 'btn_guardar',
		'id'		=> 'btn_guardar',
		'value'		=> 'Guardar',
	);
	$this->table->add_row(array(
		false,
		form_input($btn_guardar),
		form_error('btn_guardar', '<span class=error>', '</span>'),
	));

	$this->table->set_template(array('table_open' => '<table class=cabecera>'));
	echo $this->table->generate();
?>
</body>
</html>