@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-2">
                <div class="card-body">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-9">
                        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

                        {{-- {{  $alunos }} --}}
                        {{-- style="width:100%;max-width:600px" --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    @section('footer')
        @include('footer')
    @endsection

    <script>

        var xValues = ["Preta", "Marron", "Roxa", "Azul", "Branca", "Pedentes", "Pagos", "Academia", "Projeto Socials", "Em Atraso"];
        var yValues = [60, 49, 44, 24, 15, 50, 21, 60, 50, 10, 5];
        var barColors = [
            "#000000",
            "#C63203",
            "#8E03C6",
            "#1803C6",
            "#E1E1E1",
            "#EEF200",
            "#16D000",
            "#AEAFAE",
            "#158703",
            "#F10000",
        ];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "World Wine Production 2018"
                }
            }
        });
    </script>
@endsection
