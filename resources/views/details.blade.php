@extends('layout.app')

@section('content')
    <div class="container pt-5">
        <!-- ============================================================== -->
        <!-- hoverable table -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">{{ __('Details of client ID:') }} {{ $current['client_id'] }} {{ __('Time:') }} {{ $current['created_at'] }}</h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">{{ __('Label') }}</th>
                            <th scope="col">{{ __('Information') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{ __('odata.etag') }}</th>
                            <td colspan="2">{{ $current['etag'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('PartitionKey') }}</th>
                            <td colspan="2">{{ $current['PartitionKey'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('RowKey') }}</th>
                            <td colspan="2">{{ $current['RowKey'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('Timestamp') }}</th>
                            <td colspan="2">{{ $current['created_at'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('asset_fleet_no') }}</th>
                            <td colspan="2">{{ $current['asset_fleet_no'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('asset_reg_no') }}</th>
                            <td colspan="2">{{ $current['asset_reg_no'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('client_id') }}</th>
                            <td colspan="2">{{ $current['client_id'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('client_tracking_id') }}</th>
                            <td colspan="2">{{ $current['client_tracking_id'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('current_asset_position_coord') }}</th>
                            <td colspan="2">{{ $current['current_asset_position_coord'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('current_asset_position_download_status') }}</th>
                            <td colspan="2">{{ $current['current_asset_position_download_status'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('current_asset_position_name') }}</th>
                            <td colspan="2">{{ $current['current_asset_position_name'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('current_asset_position_timestamp') }}</th>
                            <td colspan="2">{{ $current['current_asset_position_timestamp'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('destination_coord') }}</th>
                            <td colspan="2">{{ $current['destination_coord'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('destination_name') }}</th>
                            <td colspan="2">{{ $current['destination_name'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('dispatched_by') }}</th>
                            <td colspan="2">{{ $current['dispatched_by'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('distance_from_last_position') }}</th>
                            <td colspan="2">{{ $current['distance_from_last_position'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('distance_from_start') }}</th>
                            <td colspan="2">{{ $current['distance_from_start'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('distance_to_destination') }}</th>
                            <td colspan="2">{{ $current['distance_to_destination'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('movement_status') }}</th>
                            <td colspan="2">{{ $current['movement_status'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('return_destination_coord') }}</th>
                            <td colspan="2">{{ $current['return_destination_coord'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('return_destination_name') }}</th>
                            <td colspan="2">{{ $current['return_destination_name'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('service_tracking_id') }}</th>
                            <td colspan="2">{{ $current['service_tracking_id'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('start_position_coord') }}</th>
                            <td colspan="2">{{ $current['start_position_coord'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('start_position_name') }}</th>
                            <td colspan="2">{{ $current['start_position_name'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('this_tracking_job_id') }}</th>
                            <td colspan="2">{{ $current['this_tracking_job_id'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('time_hrs_since_last_asset_position') }}</th>
                            <td colspan="2">{{ $current['time_hrs_since_last_asset_position'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('tracking_interval') }}</th>
                            <td colspan="2">{{ $current['tracking_interval'] }}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{ __('tracking_type') }}</th>
                            <td colspan="2">{{ $current['tracking_type'] }}</td>
                        </tr>
                            <th scope="row">{{ __('trip_eta') }}</th>
                            <td colspan="2">{{ $current['trip_eta'] }}</td>
                        </tr>
                            <th scope="row">{{ __('trip_status') }}</th>
                            <td colspan="2">{{ $current['trip_status'] }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end hoverable table -->
        <!-- ============================================================== -->
    </div>
@endsection
