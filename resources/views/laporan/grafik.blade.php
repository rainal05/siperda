@extends('layouts.backend')

@section('content')
    @if (auth()->user()->role == 'admin')
        <main>
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <p align="center"><b>Pelanggaran Berdasarkan Pengaduan</b></p>
                            <hr>
                            <div id="grafik">
                            </div>

                            <div id="gr">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endif
@endsection

@section('grafik')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('grafik', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                        name: 'Semua Kecamatan',
                        y: {!! json_encode($all) !!},
                        sliced: true,
                        selected: true
                    },
                    {
                        name: 'Alam Barajo',
                        y: {!! json_encode($albar) !!}
                    },
                    {
                        name: 'Kota Baru',
                        y: {!! json_encode($kobar) !!}
                    },
                    {
                        name: 'Jambi Selatan',
                        y: {!! json_encode($jamsel) !!}
                    },
                    {
                        name: 'Paal Merah',
                        y: {!! json_encode($pamer) !!}
                    },
                    {
                        name: 'Jelutung',
                        y: {!! json_encode($jel) !!}
                    },
                    {
                        name: 'Pasar Jambi',
                        y: {!! json_encode($pasar) !!}
                    },
                    {
                        name: 'Telanaipura',
                        y: {!! json_encode($tl) !!}
                    },
                    {
                        name: 'Danau Sipin',
                        y: {!! json_encode($dansip) !!}
                    },
                    {
                        name: 'Pelayangan',
                        y: {!! json_encode($pel) !!}
                    },
                    {
                        name: 'Jambi Timur',
                        y: {!! json_encode($jatim) !!}
                    }
                ]
            }]
        });
    </script>
@endsection
