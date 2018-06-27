<?php
/*
Autor: Henrique L. Fernandes
Data_ini: 27/06/2018
Folha que instancia um objeto da classe Crud.php, recebe os arquivos JSON na pasta /js e
utiliza os métodos de insert(), select() e delete()
-----------------------------------------------------------------------------------------
Editado por:******
Data_edit:*****
Edições Feitas: *****
*/
//Área de Includes, importação de bibliotecas, etc.

include_once('Crud.php');

//Fim Área de Includes
//-----------------------------------------------------------------------------------------------
//Área de declaração de variáveis globais e objetos

$obj_crud = new Crud();

//Carrega o arquivo old.json para a variável $old_file
$old_file = file_get_contents('js/old.json');
$old_data = json_decode($old_file, true);

//Carrega o arquivo atual.json para a variável $atual_file
$atual_file = file_get_contents('js/atual.json');
$atual_data =  json_decode($atual_file, true);

//Fim Área de Declarações
//-----------------------------------------------------------------------------------------------
//Área de chamada de Funções métodos e execução do programa

$obj_crud->insert($old_data, $atual_data);
//$obj_crud->delete($old_data,$atual_data);
//$obj_crud->update($old_data,$atual_data);

//Fim Área de execuções
//-----------------------------------------------------------------------------------------------
?>
