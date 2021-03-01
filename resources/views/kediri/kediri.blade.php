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
                <li class="breadcrumb-item active">Kediri</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253);">
      <div class="row">
          <img src="/img/peta/kedirii.png" alt="">
          <a href="/dashboard/WARUJAYENG"><button class="btnMlandingan" style="position: absolute;
            top: 130px;
            left: 380px;
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
            opacity: 0.6;" >WRJ</button></a>

            <a href="/dashboard/PRAMBON"><button class="btnMlandingan" style="position: absolute;
            top: 240px;
            left: 380px;
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
            opacity: 0.6;" >PRB</button></a>

            <a href="/dashboard/PAPAR"><button class="btnMlandingan" style="position: absolute;
            top: 220px;
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
            opacity: 0.6;" >PPR</button></a>

            <a href="/dashboard/KERTOSONO"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
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
            opacity: 0.6;" >KTS</button></a>

            <a href="/dashboard/NGANJUK"><button class="btnMlandingan" style="position: absolute;
            top: 90px;
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
            opacity: 0.6;" >NJK</button></a>

            <a href="/dashboard/GONDANG"><button class="btnMlandingan" style="position: absolute;
            top: 30px;
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
            opacity: 0.6;" >GON</button></a>

            <a href="/dashboard/KEDIRI"><button class="btnMlandingan" style="position: absolute;
            top: 320px;
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
            opacity: 0.6;" >KDI</button></a>

            <a href="/dashboard/GURAH"><button class="btnMlandingan" style="position: absolute;
            top: 300px;
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
            opacity: 0.6;" >GUR</button></a>

            <a href="/dashboard/MOJOROTO"><button class="btnMlandingan" style="position: absolute;
            top: 310px;
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
            opacity: 0.6;" >MJT</button></a>

            <a href="/dashboard/PARE"><button class="btnMlandingan" style="position: absolute;
            top: 260px;
            left: 560px;
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
            opacity: 0.6;" >PAE</button></a>

            <a href="/dashboard/KANDANGAN KEDIRI"><button class="btnMlandingan" style="position: absolute;
            top: 260px;
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
            opacity: 0.6;" >KAA</button></a>

            <a href="/dashboard/SAMBI"><button class="btnMlandingan" style="position: absolute;
            top: 470px;
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
            opacity: 0.6;" >SBI</button></a>

            <a href="/dashboard/NGADILUWIH"><button class="btnMlandingan" style="position: absolute;
            top: 440px;
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
            opacity: 0.6;" >NDL</button></a>

            <a href="/dashboard/WATES"><button class="btnMlandingan" style="position: absolute;
            top: 420px;
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
            opacity: 0.6;" >WAT</button></a>

            <a href="/dashboard/SRENGAT"><button class="btnMlandingan" style="position: absolute;
            top: 560px;
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
            opacity: 0.6;" >SNT</button></a>

            <a href="/dashboard/BLITAR"><button class="btnMlandingan" style="position: absolute;
            top: 580px;
            left: 540px;
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
            opacity: 0.6;" >BLR</button></a>

            <a href="/dashboard/PANATARAN"><button class="btnMlandingan" style="position: absolute;
            top: 520px;
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
            opacity: 0.6;" >PAN</button></a>

            <a href="/dashboard/WLINGIwgi"><button class="btnMlandingan" style="position: absolute;
            top: 590px;
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
            opacity: 0.6;" >WGI</button></a>

            <a href="/dashboard/KESAMBEN"><button class="btnMlandingan" style="position: absolute;
            top: 650px;
            left: 730px;
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
            opacity: 0.6;" >KBN</button></a>

            <a href="/dashboard/LODOYO"><button class="btnMlandingan" style="position: absolute;
            top: 660px;
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
            opacity: 0.6;" >LDY</button></a>

            <a href="/dashboard/NGUNUT"><button class="btnMlandingan" style="position: absolute;
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
            opacity: 0.6;" >NGU</button></a>

            <a href="/dashboard/TULUNGAGUNG"><button class="btnMlandingan" style="position: absolute;
            top: 570px;
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
            opacity: 0.6;" >TUL</button></a>

            <a href="/dashboard/CAMPUR DARAT"><button class="btnMlandingan" style="position: absolute;
            top: 640px;
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
            opacity: 0.6;" >CAT</button></a>

            <a href="/dashboard/DURENAN"><button class="btnMlandingan" style="position: absolute;
            top: 630px;
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
            opacity: 0.6;" >DRN</button></a>

            <a href="/dashboard/TRENGGALEK"><button class="btnMlandingan" style="position: absolute;
            top: 550px;
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
            opacity: 0.6;" >TRE</button></a>

            <a href="/dashboard/PRIGI"><button class="btnMlandingan" style="position: absolute;
            top: 770px;
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
            opacity: 0.6;" >PRI</button></a>




      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
