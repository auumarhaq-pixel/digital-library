<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        // Urutan WAJIB: Author/Publisher dulu, baru Book (karena ada Foreign Key)
        $this->call([
            AuthorSeeder::class,    
            PublisherSeeder::class, 
            MemberSeeder::class,    
            BookSeeder::class,      
            // LoanSeeder tidak perlu karena biasanya diisi lewat API/manual
        ]);
    }
}