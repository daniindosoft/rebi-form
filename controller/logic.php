<?php 

	/**
	 * core sistem lojiknya
	 */
	class rebiForm
	{
		function rebiFormCustomStyle()
		{
			echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<style>
				.panel{
					border: 1px solid #900d1461;
					border-radius: 4px;
				}
			</style>
			';
		}
		
		public function rebiFormView($filename)
		{
			self::rebiFormCustomStyle();
			include_once(RDRFO.$filename);
		}
		
	}

	$rebiFrom = new rebiForm;

	
 