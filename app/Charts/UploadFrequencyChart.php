<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class UploadFrequencyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Tần suất upload file')
            ->setSubtitle('Tần suất được cập nhật theo tháng.')
            ->addData('Số lần upload', [6, 9, 3, 4, 10, 8, 12])
            ->setColors(['#ffc63b'])
            ->setXAxis(['1/9', '5/9', '10/9', '15/9', '20/9', '25/9', '30/9'])
            ->setFontFamily("Sans")
            ->setHeight(300);
    }
}
