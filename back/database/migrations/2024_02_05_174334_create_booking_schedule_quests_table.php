<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_schedule_quests', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('booking_id')->comment('Идентификатор бронирования')->constrained(table: 'bookings')
                ->cascadeOnDelete();
            $table->foreignId('schedule_quest_id')->comment('Идентификатор квеста')->constrained(table: 'schedule_quests')
                ->cascadeOnDelete();
            
            $table->tinyInteger('count_participants')->comment('Количество участников');
            $table->decimal('final_price')->comment('Конечная цена');
            $table->string('comment')->nullable()->comment('Комментарий');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_schedule_quests');
    }
};
