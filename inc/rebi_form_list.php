<div class="m-4">
    <h4><i class="fa fa-plus"></i> Buat Form</h4>
</div>
<div class="mt-4 p-4">
	<a href="<?php echo admin_url('admin.php?page=rebiform_list&action=add') ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Tambah Form</a>
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
			<tr>
				<td>1</td>
				<td>Form Lead magnet</td>
				<td>20</td>
				<td>Rp300.000</td>
				<td>[rebi_form id=2]</td>
				<td>
					<button class="btn-sm btn btn-warning"><i class="fa fa-trash"></i></button>
					<button class="btn-sm btn btn-success"><i class="fa fa-pencil"></i></button>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Lead 2</td>
				<td>6</td>
				<td>-</td>
				<td>[rebi_form id=9]</td>
			</tr>
		</tbody>
	</table>
	<nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item"><a class="page-link text-danger" href="#">Previous</a></li>
	    <li class="page-item"><a class="page-link text-danger" href="#">1</a></li>
	    <li class="page-item"><a class="page-link text-danger" href="#">2</a></li>
	    <li class="page-item"><a class="page-link text-danger" href="#">3</a></li>
	    <li class="page-item"><a class="page-link text-danger" href="#">Next</a></li>
	  </ul>
	</nav>
</div>