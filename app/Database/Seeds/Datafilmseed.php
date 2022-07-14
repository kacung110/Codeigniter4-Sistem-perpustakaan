<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Datafilmseed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_film'           => '20201090',
                'judul_film'        => 'kkn di desa penari',
                'tanggal_rilis'     => '15 mei 2022',
                'lama_tayang'       => '2 minggu',
                'jumlah_penonton'   => '270000'
            ],
            [
                'id_film'           => '20201108',
                'judul_film'        => 'Kukira kau rumah',
                'tanggal_rilis'     => '12 mei 2022',
                'lama_tayang'       => '1 minggu',
                'jumlah_penonton'   => '60000'
            ],
            [
                'id_film'           => '20201208',
                'judul_film'        => 'Marley',
                'tanggal_rilis'     => '15 mei 2022',
                'lama_tayang'       => '3 minggu',
                'jumlah_penonton'   => '30000'
            ],
        ];
        $this->db->table('Daftarfilm')->insertbatch($data);
    }
}
