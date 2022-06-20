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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('texto_banner1');
            $table->string('texto_button1');
            $table->string('learn_buttons');
            $table->string('partners_buttons');
            $table->string('link_video');
            $table->string('rede_social1');
            $table->string('rede_social2');
            $table->string('rede_social3');
            $table->string('rede_social4');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('texto_footer');
            $table->string('brand_footer');
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
        Schema::dropIfExists('home');
    }
};
