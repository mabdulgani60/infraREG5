@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
@endsection
@section('contant')
<link rel="stylesheet" href="assets/style_login/css/styles.css">
<div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item active">Singaraja</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/singarajaa.png" width="1250" alt="">

          <a href="/dashboard/GILIMANUK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 160px;
            left: 140px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">GMK</button></a>

            <a href="/dashboard/SERIRIT"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 180px;
            left: 570px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">SRR</button></a>

            <a href="/dashboard/LOVINA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
            left: 650px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">LVN</button></a>

            <a href="/dashboard/SINGARAJA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 100px;
            left: 720px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">SGR</button></a>

            <a href="/dashboard/NEGARA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 335px;
            left: 300px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">NGR</button></a>

            <a href="/dashboard/PUPUAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 290px;
            left: 640px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">PUA</button></a>

            <a href="/dashboard/BATURITI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 290px;
            left: 800px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">BTR</button></a>

            <a href="/dashboard/KINTAMANI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 240px;
            left: 950px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">KNT</button></a>

            <a href="/dashboard/TABANAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 370px;
            left: 660px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">TBN</button></a>

            <a href="/dashboard/SEMARAPURA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 340px;
            left: 900px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">SMA</button></a>

            <a href="/dashboard/TAMPAK SIRING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 380px;
            left: 920px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">TPS</button></a>

            <a href="/dashboard/BANGLI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 420px;
            left: 960px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">BLI</button></a>

            <a href="/dashboard/UBUD"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 460px;
            left: 880px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">UBU</button></a>

            <a href="/dashboard/GIANYAR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 500px;
            left: 940px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">GIN</button></a>

            <a href="/dashboard/CANDIDASA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 450px;
            left: 1100px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">CDS</button></a>

            <a href="/dashboard/AMLAPURA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 410px;
            left: 1190px;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: red;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            opacity: 0.6;">APR</button></a>
      </div>
    </div>    
</div>
  

  


  
@endsection
