<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class FileUploadedCountChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->addData([50])
            ->setLabels(['Tài liệu'])
            ->setGrid();
    }
}
