<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class  extends Migration
{
    public function up()
    {
        Schema::create('All_tab', function (Blueprint $table) {
            $table->integer("number")->unique();
            $table->json('array'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('All_tab');
    }
};