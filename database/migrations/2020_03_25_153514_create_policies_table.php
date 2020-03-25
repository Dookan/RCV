<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('damage_things', 11, 2)->default('0');
            $table->decimal('premium1', 11, 2)->default('0');
            $table->decimal('damage_people', 11, 2)->default('0');
            $table->decimal('premium2', 11, 2)->default('0');
            $table->decimal('disability', 11, 2)->default('0');
            $table->decimal('premium3', 11, 2)->default('0');
            $table->decimal('legal_assistance', 11, 2)->default('0');
            $table->decimal('premium4', 11, 2)->default('0');
            $table->decimal('death', 11, 2)->default('0');
            $table->decimal('premium5', 11, 2)->default('0');
            $table->decimal('medical_expenses', 11, 2)->default('0');
            $table->decimal('premium6', 11, 2)->default('0');
            $table->decimal('crane', 11, 2)->default('0');
            $table->decimal('total_premium', 11, 2)->default('0');
            $table->decimal('total_all', 11, 2)->default('0');

            $table->softDeletes();
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
        Schema::dropIfExists('policies');
    }
}
