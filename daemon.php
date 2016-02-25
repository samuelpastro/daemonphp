<?php
/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
    Date:
    2015/10/14
    
    Author:
    Samuel Barletta Pastro
    
  	Usage:
    php daemon.php <script.php> <parameters if exist>
*/

	//Pega o nome do script PHP para ser executado
	$param = $argv[1];
	$countParam = count($argv);
	
	//Cria variável com os parâmetros necessário do script a ser executado
	for ($i=2; $i<$countParam; $i++) {
		$args .= $argv[$i]." ";
	}

	//array de pipes, parâmetro obrigatório da função proc_open
	$array_pipes = array();

	//executando o daemon
	proc_open("php ".$param." ".$args." &", array(), $array_pipes);

	exit;
?>
