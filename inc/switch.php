<?php 
	
	function rebiform_list()
	{
		global $rebiFrom;
		if ($_GET['action'] == 'add') {
			return $rebiFrom->rebiFormView('inc/rebi_form_add.php');
		}
		return $rebiFrom->rebiFormView('inc/rebi_form_list.php');
	}
	function rebiform_lead()
	{

	}
	function rebiform_setting()
	{

	}