<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->longText('file');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('contact');
            $table->longText('address');
            $table->date('birthday');
            $table->longText('designation');
            $table->integer('basic_rate');
            
            $table->bigInteger('department_id')->unsigned()->index();
            $table->foreign('department_id')->references('id')
            ->on('departments')
            ->onDelete('cascade');
            

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
