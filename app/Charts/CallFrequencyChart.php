<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Http;

class CallFrequencyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // $nghiPhep = Http::withHeaders(['token' => auth()->user()->authToken])->get('https://apihr.weos.vn/api/dvcc/lay-phep-nghi');

        // $nghiPhepData = $nghiPhep->json();
        // $currentMonth = date('m');
        // $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, date('Y'));
        // $modifiedData = array_filter($nghiPhepData['content'], function ($item) use ($currentMonth) {
        //     return date('m', strtotime($item['thoigian'])) === $currentMonth;
        // });
        // $xAxis = [];
        // $data = array_fill(0, $daysInMonth, 0);

        // foreach ($modifiedData as $item) {
        //     $day = (int)date('d', strtotime($item['thoigian']));
        //     $data[$day - 1]++;
        // }

        return $this->chart->lineChart()
            ->setTitle('Tần suất duyệt đơn cho nhân viên.')
            // ->addData('Duyệt', $data)
            // ->setXAxis($xAxis)
            ->setFontFamily("Sans")
            ->setGrid();
    }
}
