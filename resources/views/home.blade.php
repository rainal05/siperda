@extends('layouts.backend')

@section('content')
    @if (auth()->user()->role == 'admin')
        <main>
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="table-responsive">

                            <div id="grafik">
                            </div>

                            <div id="gr">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @section('grafik')
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script>
                Highcharts.chart('grafik', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Grafik Pengaduan'
                    },
                    xAxis: {
                        categories: [
                            ''
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: ''
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y:1f} Orang</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                            name: 'Semua Pengaduan',
                            data: [{!! json_encode($all) !!}]

                        }, {
                            name: 'Pungli',
                            data: [{!! json_encode($pungli) !!}]

                        },
                        {
                            name: 'PKL',
                            data: [{!! json_encode($pkl) !!}]

                        },
                        {
                            name: 'Anjal',
                            data: [{!! json_encode($anjal) !!}]

                        },
                        {
                            name: 'Gepeng',
                            data: [{!! json_encode($gepeng) !!}]

                        },
                        {
                            name: 'Dll',
                            data: [{!! json_encode($dll) !!}]

                        }
                    ]
                });
            </script>
        @endsection
    @endif
    @if (auth()->user()->role == 'user')
        <h1 class="text-center">Selamat Datang </h1>
    @endif
@endsection
