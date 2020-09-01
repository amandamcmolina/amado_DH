<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem_produtos', function (Blueprint $table) {
            $table->id();
            
            $table->string('caminhoDaImagem');
            $table->foreignId('produto_id')->constrained(); //model_id da tabela - constrained fará a busca
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
        Schema::dropIfExists('imagem_produtos');
    }
}