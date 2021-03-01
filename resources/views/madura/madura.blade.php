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
                <li class="breadcrumb-item active">Madura</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px;">
      <div class="row">
          <img src="/img/peta/maduraa.png" width="1000px" alt="">
          <a href="/dashboard/KAMAL"><button class="btnMlandingan" style="position: absolute;
            top: 270px;
            left: 70px;
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
            opacity: 0.6;" >KML</button></a>

            <a href="/dashboard/BANGKALAN"><button class="btnMlandingan" style="position: absolute;
            top: 190px;
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
            opacity: 0.6;" >BKL</button></a>

            <a href="/dashboard/AROSBAYA"><button class="btnMlandingan" style="position: absolute;
            top: 130px;
            left: 130px;
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
            opacity: 0.6;" >ARB</button></a>

            <a href="/dashboard/TANJUNG BUMI"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
            left: 290px;
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
            opacity: 0.6;" >TBU</button></a>

            <a href="/dashboard/KETAPANG2"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
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
            opacity: 0.6;" >KPP</button></a>

            <a href="/dashboard/OMBEN"><button class="btnMlandingan" style="position: absolute;
            top: 200px;
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
            opacity: 0.6;" >OMB</button></a>

            <a href="/dashboard/WARU3"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
            left: 590px;
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
            opacity: 0.6;" >WRP</button></a>

            <a href="/dashboard/AMBUNTEN PM"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
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
            opacity: 0.6;" >ABT</button></a>

            <a href="/dashboard/MASALEMBO"><button class="btnMlandingan" style="position: absolute;
            top: 50px;
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
            opacity: 0.6;" >MLB</button></a>

            <a href="/dashboard/SUMENEP"><button class="btnMlandingan" style="position: absolute;
            top: 160px;
            left: 780px;
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
            opacity: 0.6;" >SMP</button></a>

            <a href="/dashboard/BATANG BATANG"><button class="btnMlandingan" style="position: absolute;
            top: 120px;
            left: 870px;
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
            opacity: 0.6;" >BAB</button></a>

            <a href="/dashboard/SAPUDI PM"><button class="btnMlandingan" style="position: absolute;
            top: 220px;
            left: 930px;
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
            opacity: 0.6;" >SPD</button></a>

            <a href="/dashboard/KANGEAN"><button class="btnMlandingan" style="position: absolute;
            top: 210px;
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
            opacity: 0.6;" >KGN</button></a>

            <a href="/dashboard/SAPEKEN PM"><button class="btnMlandingan" style="position: absolute;
            top: 220px;
            left: 990px;
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
            opacity: 0.6;" >SPK</button></a>

            <a href="/dashboard/PRAGAAN"><button class="btnMlandingan" style="position: absolute;
            top: 220px;
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
            opacity: 0.6;" >PRG</button></a>

            <a href="/dashboard/PAMEKASAN"><button class="btnMlandingan" style="position: absolute;
            top: 270px;
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
            opacity: 0.6;" >PME</button></a>

            <a href="/dashboard/SAMPANG"><button class="btnMlandingan" style="position: absolute;
            top: 290px;
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
            opacity: 0.6;" >SPG</button></a>

            <a href="/dashboard/BLEGA"><button class="btnMlandingan" style="position: absolute;
            top: 290px;
            left: 340px;
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
            opacity: 0.6;" >BLG</button></a>



      
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
