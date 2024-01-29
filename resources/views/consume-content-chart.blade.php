@extends('consume-header-datatable')
@push('consume.styles')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/testChart.js') }}"></script>
    
@endpush

@section('consume.content')
    <div class="mt-5">
        <canvas id="barChart" width="400" height="200"></canvas>
        <canvas id="lineChart" width="400" height="200"></canvas>
    </div>
@endsection