<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commentaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires',function(Blueprint $table){
            $table->incriment('commentaire_id');
            $table->primary('commentaire_id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->boolean('public')->default(true);
            $table->timestamp('public_at');
            $table->unsignedInteger('user_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
            $table->boolean('is_deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
