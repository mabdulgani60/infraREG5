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
                <li class="breadcrumb-item active">NTB</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/ntbb.png" style="max-width: 1100px;" alt="">
          <a href="/dashboard/SENGGIGI"><button class="btn" data-toggle="modal" style="position: absolute;
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
            opacity: 0.6;" data-target="#modal">SGG</button></a>
          <a href="/dashboard/MATARAM"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 130px;
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
            opacity: 0.6;" data-target="#modal">MTR</button></a>
          <a href="/dashboard/SWETA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
            left: 180px;
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
            opacity: 0.6;" data-target="#modal">SWE</button></a>
          <a href="/dashboard/MASBAGIK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
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
            opacity: 0.6;" data-target="#modal">MBG</button></a>
          <a href="/dashboard/SELONG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 160px;
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
            opacity: 0.6;" data-target="#modal">SEL</button></a>
          <a href="/dashboard/GERUNG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 180px;
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
            opacity: 0.6;" data-target="#modal">GER</button></a>
          <a href="/dashboard/PRAYA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 190px;
            left: 180px;
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
            opacity: 0.6;" data-target="#modal">PRY</button></a>
          <a href="/dashboard/ALAS"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
            left: 410px;
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
            opacity: 0.6;" data-target="#modal">ALA</button></a>
          <a href="/dashboard/SUMBAWA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 140px;
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
            opacity: 0.6;" data-target="#modal">SBW</button></a>
          <a href="/dashboard/TALIWANG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 200px;
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
            opacity: 0.6;" data-target="#modal">TLW</button></a>
          <a href="/dashboard/MALUK"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 250px;
            left: 365px;
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
            opacity: 0.6;" data-target="#modal">MLK</button></a>
          <a href="/dashboard/DOMPU"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
            left: 850px;
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
            opacity: 0.6;" data-target="#modal">DMP</button></a>
          <a href="/dashboard/BIMA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 130px;
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
            opacity: 0.6;" data-target="#modal">BIM</button></a>
          <a href="/dashboard/TENTE"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 175px;
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
            opacity: 0.6;" data-target="#modal">TET</button></a>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
