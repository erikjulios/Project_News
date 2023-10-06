<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Liveupdate extends Migration
{
    public function up()
    {
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
            "no" => [
                "type"  => "VARCHAR",
                "constraint"    => 50,
            ],
            "berita" => [
                "type"  => "TEXT",
                "constraint"    => 1000,
            ],
            "created_at DATETIME DEFAULT CURRENT_TIMESTAMP"
        ]);

        //membuat primary key
        $this->forge->addKey("id", TRUE);

        //membuat table news
        $this->forge->createTable("liveupdate", TRUE);
    }

    public function down()
    {
        $this->forge->dropTable("liveupdate");
    }
}
