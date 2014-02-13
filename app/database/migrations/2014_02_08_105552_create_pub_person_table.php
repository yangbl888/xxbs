<?php

use Illuminate\Database\Migrations\Migration;

class CreatePubPersonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
                       Schema::create('pub_person',function($table) 
    {
         $table->increments('id');
         $table->string('IdNumber',20)->unique()->comment('身份证号'); 
         $table->string('Name',40)->comment('姓名');
         $table->string('Sex',10)->comment('性别');
         $table->string('Nation',10)->comment('民族');
         $table->string('Country',10)->comment('国别');
         $table->string('Address',100)->comment('住址');    
         $table->string('front',100)->comment('照片一');
         $table->string('left',100)->comment('照片二');         
         $table->timestamps();
         $table->boolean('Enabled')->comment('有效');
         $table->boolean('Deleted')->comment('删除');
         $table->string('Description')->comment('说明');
});}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('pub_person');
	}

}