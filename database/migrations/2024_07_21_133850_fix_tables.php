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
        Schema::table('shipyard_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('shorebase_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('supply_chain_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('fuel_retail_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('tank_storage_terminal_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('agro_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });

        Schema::table('gas_dashboards', function (Blueprint $table) {
            $table->text('title');
            $table->text('link');
            $table->boolean('finance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shipyard_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('shorebase_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('supply_chain_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('fuel_retail_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('tank_storage_terminal_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('agro_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });

        Schema::table('gas_dashboards', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'finance']);
        });
    }
};
