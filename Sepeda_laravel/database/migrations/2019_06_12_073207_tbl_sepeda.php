<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSepeda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_sepeda',function(
            blueprint $table){
            $table->increments('id');
            $table->string('no_seri',10);
            $table->string('nama',100);
            $table->string('jenis',75);
            $table->string('warna',30);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drob('tbl_sepeda');
    }
}
