<?php

namespace Marsudi\JwtRefreshAccessToken;

use Illuminate\Support\ServiceProvider;

class MigrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Schema::create('refresh_tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('refresh_token');
            $table->timestamps();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigration();
    }

    /**
     * Publish migration file.
     *
     * @return void
     */
    protected function publishMigration()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_table_refresh_tokens.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_table_refresh_tokens.php'),
        ], 'migrations');
    }
}

