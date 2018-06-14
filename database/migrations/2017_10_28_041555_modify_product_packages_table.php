<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyProductPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_packages', function (Blueprint $table) {
            $table->string('name', 16)->after('product_id')->nullable()->change();
            $table->double('volume')->after('name');
            $table->string('volume_unit', 8)->after('volume');
            $table->string('volume_unit_text', 8)->after('volume_unit');
            $table->dropUnique(['name', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_packages', function (Blueprint $table) {
            //
        });
    }
}
