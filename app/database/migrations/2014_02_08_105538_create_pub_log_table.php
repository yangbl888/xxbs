<?php

use Illuminate\Database\Migrations\Migration;

class CreatePubLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
               Schema::create('pub_log',function($table) 
    {
         $table->increments('id');
         $table->string('UserId',20)->comment('用户ID'); 
         $table->string('IP',40)->comment('访问地址');
         $table->string('Operation',100)->comment('操作');
       $table->timestamps();
});}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('pub_log');
	}

}