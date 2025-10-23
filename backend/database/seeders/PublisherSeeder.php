<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // WAJIB ADA

class PublisherSeeder extends Seeder {
    public function run(): void {
        DB::table('publishers')->insert([
            ['name' => 'Gramedia'],
            ['name' => 'Mizan'],
        ]);
    }
}