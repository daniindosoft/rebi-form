<?php 

	/**
	 * core sistem lojiknya
	 */
	class rebiForm
	{
		function __construct()
		{
		    global $wpdb;
		    $this->con = $wpdb;
			$this->tblform = $wpdb->prefix . 'rebiform_form';
			$this->tblfield = $wpdb->prefix . 'rebiform_field';
			$this->tbllead = $wpdb->prefix . 'rebiform_lead';
			$this->hal = 1;
			if ($_GET['hal']) {
				$this->hal = $_GET['hal'];
			}
		}

		function rebiFormCustomStyle()
		{
			echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<style>
				.panel{
					border: 1px solid #900d1461;
					border-radius: 4px;
				}
				#adminmenuwrap{
					margin-top:0px !important;
				}
			</style>
			';
		}
		
		public function rebiFormView($filename, $type = 'view')
		{
			self::rebiFormCustomStyle();
			if ($type == 'edit') {
				$id = $_GET['id'];
				$tbl = $_GET['tbl'];
				$edit = $this->con->get_row("SELECT * from $tbl where id = $id");
			}
			$rebiFormListPage = 1;
			
			include_once(RDRFO.$filename);
		}

		public function rebiFormLoop($limit)
		{
			$result = '';
			for ($i=1; $i <=$limit; $i++) { 
				$result .= '<option value="'.$i.'">'.$i.'</option>';
			}
			return $result;
		}

		public function rebiFormList($tbl, $page=1)
		{
			$limit = 15;
			$offset = ($limit * $page) - $limit;
			$result = $this->con->get_results("SELECT * from $tbl order by id desc limit $limit offset $offset");
			$pagination = '
				<b>Halaman :</b>
		            <select name="" class="form-control" id="change-pagination" onchange="return rebiFormChangePage()">
				';
			$totalData = count($this->con->get_results("SELECT * from $tbl"));
			$totalPage = ceil($totalData / $limit);
			for ($i=1; $i <= $totalPage; $i++) { 
				$selected = '';
				if ($i == $this->hal) {
					$selected = 'selected';
				}
				$pagination .= '
		            <option value="'.$i.'" '.$selected.'>'.$i.'</option>       
				';
			}
			$pagination .= '</select>';
			return [ 'data' => $result, 'pagination' => $pagination ];

		}

		public function rebiFormDelete($tbl, $id)
		{
			// <div class='updated'><p>Berhasil dihapus</p></div>
			$this->con->delete($tbl, array('id' => $id));

		}
		
	}

	$rebiFrom = new rebiForm;

	
 