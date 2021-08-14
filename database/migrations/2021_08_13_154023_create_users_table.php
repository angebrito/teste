<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
	
	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
            $table->increments('id');
			$table->string('nome');
			$table->string('email');
            $table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('user');
	}
}
