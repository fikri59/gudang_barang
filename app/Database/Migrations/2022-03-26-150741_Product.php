<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_product'    => [
                'type'      => 'INT',
                'constraint'=> 11,
                'auto_increment'    => true
            ],
            'productName'   => [
                'type'      => 'VARCHAR',
                'constraint'=> '255',
                'null'      => true
            ],
            'productPrice'  => [
                'type'      => 'INT',
                'constraint'=> 11,
                'null'      => true
            ],
            'productStock'  => [
                'type'      => 'INT',
                'constraint'=> 11,
                'null'      => true
            ],
            'created_at'    => [
                'type'      => 'DATETIME',
                'null'      => true
            ],
            'updated_at'    => [
                'type'      => 'DATETIME',
                'null'      => true
            ]
        ]);

        $this->forge->addkey('id_product', true);
        $this->forge->createTable('products');

    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
