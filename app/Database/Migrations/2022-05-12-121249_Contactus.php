<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contactus extends Migration
{
    public function up()
    {
        //kolom field tabel news
        $this->forge->addField([
            "id" => [
                "type"  => "INT",
                "constraint"    => 5,
                "unsigned"  => true,
                "auto_increment"    => true
            ],
            "nama" => [
                "type"  => "VARCHAR",
                "constraint"    => 50
            ],
            "email" => [
                "type"  => "VARCHAR",
                "constraint"    => 50,
            ],
            "subjek" => [
                "type"  => "TEXT",
                "constraint"    => 50,
            ],
            "pesan" => [
                 "type"  => "TEXT",
                "constraint"    => 1000,
               
            ],
            "created_at DATETIME DEFAULT CURRENT_TIMESTAMP"
        ]);

        //membuat primary key
        $this->forge->addKey("id", TRUE);

        //membuat table news
        $this->forge->createTable("contactus", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("contactus");
    }
}
