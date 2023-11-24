<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create("profiles" , function(Blueprint $table){
            $table->id();
            $table->string("name" , 50);
            $table->string("email" , 70)->unique();
            $table->string("password",40);
            $table->text("bio");
            $table->timestamps();
        });
    }

    public function down(){

        Schema::dropIfExists("profiles");
    }

};
