<?php

use Illuminate\Database\Migrations\Migration;

class CreatePubSequenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
                       Schema::create('pub_sequence',function($table) 
    {
         $table->increments('id');
         $table->string('SequenceName',20)->comment('序列名称'); 
         $table->string('Prefix',40)->comment('前缀');
         $table->string('Format',100)->comment('格式'); 
         $table->integer('Step')->comment('步长');
         $table->integer('Start')->comment('初始值');
         $table->integer('SequenceLen')->comment('序列位数');      
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
        Schema::drop('pub_sequence');
	}

}