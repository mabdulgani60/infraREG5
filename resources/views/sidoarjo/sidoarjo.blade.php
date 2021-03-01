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
                <li class="breadcrumb-item active">Sidoarjo</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/sdaa.png" alt="">

          <a href="/dashboard/PLOSO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 170px;
            left: 80px;
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
            opacity: 0.6;">POS</button></a>

            <a href="/dashboard/JOMBANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 340px;
            left: 110px;
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
            opacity: 0.6;">JOM</button></a>

            <a href="/dashboard/NGORO JOMBANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 480px;
            left: 110px;
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
            opacity: 0.6;">NRJ</button></a>

            <a href="/dashboard/MOJOAGUNG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 340px;
            left: 280px;
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
            opacity: 0.6;">MOJ</button></a>

            <a href="/dashboard/DLANGGU"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 340px;
            left: 400px;
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
            opacity: 0.6;">DLA</button></a>

            <a href="/dashboard/MOJOKERTO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 190px;
            left: 370px;
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
            opacity: 0.6;">MRT</button></a>

            <a href="/dashboard/MLIRIP"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
            left: 370px;
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
            opacity: 0.6;">MIP</button></a>

            <a href="/dashboard/MOJOSARI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 270px;
            left: 480px;
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
            opacity: 0.6;">MJS</button></a>

            <a href="/dashboard/PACET"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 410px;
            left: 460px;
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
            opacity: 0.6;">PCT</button></a>

            <a href="/dashboard/NGORO INDUSTRI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 290px;
            left: 550px;
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
            opacity: 0.6;">NGI</button></a>

            <a href="/dashboard/PRIGEN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 500px;
            left: 620px;
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
            opacity: 0.6;">PGE</button></a>

            <a href="/dashboard/PANDAAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 450px;
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
            opacity: 0.6;">PDA</button></a>

            <a href="/dashboard/PURWOSARI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 580px;
            left: 760px;
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
            opacity: 0.6;">PWS</button></a>

            <a href="/dashboard/BEJI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 350px;
            left: 760px;
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
            opacity: 0.6;">BEJ</button></a>

            <a href="/dashboard/GEMPOL"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 310px;
            left: 710px;
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
            opacity: 0.6;">GEM</button></a>

            <a href="/dashboard/TULANGAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 250px;
            left: 740px;
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
            opacity: 0.6;">TUN</button></a>

            <a href="/dashboard/SIDOARJO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 180px;
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
            opacity: 0.6;">SDA</button></a>

            <a href="/dashboard/SUKODONO"><button class="btn" data-toggle="modal" style="position: absolute;
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
            opacity: 0.6;">SDN</button></a>

            <a href="/dashboard/gda"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 100px;
            left: 750px;
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
            opacity: 0.6;">GDA</button></a>

            <a href="/dashboard/KRIAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 120px;
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
            opacity: 0.6;">KRN</button></a>

            <a href="/dashboard/SEPANJANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 50px;
            left: 700px;
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
            opacity: 0.6;">SPJ</button></a>

      </div>
    </div>
    
</div>
  

  


  
@endsection
