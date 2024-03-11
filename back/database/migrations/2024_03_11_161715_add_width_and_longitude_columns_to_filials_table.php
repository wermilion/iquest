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
        Schema::table('filials', function (Blueprint $table) {
            $table->decimal('width', 10, 6)->comment('Координата по ширине');
            $table->decimal('longitude', 10, 6)->comment('Координата по долготе');

            $table->dropColumn('yandex_mark');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('filials', function (Blueprint $table) {
            $table->dropColumn('width');
            $table->dropColumn('longitude');

            $table->string('yandex_mark')->nullable()->comment('Яндекс метка');
        });
    }
};
