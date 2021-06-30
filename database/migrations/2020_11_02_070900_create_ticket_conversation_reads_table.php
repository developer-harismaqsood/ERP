<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketConversationReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_conversation_reads', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ticket_conversation_id')->constrained();

            $table->enum('actor', ['USER', 'IBO', 'ADMIN'])->nullable();
            $table->foreignId('actor_id')->nullable()->constrained('users');

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
        Schema::dropIfExists('ticket_conversation_reads');
    }
}
