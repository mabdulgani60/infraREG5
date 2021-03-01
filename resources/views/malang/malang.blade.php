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
                <li class="breadcrumb-item active">Malang</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/malangg.png" alt="">
          <a href="/dashboard/NGANTANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
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
            opacity: 0.6;" data-target="#modal">NTG</button></a>
          <a href="/dashboard/BATU"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
            left: 187px;
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
            opacity: 0.6;" data-target="#modal">BTU</button></a>
          <a href="/dashboard/KARANG PLOSO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
            left: 255px;
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
            opacity: 0.6;" data-target="#modal">KPO</button></a>
          <a href="/dashboard/SINGOSARI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
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
            opacity: 0.6;" data-target="#modal">SGS</button></a>
          <a href="/dashboard/LAWANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 80px;
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
            opacity: 0.6;" data-target="#modal">LWG</button></a>
          <a href="/dashboard/KLOJEN"><button class="btn" data-toggle="modal"  style="position: absolute;
            top: 200px;
            left: 230px;
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
            opacity: 0.6;" data-target="#modal">KLJ</button></a>
          <a href="/dashboard/BLIMBING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 190px;
            left: 270px;
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
            opacity: 0.6;" data-target="#modal">BLB</button></a>
          <a href="/dashboard/PAKIS"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 200px;
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
            opacity: 0.6;" data-target="#modal">PKS</button></a>
          <a href="/dashboard/MALANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 240px;
            left: 270px;
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
            opacity: 0.6;" data-target="#modal">MLG</button></a>
          <a href="/dashboard/SAWOJAJAR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 250px;
            left: 310px;
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
            opacity: 0.6;" data-target="#modal">SWJ</button></a>
          <a href="/dashboard/GADANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 280px;
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
            opacity: 0.6;" data-target="#modal">GDG</button></a>
          <a href="/dashboard/BURING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 285px;
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
            opacity: 0.6;" data-target="#modal">BRG</button></a>
          <a href="/dashboard/TUMPANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 280px;
            left: 330px;
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
            opacity: 0.6;" data-target="#modal">TMP</button></a>
          <a href="/dashboard/GUNUNG KAWI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 350px;
            left: 147px;
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
            opacity: 0.6;" data-target="#modal">GKW</button></a>
          <a href="/dashboard/SUMBER PUCUNG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 420px;
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
            opacity: 0.6;" data-target="#modal">SBP</button></a>
          <a href="/dashboard/KEPANJEN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 400px;
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
            opacity: 0.6;" data-target="#modal">KEP</button></a>
          <a href="/dashboard/GONDANGLEGI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 430px;
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
            opacity: 0.6;" data-target="#modal">GDI</button></a>
          <a href="/dashboard/TUREN"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 430px;
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
            opacity: 0.6;" data-target="#modal">TUR</button></a>
          <a href="/dashboard/AMPEL GADING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 445px;
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
            opacity: 0.6;" data-target="#modal">APG</button></a>
          <a href="/dashboard/DAMPIT"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 445px;
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
            opacity: 0.6;" data-target="#modal">DPT</button></a>
          <a href="/dashboard/PAGAK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 490px;
            left: 160px;
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
            opacity: 0.6;" data-target="#modal">PGK</button></a>
          <a href="/dashboard/SUMBERMANJING"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 500px;
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
            opacity: 0.6;" data-target="#modal">SBM</button></a>
          <a href="/dashboard/BANTUR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 530px;
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
            opacity: 0.6;" data-target="#modal">BNR</button></a>
          <a href="/dashboard/DONOMULYO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 530px;
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
            opacity: 0.6;" data-target="#modal">DNO</button></a>

      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
