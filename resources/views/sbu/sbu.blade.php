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
                <li class="breadcrumb-item active">SBU</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/sbuu2.png" width="950px" alt="">

          <a href="/dashboard/BRONDONG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
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
            opacity: 0.6;">BDG</button></a>

            <a href="/dashboard/BAWEAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 130px;
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
            opacity: 0.6;">BWN</button></a>

            <a href="/dashboard/MERGOYOSO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 160px;
            left: 510px;
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
            opacity: 0.6;">MGO</button></a>

            <a href="/dashboard/SEDAYU"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 230px;
            left: 510px;
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
            opacity: 0.6;">SDY</button></a>

            <a href="/dashboard/PONGANGAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 300px;
            left: 520px;
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
            opacity: 0.6;">POG</button></a>

            <a href="/dashboard/GRESIK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 360px;
            left: 580px;
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
            opacity: 0.6;">GSK</button></a>

            <a href="/dashboard/DUDUK SAMPEYAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 360px;
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
            opacity: 0.6;">DDS</button></a>

            <a href="/dashboard/LAMONGAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 320px;
            left: 390px;
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
            opacity: 0.6;">LMG</button></a>

            <a href="/dashboard/SUKODADI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 290px;
            left: 320px;
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
            opacity: 0.6;">SKD</button></a>

            <a href="/dashboard/BABAD"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 320px;
            left: 260px;
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
            opacity: 0.6;">BBA</button></a>

            <a href="/dashboard/BALONG PANGGANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 450px;
            left: 420px;
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
            opacity: 0.6;">BPG</button></a>

            <a href="/dashboard/CERME"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 430px;
            left: 520px;
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
            opacity: 0.6;">CRM</button></a>

            <a href="/dashboard/KALIANAK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 410px;
            left: 580px;
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
            opacity: 0.6;">KLA</button></a>

            <a href="/dashboard/KEBALEN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 430px;
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
            opacity: 0.6;">KBL</button></a>

            <a href="/dashboard/KAPASAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 455px;
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
            opacity: 0.6;">KPS</button></a>

            <a href="/dashboard/KENJERAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 470px;
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
            opacity: 0.6;">KJR</button></a>

            <a href="/dashboard/KANDANGAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 450px;
            left: 580px;
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
            opacity: 0.6;">KNN</button></a>

            <a href="/dashboard/KEDAMEAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 470px;
            left: 500px;
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
            opacity: 0.6;">KDM</button></a>

            <a href="/dashboard/LAKARSANTRI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 510px;
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
            opacity: 0.6;">LKS</button></a>

            <a href="/dashboard/KARANG PILANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 560px;
            left: 520px;
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
            opacity: 0.6;">KRP</button></a>

            <a href="/dashboard/BAMBE"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 500px;
            left: 580px;
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
            opacity: 0.6;">BBE</button></a>

            <a href="/dashboard/TANDES"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 490px;
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
            opacity: 0.6;">TNS</button></a>

      </div>
    </div>

    
</div>
  

  


  
@endsection
