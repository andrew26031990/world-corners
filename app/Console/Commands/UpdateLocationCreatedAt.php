<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class UpdateLocationCreatedAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:location-created-at';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update created_at for all locations with random dates';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $locations = Location::all(); // Get all locations

        foreach ($locations as $location) {
            $startDate = Carbon::createFromDate(2022, 1, 1)->startOfDay();
            $endDate = Carbon::now();

            $randomTimestamp = mt_rand($startDate->timestamp, $endDate->timestamp);

            $randomDate = Carbon::createFromTimestamp($randomTimestamp);

            $location->created_at = $randomDate;
            $location->save();

            $this->info("Updated location (ID: {$location->id}) with date {$randomDate}");
        }

        $this->info('All locations updated successfully.');
    }
}
