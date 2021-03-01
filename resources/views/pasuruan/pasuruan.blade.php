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
                <li class="breadcrumb-item active">Pasuruan</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/pasuruann.png" alt="">
          <a href="/dashboard/BANGIL"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 100px;
            left: 120px;
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
            opacity: 0.6;" data-target="#modal">BNL</button></a>
          <a href="/dashboard/PASURUAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 130px;
            left: 200px;
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
            opacity: 0.6;" data-target="#modal">PSN</button></a>
          <a href="/dashboard/GONDANG WETAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 180px;
            left: 190px;
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
            opacity: 0.6;" data-target="#modal">GDW</button></a>
          <a href="/dashboard/GRATI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 190px;
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
            opacity: 0.6;" data-target="#modal">GRA</button></a>
          <a href="/dashboard/TONGAS"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 220px;
            left: 360px;
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
            opacity: 0.6;" data-target="#modal">TGS</button></a>
          <a href="/dashboard/PROBOLINGGO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 230px;
            left: 440px;
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
            opacity: 0.6;" data-target="#modal">PBL</button></a>
          <a href="/dashboard/GENDING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 270px;
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
            opacity: 0.6;" data-target="#modal">GND</button></a>
          <a href="/dashboard/KRAKSAAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 250px;
            left: 600px;
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
            opacity: 0.6;" data-target="#modal">KRZ</button></a>
          <a href="/dashboard/PAITON"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 220px;
            left: 690px;
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
            opacity: 0.6;" data-target="#modal">PTN</button></a>
          <a href="/dashboard/LECES"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 320px;
            left: 450px;
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
            opacity: 0.6;" data-target="#modal">LCE</button></a>
          <a href="/dashboard/NONGKOJAJAR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 350px;
            left: 150px;
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
            opacity: 0.6;" data-target="#modal">NJA</button></a>
          <a href="/dashboard/SUKAPURA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 380px;
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
            opacity: 0.6;" data-target="#modal">SKP</button></a>
          <a href="/dashboard/KLAKAH"><button class="btn" data-toggle="modal" style="position: absolute;
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
            opacity: 0.6;" data-target="#modal">KKH</button></a>
          <a href="/dashboard/SENDURO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 480px;
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
            opacity: 0.6;" data-target="#modal">SDO</button></a>
          <a href="/dashboard/LUMAJANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 530px;
            left: 450px;
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
            opacity: 0.6;" data-target="#modal">LMJ</button></a>
          <a href="/dashboard/JATIROTO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 530px;
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
            opacity: 0.6;" data-target="#modal">JTO</button></a>
          <a href="/dashboard/PASIRIAN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 590px;
            left: 350px;
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
            opacity: 0.6;"data-target="#modal">PII</button></a>
          <a href="/dashboard/TEMPEH"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 600px;
            left: 430px;
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
            opacity: 0.6;" data-target="#modal">TPH</button></a>
          <a href="/dashboard/YOSOWILANGUN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 600px;
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
            opacity: 0.6;" data-target="#modal">YSN</button></a>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    

    
</div>
  

  


  
@endsection
