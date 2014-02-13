<?php

use Illuminate\Database\Migrations\Migration;

class CreateRbacMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
              Schema::create('rbac_menu',function($table) 
    {
         $table->increments('id');
         $table->string('MenuCode',20)->comment('菜单编码');
         $table->string('MenuName',20)->comment('菜单标题'); 
         $table->string('ParentCode',20)->comment('上级菜单');
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
        Schema::drop('rbac_menu');
	}

}