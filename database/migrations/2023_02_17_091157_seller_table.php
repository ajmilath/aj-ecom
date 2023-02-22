<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sellers_tbl',function(Blueprint $table){
            $table->id();
            $table->string('name',50);
            $table->string('email', 100);
            $table->string('address', 200);
            $table->string('phone', 20);
            $table->string('gender', 20);
            $table->string('company_name',100);
            $table->string('acc_holder_name',50);
            $table->string('ifsc',40);
            $table->string('banch',50);
            $table->string('acc_name',50);
            $table->string('seller_image',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
