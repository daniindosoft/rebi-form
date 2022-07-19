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
		global $rebiFrom;
		return $rebiFrom->rebiFormView('inc/rebi_form_lead.php');
	}

	function rebiform_report()
	{
		global $rebiFrom;
		return $rebiFrom->rebiFormView('inc/rebi_form_report.php');	
	}

	function rebiform_setting()
	{

	}