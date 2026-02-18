<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PresensiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
        ->setTitle('Diagram Presensi')
        ->addData([120, 200, 300, 250])
        ->setLabels(['Hadir', 'Alfa', 'Mar'])
        ->setColors(['#4CAF50', '#2196F3', '#FF9800'])
        // Gunakan setOptions dengan struktur legenda yang benar
        ->setOptions([
            'legend' => [
                'position' => 'bottom',
                'horizontalAlign' => 'center'
            ]
        ]);
        
    }
}
