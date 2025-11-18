<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Pastikan tabel 'tickets' sudah ada
        if (Schema::hasTable('tickets')) {
            Schema::table('tickets', function (Blueprint $table) {
                // Tambah kolom nama_tiket jika belum ada
                if (!Schema::hasColumn('tickets', 'nama_tiket')) {
                    $table->string('nama_tiket')->after('id')->nullable();
                }

                // Tambah kolom harga jika belum ada
                if (!Schema::hasColumn('tickets', 'harga')) {
                    $table->decimal('harga', 10, 2)->after('nama_tiket')->nullable();
                }

                // Tambah kolom detail jika belum ada
                if (!Schema::hasColumn('tickets', 'detail')) {
                    $table->text('detail')->after('harga')->nullable();
                }
            });
        } else {
            // Jika tabel belum ada, buat baru sekalian
            Schema::create('tickets', function (Blueprint $table) {
                $table->id();
                $table->string('nama_tiket')->nullable();
                $table->decimal('harga', 10, 2)->nullable();
                $table->text('detail')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        // Hapus kolom yang ditambahkan (jika rollback)
        if (Schema::hasTable('tickets')) {
            Schema::table('tickets', function (Blueprint $table) {
                if (Schema::hasColumn('tickets', 'nama_tiket')) {
                    $table->dropColumn('nama_tiket');
                }
                if (Schema::hasColumn('tickets', 'harga')) {
                    $table->dropColumn('harga');
                }
                if (Schema::hasColumn('tickets', 'detail')) {
                    $table->dropColumn('detail');
                }
            });
        }
    }
};
