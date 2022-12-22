<?php

namespace App\Controllers;
use App\Models\PropertyListing;

class Listing extends BaseController
{
	private $perPage = 5;
	
    public function index()
    {
		$db = \Config\Database::connect();
		$query = $db->query('SELECT * FROM property_listing');
		$querys = $query->getResult();
		
		$count = count($querys);
	 
		if(isset($_GET['page']) && !empty($_GET['page'])){


			  $start = ceil($_GET['page'] * $this->perPage);
			  
			  $query = $db->query('SELECT * FROM property_listing LIMIT 5 OFFSET ' . $start);
			  $data['listing'] = $query->getResult();
			  $jdata['listing_html'] = view('data', $data);

			  return $this->response->setJSON($jdata);

			 }else{
				 
				$query = $db->query('SELECT * FROM property_listing limit 5 ');
				//$query = $db->query("SELECT * FROM property_listing WHERE p_price LIKE '%259000%' AND p_size LIKE '%87%'");
				$data['listing'] = $query->getResult();

				return view('listing',$data);
			 }
	
    }
	
	public function filter()
    {
		$price = $_POST['p_price'];
		$size = $_POST['p_size'];
		
		 $db = \Config\Database::connect();
	
				$query = $db->query("SELECT * FROM property_listing WHERE p_price LIKE '%$price%' AND p_size LIKE '%$size%'");
				$data['listing'] = $query->getResult();

				return view('listing',$data);
			  
		
    }
}
