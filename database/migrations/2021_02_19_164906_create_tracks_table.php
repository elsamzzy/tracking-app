<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('etag');
            $table->string('PartitionKey')->default('492LZM');
            $table->uuid('RowKey')->unique();
            $table->timestamps();
            $table->string('asset_fleet_no', '10');
            $table->string('asset_reg_no', '25');
            $table->uuid('client_id')->unique();
            $table->uuid('client_tracking_id')->unique();
            $table->string('current_asset_position_coord')->unique();
            $table->string('current_asset_position_download_status')->default('NOT DOWNLOADING');
            $table->string('current_asset_position_name');
            $table->dateTime('current_asset_position_timestamp');
            $table->string('destination_coord')->default('6.4813042,3.3649151');
            $table->string('destination_name')->default('NBL IGANMU');
            $table->string('dispatched_by');
            $table->float('distance_from_last_position')->default('0.0');
            $table->float('distance_from_start');
            $table->float('distance_to_destination');
            $table->uuid('last_tracking_job_id')->unique()->nullable();
            $table->string('movement_status')->nullable();
            $table->string('return_destination_coord')->default('6.4813042,3.3649151');
            $table->string('return_destination_name')->default('NBL IGANMU');
            $table->string('service_tracking_id', '25')->unique();
            $table->string('start_position_coord')->default('5.1215877,7.3732655');
            $table->string('start_position_name')->default('NBL IGANMU');
            $table->uuid('this_tracking_job_id')->unique();
            $table->time('time_hrs_since_last_asset_position');
            $table->tinyInteger('tracking_interval')->default('30');
            $table->tinyInteger('tracking_type')->default('2');
            $table->string('trip_eta')->nullable();
            $table->string('trip_status')->default('DISPATCHED');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tracks');
    }
}
