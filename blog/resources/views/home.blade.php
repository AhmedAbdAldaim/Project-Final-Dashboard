@extends('includes.newnav')

@section('js')
{{-- For char --}}


@endsection
@section('style','background-image:url(../assets/demo/default/media/img/logo/favicon.ico)')

@section('content')
<div class="row">
    <div class="col-md-6"><canvas id="all"></canvas></div>
    
    <div class="col-md-6"><canvas id="all2"></canvas></div>
</div>



{{$hospitals->count()}}
<script>
    $hospitals = {{!! json_encode($hospitals->count())!!}}
    $hospitalw = {{!! json_encode($hospitals->count())!!}}
</script>

<script>
var ctx = document.getElementById('all').getContext('2d');

var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'doughnut',

// The data for our dataset
data: {
labels: ['Active', 'Non Active',''],

datasets: [{
   
    backgroundColor: [
        '#00c5dc',
        '#f4516c'
    ],
    // borderColor: 'rgb(0, 0,1, 0)',
    data: [{{ $hospitals->count() }},90]
}]
},

// Configuration options go here
options: {}
});

</script>
@endsection
