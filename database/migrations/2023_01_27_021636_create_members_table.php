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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('membership_type');
            $table->date('membership_expiration_date');
            $table->foreignId('trainer_id')
            ->references('id')->on('trainers')
            ->onDelete('cascade');
   
            $table->timestamps();
        });
    }
             // PRIMARY KEY (id),
            // FOREIGN KEY (trainer_id) REFERENCES trainers(id),
            // FOREIGN KEY (membership_id) REFERENCES memberships(id)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
