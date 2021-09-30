<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        //untuk manggil model yang kita buat
        $model = model('PostModel');

        $kategori = ['nature', 'programming', 'cat', 'sport', 'lifestyle', 'food'];

        for ($i = 0; $i < 6; $i++) {
            $model->insert([
                'judul'     => static::faker()->sentence(3),
                'slug'      => static::faker()->unique()->slug(3),
                'author'    => static::faker()->name(),
                'kategori'  => $kategori[0],
                'deskripsi' => static::faker()->text(),
            ]);
        }
    }
}
