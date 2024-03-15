<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class FileStorageCapacity
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Tiến độ công việc')
            ->addData([45, 45 , 10])
            ->setLabels(['Hoàn thành', 'Đang tiến hành', 'Không thể hoàn thành'])
            ->setFontFamily("Sans")
            ->setHeight(300);

    }
}
