<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('tasks')){
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
           
            $table->integer('days')->unsigned()->nullable();
             $table->integer('hours')->unsigned()->nullable();
             $table->integer('user_id')->unsigned()->nullable();
             $table->integer('project_id')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->nullable();
                      
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('project_id')->references('id')->on('companies');
    
            $table->timestamps();
        });
    }
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
