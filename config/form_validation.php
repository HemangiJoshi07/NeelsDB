<?php 
$config=[
	'login'=> [
						[
		                   'field'=>'uname',
		                   'label'=>'UserName',
		                   'rules'=>'required'
		               ],
		               [
						   'field'=>'pwd',
		                   'label'=>'PassWord',
		                   'rules'=>'required|numeric'
		               ]
		           ],	           	
	'addhome'=> [
							[
			                   'field'=>'leble',
			                   'label'=>'Lebel',
			                   'rules'=>'required'
			               ],
			               [
							   'field'=>'title',
			                   'label'=>'Title',
			                   'rules'=>'required'
			               ],
			               [
							   'field'=>'description',
			                   'label'=>'Description',
			                   'rules'=>'required'
			               ]
			           ],	       
];
?>