<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('resumefile', function($rfile)
        {
            $rfile->increments('id');
            $rfile->string('name');
            $rfile->binary('file');
            $rfile->string('mime');
            $rfile->string('size');
            $rfile->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('resumefile');
	}

}
