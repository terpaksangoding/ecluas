<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
   public $primaryKey ='nis';
   protected $table = 'table_siswa';
   protected $fillable = 
   [
       'nis', 'nama_lengkap', 'jenis_kelamin', 'no_tlp', 'id_kelas', 'alamat'
   ];
   public function getJenisKelaminDisplayAttribute()
   {
       if (@$this->arttributes['jenis_kelamin']=='L') return 'Laki-laki'; 
       if (@$this->arttributes['jenis_kelamin']=='P') return 'Perempuan'; 
       return'-';
   }
   public function kelas()
   {
       return $this->hasOne('\App\Kelas','id_kelas', 'id_kelas');
   }
}
