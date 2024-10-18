<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('subscribers')) {
            Schema::create('subscribers', function (Blueprint $table) {
                $table->id();
                $table->string('email')->unique();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->enum('status', ['active', 'unsubscribed', 'bounced'])->default('active');
                $table->timestamps();
            });
        } else {
            // If the table already exists, you might want to add any missing columns
            Schema::table('subscribers', function (Blueprint $table) {
                if (!Schema::hasColumn('subscribers', 'first_name')) {
                    $table->string('first_name')->nullable()->after('email');
                }
                if (!Schema::hasColumn('subscribers', 'last_name')) {
                    $table->string('last_name')->nullable()->after('first_name');
                }
                if (!Schema::hasColumn('subscribers', 'status')) {
                    $table->enum('status', ['active', 'unsubscribed', 'bounced'])->default('active')->after('last_name');
                }
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
};
