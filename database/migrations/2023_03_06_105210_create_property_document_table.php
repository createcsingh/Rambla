<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_document', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('property_id'); 
			$table->bigInteger('user_id');
			$table->mediumtext('document');
			$table->string('document_name');
			$table->tinyInteger('category');
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
        Schema::dropIfExists('property_document');
    }
};
