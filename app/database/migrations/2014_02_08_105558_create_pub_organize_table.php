<?php

use Illuminate\Database\Migrations\Migration;

class CreatePubOrganizeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
       Schema::create('pub_organize',function($table) 
    {
         $table->increments('id');
         $table->string('OrganizeCode',20)->unique()->comment('编码');
         $table->string('FullName',100)->unique()->comment('部门名称'); 
         $table->string('ParentId',20)->comment('上级部门');
         $table->string('ShortName',20)->unique()->comment('简称'); 
         $table->string('Category',20)->comment('分类'); 
         $table->string('Layer',20)->comment('层级');
         $table->string('Address',100)->comment('地址');    
         $table->string('Tel',100)->comment('电话');
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
        Schema::drop('pub_organize');
	}

}