<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_loans', function (Blueprint $table) {
            $table->id();
            $table->string('notes');
            $table->double('amount');
            $table->longText('months_payable');

            $table->bigInteger('employee_id')->unsigned()->index();
            $table->foreign('employee_id')->references('id')
            ->on('employee')
            ->onDelete('cascade');

            $table->bigInteger('loan_type_id')->unsigned()->index();
            $table->foreign('loan_type_id')->references('id')
            ->on('loan_type')
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
        Schema::dropIfExists('all_loans');
    }
}
