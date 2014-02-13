<?php

use Illuminate\Database\Migrations\Migration;

class CreateRbacModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('rbac_module',function($table) {
         $table->increments('id');
         $table->string('ModuleCode',20)->comment('模块编码');
         $table->string('ModuleName',20)->comment('模块标题'); 
         $table->string('Url',100)->comment('链接地址');
         $table->string('SmallLogo',100)->comment('小图标');
         $table->string('LargeLogo',100)->comment('大图标');         
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
        Schema::drop('rbac_module');
	}

}