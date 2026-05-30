<?php
namespace App\Models;

use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Hafiz Perdana',
            'nim'  => '2410817210027',
            'prodi'=> 'Teknologi Informasi',
            'asal' => 'Universitas Lambung Mangkurat',
            'hobi' => ['Menonton Anime', 'Game', 'Membaca Novel', 'Musik'],
            'skill'=> ['HTML', 'UI/UX']
        ];
    }
}