<?php
require_once('database/Database.php');
require_once('interface/iNotice.php');
class Notice extends Database implements iNotice {

	/**
	 * 
	 * @return fetch all notice rows	
	 */
	public function all()
	{
		$sql = "SELECT *
				FROM notices
				ORDER BY id DESC";
		return $this->getRows($sql);
	}//end get_all_laundry

	
}//end class
