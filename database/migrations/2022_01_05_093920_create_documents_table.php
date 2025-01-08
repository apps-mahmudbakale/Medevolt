<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('cv');
            $table->string('guarantor_form');
            $table->string('refone');
            $table->string('reftwo');
            $table->string('degree');
            $table->string('licence');
            $table->string('drivers_licence');
            $table->string('identity')->nullable();
            $table->string('photo');
            $table->string('proof_add_one');
            $table->string('proof_add_two');
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
        Schema::dropIfExists('documents');
    }
}
