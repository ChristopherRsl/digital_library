<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Bob',
            'email' => 'Bob@gmail.com',
            'password' => Hash::make('bobbob'),
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Book::factory()->create([
            'user_id'=> $user->id,
            'title' => 'The Great Gatsby',
            'category' => 'Fiction',
            'description' => 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan.',
            'total' => 22,
            'file' => 'pdfs/the great gatsby.pdf',
            'cover' => 'covers/the great gatsby.jpg',
        ]);

        Book::factory()->create([
            'user_id'=> $user->id,
            'title' => 'Holy Mother',
            'category' => 'Mystery',
            'description' => 'Terjadi pembunuhan mengerikan terhadap seorang anak laki-laki di kota tempat Honami tinggal. Korban bahkan diperkosa setelah dibunuh. Berita itu membuat Honami mengkhawatirkan keselamatan putri satu-satunya yang dia miliki. Pihak kepolisian bahkan tidak bisa dia percayai. Apa yang akan dia lakukan untuk melindungi putri tunggalnya itu?',
            'total' => 33,
            'file' => 'pdfs/holy mother.pdf',
            'cover' => 'covers/holy mother.jpg',
        ]);

        Book::factory()->create([
            'user_id'=> $user->id,
            'title' => 'Harry Potter',
            'category' => 'Fantasy',
            'description' => 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.',
            'total' => 44,
            'file' => 'pdfs/harry potter.pdf',
            'cover' => 'covers/harry potter.jpg',
        ]);

        Book::factory(10)->create([
            'user_id'=> $user->id
        ]);
    }
}
