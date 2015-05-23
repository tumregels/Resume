<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('rfiles', function($rfile)
        {
            $rfile->increments('id');
            $rfile->string('name');
            //$rfile->binary('file');
            $rfile->string('mime');
            $rfile->string('size');
            $rfile->timestamps();
        });
        DB::statement("ALTER TABLE rfiles ADD file MEDIUMBLOB");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('rfiles');
	}

}
