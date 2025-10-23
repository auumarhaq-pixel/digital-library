<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // WAJIB ADA

class BookSeeder extends Seeder {
    public function run(): void {
        DB::table('books')->insert([
            // ID 1 dan 2 berasal dari AuthorSeeder dan PublisherSeeder
            ['title' => 'Bumi', 'author_id' => 1, 'publisher_id' => 1],
            ['title' => 'Laskar Pelangi', 'author_id' => 2, 'publisher_id' => 2],
        ]);
    }
}