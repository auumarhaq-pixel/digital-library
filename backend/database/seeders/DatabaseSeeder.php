<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            MemberSeeder::class,    // Pastikan ini ada [cite: 748]
            AuthorSeeder::class,    // Pastikan ini ada [cite: 749]
            PublisherSeeder::class, // Pastikan ini ada [cite: 750]
            BookSeeder::class,
        ]);
    }
}