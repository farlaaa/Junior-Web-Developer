<?php 
	use Carbon\Carbon;
	class AppController {
		public function dateNow() {
			return Carbon::now()->toDateString();
		}
	}
?>