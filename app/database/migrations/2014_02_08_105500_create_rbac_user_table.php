<?php

use Illuminate\Database\Migrations\Migration;

class CreateRbacUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('rbac_user',function($table) 
    {
         $table->increments('id');
         $table->string('UserId',20)->unique()->comment('用户Id'); 
         $table->string('Email',64)->unique()->comment('邮箱');
         $table->string('UserName',20)->comment('用户姓名');
         $table->string('IDnumber',18)->comment('身份证号');
         $table->string('Password',60)->comment('密码');
         $table->boolean('Disabled')->comment('禁止');
         $table->boolean('Deleted')->comment('删除');
         $table->timestamps();
  	});
    
    FOR ($i = 1; $i <= 20; $i++) 
      {
          DB::table('rbac_user')->insert(array( 
                        'UserId'=>'test'.$i,
                        'Email'=>'74419146'.$i.'@qq.com',
                        'Password'=>Hash::make('qjga5012'),
                        'created_at'=>date('Y-m-d H:i:s'), //保存当前时间
                        )); 
     
        }                                      
     }
    

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
         Schema::drop('rbac_user'); 
	}

}