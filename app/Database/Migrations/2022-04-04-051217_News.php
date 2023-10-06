<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
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
            "title" => [
                "type"  => "VARCHAR",
                "constraint"    => 50
            ],
            "author" => [
                "type"  => "VARCHAR",
                "constraint"    => 50,
                "default"   => "John Doe"
            ],
            "content" => [
                "type"  => "TEXT",
                "null"    => true
            ],
            "status" => [
                "type"  => "ENUM",
                "constraint"    => ["published", "draft"],
                "default"   => "draft"
            ],
            "created_at DATETIME DEFAULT CURRENT_TIMESTAMP"
        ]);

        //membuat primary key
        $this->forge->addKey("id", TRUE);

        //membuat table news
        $this->forge->createTable("news", TRUE);
    }

    public function down()
    {
          //hapus table news
        $this->forge->dropTable("news");
    }
}
