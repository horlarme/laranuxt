<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bio')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_github')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_linkedin')->nullable();
        });
        // using another call cause of sqlite, it reverts
        // every other changes if chained together
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'full_name');
        });

    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'bio',
                'social_linkedin',
                'social_facebook',
                'social_twitter',
                'social_instagram',
                'social_github'
            ]);
            $table->renameColumn('full_name', 'name');
        });
    }
};
