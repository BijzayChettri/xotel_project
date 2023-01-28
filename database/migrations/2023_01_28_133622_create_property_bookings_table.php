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
        Schema::create('property_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('custName')->nullable(true);
            $table->string('custEmail')->nullable(false);
            $table->string('custPhone')->nullable(false);
            $table->string('propertyName')->nullable(false);
            $table->string('propertyAddress')->nullable(false);
            $table->string('propertyPrice')->nullable(false);
            $table->string('Bookingstatus')->default('new');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('property_bookings');
    }
};
