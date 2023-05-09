<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'id_product';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["productName", "productCode", "productPrice", "productStock"];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public $model;

    public function updateData($id_product, $data)
    {
        $this->db->table('products')->where('id_product', $id_product)->update($data);
    }

    public static function kodeProduk()
    {
        $db = db_connect();
        $maxId = $db->table('products')->selectMax('id_product')->get()->getFirstRow();
        $str = "BRG" . date('d');
        $kode = $str . sprintf('%05s', $maxId->id_product + 1);
        return $kode;

        // karena $this->db SAMA DENGAN $db = db_connect()
        // yang berfungsi untuk koneksi ke database
    }
}
