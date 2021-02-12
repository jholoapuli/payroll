<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->date('start');
            $table->date('end');
            $table->LongText('notes');

            $table->bigInteger('employee_id')->unsigned()->index();
            $table->foreign('employee_id')->references('id')
            ->on('employees')
            ->onDelete('cascade');

            $table->bigInteger('leave_type_id')->unsigned()->index();
            $table->foreign('leave_type_id')->references('id')
            ->on('leave_type')
            ->onDelete('cascade');
            
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
