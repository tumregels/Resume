<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('data', function($theData)
        {
            $theData->increments('id');
            $theData->string('firstname');
            $theData->string('lastname');
            $theData->string('keywords');
            $theData->string('pdffile'); //stands for filename
            $theData->timestamps();
            //$theData->binary('file');
            $theData->string('type');
            $theData->string('mime');
            $theData->string('size');
        });
        DB::statement("ALTER TABLE data ADD file MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('data');
    }

}
