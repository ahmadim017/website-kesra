@extends('layouts.sbadmin')

@section('content')

  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card bg-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-s font-weight-bold text-white text-uppercase mb-1">Total Permohonan Masuk</div>
              <div class="h6 mb-0 font-weight-bold text-white">{{$permohonan}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-bar-chart fa-2x  text-gray-300" ></i>
            </div>
          </div>
        
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-s font-weight-bold text-white text-uppercase mb-1">Verifikasi</div>
                <div class="h6 mb-0 font-weight-bold text-white">{{$verifikasi}}</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-bar-chart fa-2x  text-gray-300" ></i>
              </div>
            </div>
          
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-dark shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-s font-weight-bold text-white text-uppercase mb-1">Tidak Sesuai</div>
                <div class="h6 mb-0 font-weight-bold text-white">{{$tidaksesuai}}</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-bar-chart fa-2x  text-gray-300" ></i>
              </div>
            </div>
           
          </div>
        </div>
      </div>
  

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-s font-weight-bold text-white text-uppercase mb-1">Total Diterima</div>
            <div class="h6 mb-0 font-weight-bold text-white">{{$diterima}}</div>
          </div>
          <div class="col-auto">
            <i class="fa fa-bar-chart fa-2x  text-gray-300"></i>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>
  
<div class="row">
    <div class="col-xl-6 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-secondary">Data Rumah Ibadah Berdsarkan Kecamatan</h6>
        </div>
          <div class="card-body">
          <div id="container3"></div>
          </div>
      </div>
    </div>
  
  <div class="col-xl-6 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Data Guru Baca/Tulis Al-Qur'an Berdasarkan Kecamatan</h6>
      </div>
      <div class="card-body ">
      <div id="container2"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Data Kelembagaan Berdasarkan Kecamatan</h6>
      </div>
        <div class="card-body">
        <div id="container1"></div>
        </div>
    </div>
  </div>
</div>

<br>
@endsection
@section('footer')
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <script src="https://code.highcharts.com/modules/export-data.js"></script>
<script type="text/javascript"> 
Highcharts.chart('container3', {
    chart: {
        type: 'bar'
        //height: 200+50
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Penajam','Waru','Babulu','Sepaku'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Sarana Ibadah Per Kecamatan',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
   
    credits: {
        enabled: false
    },
    series: [{
        name: 'Jumlah Sarana Ibadah',
        data: {!!json_encode($totalkecamatan)!!},
        color: '#6c757d'
    },
    {
      name : 'Jumlah Masjid',
      data : {!!json_encode($totalmasjid)!!},
      color: '#17a2b8'
    },
    {
      name : 'Jumlah Mushola',
      data : {!!json_encode($totalmushola)!!},
      color: '#f15c80'
    
    }] 
});

Highcharts.chart('container1', {
    chart: {
        type: 'bar'
        //height: 200+50
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Penajam','Waru','Babulu','Sepaku'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Sarana Ibadah Per Kecamatan',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
   
    credits: {
        enabled: false
    },
    series: [{
        name: 'Jumlah Sarana Ibadah',
        data: {!!json_encode($totalkecamatan)!!},
        color: '#6c757d'
    },
    {
      name : 'Jumlah Masjid',
      data : {!!json_encode($totalmasjid)!!},
      color: '#17a2b8'
    },
    {
      name : 'Jumlah Mushola',
      data : {!!json_encode($totalmushola)!!},
      color: '#f15c80'
    
    }] 
});

Highcharts.chart('container2', {
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
        pointFormat: '{series.name}: <b>{point.y} Jumlah</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y} Jumlah'
            }
        }
    },
    credits: {
    enabled: false
  },
    series: [{
        name: 'Kecamatan',
        colorByPoint: true,
        data: {!!json_encode($data)!!}
    }]
});

    </script>  
          @endsection