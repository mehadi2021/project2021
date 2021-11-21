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
        Schema::create('members', function (Blueprint  $table) {
            $table->id();
             $table->string('date');
            $table->string('member_code');
            $table->string('center');
            $table->string('member_name');
            $table->string('h_name');
            $table->string('mother_name');
             $table->string('birth');
              $table->string('phone_num');
               $table->string('h_phone');
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
