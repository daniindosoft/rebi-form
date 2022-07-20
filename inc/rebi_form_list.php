<div class="m-4">
    <h4><i class="fa fa-plus"></i> Buat Form</h4>
</div>
<?php if ($_GET['msg']): ?><div class="updated"><p><?php echo $_GET['msg']; ?></p></div><?php endif; ?>
<div class="mt-4 p-4">
	<a href="<?php echo admin_url('admin.php?page=rebiform_list&action=add') ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Tambah Form</a>
	<hr>
 	<div class="row">
		<div class="col-lg-2"><?php echo self::rebiFormList($this->tblform, $this->hal)['pagination'] ?></div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Form</th>
				<th>Total Lead</th>
				<th>Total Profit</th>
				<th>Shortcode</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php echo $x; $no=1; foreach (self::rebiFormList($this->tblform, $this->hal)['data'] as $data): ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td>Form Lead magnet</td>
					<td>20</td>
					<td>Rp300.000</td>
					<td>[rebi_form id=2]</td>
					<td>
						<a onclick="return confirm('Yakin menghapus data ?')" href="<?php echo admin_url('admin.php?page=rebiform_list&action=delete') ?>&id=<?php echo $data->id.'&tbl='.$this->tblform ?>" class="btn-sm btn btn-warning"><i class="fa fa-trash"></i></a>
						<a href="<?php echo admin_url('admin.php?page=rebiform_list&action=edit') ?>&id=<?php echo $data->id.'&tbl='.$this->tblform ?>" class="btn-sm btn btn-success"><i class="fa fa-pencil"></i></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<div class="row">
		<div class="col-lg-2"><?php echo self::rebiFormList($this->tblform, $this->hal)['pagination'] ?></div>
	</div>
	
</div>
    
<script>
	function rebiFormChangePage()
	{
		var x = document.getElementById('change-pagination');
		location.replace('<?php echo admin_url('admin.php?page=rebiform_list') ?>&hal='+x.value);
	}
</script>