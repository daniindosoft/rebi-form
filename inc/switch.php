<?php 
	
	function rebiform_list()
	{
		global $rebiFrom;
		if ($_GET['action'] == 'edit') {
			return $rebiFrom->rebiFormView('inc/rebi_form_edit.php', 'edit');
		}
		if ($_GET['action'] == 'add') {
			return $rebiFrom->rebiFormView('inc/rebi_form_add.php');
		}
		if ($_GET['action'] == 'delete') {
			$id = $_GET['id'];
			$rebiFrom->rebiFormDelete($_GET['tbl'], $_GET['id']);
			echo '
				<script>
					location.replace("admin.php?page=rebiform_list&msg=Berhasil di hapus");
				</script>
			';
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