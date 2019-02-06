<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $data = [
        'nama_kelas' => 'IS-4', 
        'jurusan' => 'Sistem Informasi'
    ];
    
    DB::table('table_kelas')->insert($data);

    $data = [
        'nama_kelas'=> 'IF-3',
        'jurusan'=> 'Informatika'

    
    ];
    DB::table('table_kelas')->insert($data);
}
}