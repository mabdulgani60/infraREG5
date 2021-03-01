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
                <li class="breadcrumb-item active">Jember</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253);">
      <div class="row">
          <img src="/img/peta/jemberr.png" alt="">
          <a href="/dashboard/BESUKI"><button class="btnBesuki" style="position: absolute;
            top: 120px;
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
            opacity: 0.6;" >BKI</button></a>

            <a href="/dashboard/MLANDINGAN"><button class="btnMlandingan" style="position: absolute;
            top: 120px;
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
            opacity: 0.6;" >MLD</button></a>

            <a href="/dashboard/SITUBONDO"><button class="btnMlandingan" style="position: absolute;
            top: 110px;
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
            opacity: 0.6;" >SIT</button></a>
            <a href="/dashboard/ASEMBAGUS"><button class="btnMlandingan" style="position: absolute;
            top: 120px;
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
            opacity: 0.6;" >ASB</button></a>

            <a href="/dashboard/PRAJEKAN"><button class="btnMlandingan" style="position: absolute;
            top: 160px;
            left: 490px;
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
            opacity: 0.6;" >PRJ</button></a>

            <a href="/dashboard/SUKOSARI"><button class="btnMlandingan" style="position: absolute;
            top: 230px;
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
            opacity: 0.6;" >SKS</button></a>

            <a href="/dashboard/BONDOWOSO"><button class="btnMlandingan" style="position: absolute;
            top: 240px;
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
            opacity: 0.6;" >BOW</button></a>

            <a href="/dashboard/SUKOWONO"><button class="btnMlandingan" style="position: absolute;
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
            opacity: 0.6;" >SKW</button></a>

            <a href="/dashboard/ARJASA JEMBER"><button class="btnMlandingan" style="position: absolute;
            top: 360px;
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
            opacity: 0.6;" >AJS</button></a>

            <a href="/dashboard/KALISAT"><button class="btnMlandingan" style="position: absolute;
            top: 400px;
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
            opacity: 0.6;" >KLT</button></a>

            <a href="/dashboard/COKRO JEMBER"><button class="btnMlandingan" style="position: absolute;
            top: 430px;
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
            opacity: 0.6;" >JER</button></a>

            <a href="/dashboard/TANGGUL"><button class="btnMlandingan" style="position: absolute;
            top: 420px;
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
            opacity: 0.6;" >TGU</button></a>

            <a href="/dashboard/KENCONG"><button class="btnMlandingan" style="position: absolute;
            top: 500px;
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
            opacity: 0.6;" >KNO</button></a>

            <a href="/dashboard/RAMBIPUJI"><button class="btnMlandingan" style="position: absolute;
            top: 460px;
            left: 220px;
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
            opacity: 0.6;" >RBP</button></a>

            <a href="/dashboard/BALUNG"><button class="btnMlandingan" style="position: absolute;
            top: 510px;
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
            opacity: 0.6;" >BUG</button></a>

            <a href="/dashboard/JENGGAWAHjgw"><button class="btnMlandingan" style="position: absolute;
            top: 510px;
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
            opacity: 0.6;" >JGW</button></a>

            <a href="/dashboard/AMBULU"><button class="btnMlandingan" style="position: absolute;
            top: 560px;
            left: 250px;
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
            opacity: 0.6;" >ABL</button></a>

            <a href="/dashboard/PUGER"><button class="btnMlandingan" style="position: absolute;
            top: 580px;
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
            opacity: 0.6;" >PUG</button></a>

            <a href="/dashboard/SEMPOLAN"><button class="btnMlandingan" style="position: absolute;
            top: 440px;
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
            opacity: 0.6;" >SPO</button></a>

            <a href="/dashboard/KALIBARU"><button class="btnMlandingan" style="position: absolute;
            top: 500px;
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
            opacity: 0.6;" >KBR</button></a>

            <a href="/dashboard/KEBONSARI JEMBER"><button class="btnMlandingan" style="position: absolute;
            top: 450px;
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
            opacity: 0.6;" >KBS</button></a>

            <a href="/dashboard/BANYUWANGI"><button class="btnMlandingan" style="position: absolute;
            top: 450px;
            left: 770px;
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
            opacity: 0.6;" >BWG</button></a>

            <a href="/dashboard/KETAPANG"><button class="btnMlandingan" style="position: absolute;
            top: 400px;
            left: 770px;
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
            opacity: 0.6;" >KET</button></a>

            <a href="/dashboard/WONGSOREJO"><button class="btnMlandingan" style="position: absolute;
            top: 300px;
            left: 790px;
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
            opacity: 0.6;" >WSO</button></a>

            <a href="/dashboard/ROGOJAMPI"><button class="btnMlandingan" style="position: absolute;
            top: 520px;
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
            opacity: 0.6;" >RGJ</button></a>

            <a href="/dashboard/MUNCAR"><button class="btnMlandingan" style="position: absolute;
            top: 620px;
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
            opacity: 0.6;" >MCR</button></a>

            <a href="/dashboard/BENCULUK"><button class="btnMlandingan" style="position: absolute;
            top: 630px;
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
            opacity: 0.6;" >BCK</button></a>

            <a href="/dashboard/GENTENG"><button class="btnMlandingan" style="position: absolute;
            top: 580px;
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
            opacity: 0.6;" >GEN</button></a>

            <a href="/dashboard/PESANGGARAN"><button class="btnMlandingan" style="position: absolute;
            top: 720px;
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
            opacity: 0.6;" >PSG</button></a>


      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
