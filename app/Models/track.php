<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;

    protected $fillable = [
        'etag',
        'PartitionKey',
        'RowKey',
        'asset_fleet_no',
        'asset_reg_no',
        'client_id',
        'client_tracking_id',
        'current_asset_position_coord',
        'current_asset_position_download_status',
        'current_asset_position_name',
        'current_asset_position_timestamp',
        'destination_coord',
        'destination_name',
        'dispatched_by',
        'distance_from_last_position',
        'distance_from_start',
        'distance_to_destination',
        'last_tracking_job_id',
        'movement_status',
        'return_destination_coord',
        'return_destination_name',
        'service_tracking_id',
        'start_position_coord',
        'start_position_name',
        'this_tracking_job_id',
        'time_hrs_since_last_asset_position',
        'tracking_interval',
        'tracking_type',
        'trip_eta',
        'trip_status'
    ];

    protected $casts = [

    ];
}
