@extends('layouts.app')

@section('content')
<div class="container">
  <h3 class="text-center">
    [{{$user->points}}]
    {{$user->name}}
    <i class="fa fa-users"></i>
  </h3>
  <hr />
  

  
</div>

@endsection

@section('chart')
<div class="container">
  <canvas id="myChart"></canvas>
  
    <section class="analyzing">
    <div class="item">
      <h4>
        {{$user->name}} [ {{ $user->points}} ] </h4>
        <hr />
    
    <!-- check if he add any information --->
    
    @if($user->facebook OR $user->twitter OR $user->instagram OR $user->about) 
      <h5>
        {{$user->about}}
        <hr />
        
        <!--- social icons --->
        <div class="icons">
            
        @if($user->facebook) 
        <a href="{{ $user->facebook }}" target="_blank">
        <i class="icon fab fa-facebook-square"></i></a> @endif
        
         @if($user->twitter) 
            <a href="{{ $user->twitter }}" target="_blank">
            <i class="icon fab fa-twitter-square"></i> @endif
            
         @if($user->instagram) 
            <a href="{{ $user->instagram }}" target="_blank">
            <i class="icon fab fa-instagram-square"></i>@endif
            
        </div>
        <!-- end social icons -->
        
      </h5>
        @endif
        
    </div>
  </section>
  
</div>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@push('css')
  <style>
    .icon {
     padding:  3px;
      font-size: 30px;
      width:50px !important;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
    }
    
.fa-instagram-square {
  background: #125688;
  color: white;
}lor: white;
}

    .fab:hover {
        opacity: 0.7;
    }
    
    .fa-facebook-square {
      background: #3B5998;
      color: white;
    }
    
    .fa-twitter-square {
      background: #55ACEE;
      color: white;
    }

    #myChart {
      display: none
    }
    .analyzing {
      margin-bottom: 20px;
    }
    .analyzing .item {
      text-align: right;
      background: #fff;
      padding: 20px;
      margin: 10px;
      box-shadow: 2px 2px 10px #eee, -2px -2px 10px #eee;
    }
    .analyzing .item:hover {
      transition: all ease .5s;
      box-shadow: 2px 2px 30px #eee, -2px -2px 30px #eee;
    }
    .analyzing .item a{
      text-decoration: none;
      color:#000
    }
  </style>
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: {!! $user->challangesSloved->pluck("name") !!},
        datasets: [{
            label: "تحليل النقاط",
            data: {!! $user->challangesSloved->pluck('points') !!},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(100, 159, 64, 0.2)',
                'rgba(120, 159, 64, 0.2)',
                'rgba(110, 159, 64, 0.2)',
                'rgba(190, 159, 64, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endpush
