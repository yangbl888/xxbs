<?php

use Illuminate\Database\Migrations\Migration;

class CreateRbacRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
               Schema::create('rbac_role',function($table) 
    {
         $table->increments('id');
         $table->string('RoleName',20)->comment('角色名称'); 
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
        Schema::drop('rbac_role');
	}

}