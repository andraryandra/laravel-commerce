<?php

namespace App\Charts;

use App\Models\User;
use Illuminate\Support\Carbon;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class UserRegistrationChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserRegistrationData($numberOfMonths)
{
    $labels = [];
    $data = [];

    for ($i = $numberOfMonths - 1; $i >= 0; $i--) {
        $date = Carbon::now()->subMonths($i);
        $usersCount = User::whereYear('created_at', $date->year)
            ->whereMonth('created_at', $date->month)
            ->count();

        $labels[] = $date->format('M Y');
        $data[] = $usersCount;
    }

    return collect([
        'labels' => $labels,
        'data' => $data
    ]);
}

}
