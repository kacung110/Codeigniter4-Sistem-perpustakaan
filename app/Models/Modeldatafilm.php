<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatafilm extends Model
{
    protected $db;
    protected $table = "dbfilm";
    protected $primaryKey = "id_film";
    protected $returnType = "object";
    protected $allowedFields = ['id_film','judul_film','tanggal_rilis','Lama_tayang','jumlah_penonton'];

    public function get_insert($data){
        return $this->db
                        ->table('dbfilm')
                        ->insert($data);
    }
    public function get_data($id) {
		return $this->db
                        ->table('dbfilm')
                        ->where(["id_film" => $id])
                        ->get()
                        ->getRow();
	}
	function get_update($id,$data) {
        return $this->db
                        ->table('dbfilm')
                        ->where(["id_film" => $id])
                        ->set($data)
                        ->update();
	}
    public function get_delete($id) {
        return $this->db
                        ->table('dbfilm')
                        ->where(["id_film" => $id])
                        ->delete();
	}
}
