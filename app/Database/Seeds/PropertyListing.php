<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PropertyListing extends Seeder
{
    public function run()
    {
		$data = [
            [
				'p_title' => 'My title',
				'p_address'  => '90443, Nuremberg, Germany',
				'p_price'  => '21000',
				'p_size'  => '98',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '323000',
				'p_size'  => '87',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '51',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '32257, Bunde, Germany',
				'p_price'  => '256979',
				'p_size'  => '50',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '90443, Nuremberg, Germany',
				'p_price'  => '21000',
				'p_size'  => '26',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '259',
				'p_size'  => '87',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '51',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '32257, Bunde, Germany',
				'p_price'  => '259090',
				'p_size'  => '50',
			],
			
			[
				'p_title' => 'My title',
				'p_address'  => '90443, Nuremberg, Germany',
				'p_price'  => '21000',
				'p_size'  => '26',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '323000',
				'p_size'  => '109',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '51',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '259000',
				'p_size'  => '87',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '55',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '32257, Bunde, Germany',
				'p_price'  => '2564564',
				'p_size'  => '55',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '56',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '255654',
				'p_size'  => '87',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '225000',
				'p_size'  => '51',
			],
						[
				'p_title' => 'My title',
				'p_address'  => '32257, Bunde, Germany',
				'p_price'  => '2564564',
				'p_size'  => '505',
			],
			
			[
				'p_title' => 'My title',
				'p_address'  => '90443, Nuremberg, Germany',
				'p_price'  => '21000',
				'p_size'  => '98',
			],
			[
				'p_title' => 'My title',
				'p_address'  => '08412, Werdau, Germany',
				'p_price'  => '2595465',
				'p_size'  => '109',
			],
						[
				'p_title' => 'My title',
				'p_address'  => '74564, Crailsheim, Germany',
				'p_price'  => '228000',
				'p_size'  => '55',
			],
						[
				'p_title' => 'My title',
				'p_address'  => '32257, Bunde, Germany',
				'p_price'  => '25613',
				'p_size'  => '59',
			],
			
			[
				'p_title' => 'My title',
				'p_address'  => '90443, Nuremberg, Germany',
				'p_price'  => '21000',
				'p_size'  => '26',
			],
        ];
		$builder = $this->db->table('property_listing');
		$builder->insertBatch($data);
		
        // Simple Queries
        //$this->db->query('INSERT INTO property_listing (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
       // $this->db->table('property_listing')->insert($data);    }
}
}