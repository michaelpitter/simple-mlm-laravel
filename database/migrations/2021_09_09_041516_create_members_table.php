<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("address");
            $table->string("phone");
            $table->bigInteger('up_id')->unsigned()->nullable();
            $table->bigInteger('down1_id')->unsigned()->nullable();
            $table->bigInteger('down2_id')->unsigned()->nullable();
            $table->foreign('up_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('down1_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('down2_id')->references('id')->on('members')->onDelete('cascade');
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
        Schema::dropIfExists('members');
    }
}
