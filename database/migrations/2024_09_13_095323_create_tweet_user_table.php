<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tweet_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tweet_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->unique(['tweet_id', 'user_id']);
            $table->timestamps();
            $table->foreignid('bad_id')->after('user_id')->constrained('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tweet_user', function (Blueprint $table) {
        // 🔽 テーブル連携を削除 → カラム削除
        $table->dropForeign('tweet_user_bad_id_foreign');
        $table->dropColumn(['bad_id']);
        });
    }
};
