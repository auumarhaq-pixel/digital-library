<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // WAJIB ADA

class AuthorSeeder extends Seeder {
    public function run(): void {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Andrea Hirata'],
        ]);
    }
}