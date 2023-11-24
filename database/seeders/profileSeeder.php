<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder {
  
    public function run() {
        \App\Models\Profile::factory(200)->create();
        \App\Models\Profile::factory()->create([
            "name"=>"Test User",
            "email"=> "soufiane@gmial.com",
        ]);
    
   
    }
}
