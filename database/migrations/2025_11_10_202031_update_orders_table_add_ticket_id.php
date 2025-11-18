<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // hapus kolom lama jika masih ada
            if (Schema::hasColumn('orders', 'nama_ticket')) {
                $table->dropColumn('nama_ticket');
            }

            // tambahkan relasi ke tabel tickets
            if (!Schema::hasColumn('orders', 'ticket_id')) {
                $table->foreignId('ticket_id')->constrained('tickets')->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'ticket_id')) {
                $table->dropForeign(['ticket_id']);
                $table->dropColumn('ticket_id');
            }

            $table->string('nama_ticket')->nullable();
        });
    }
};
