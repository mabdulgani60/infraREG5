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
                <li class="breadcrumb-item active">Maumere</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/maumeree.png" style="max-width: 1100px;" alt="">
          <a href="/dashboard/LABUHANBAJO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 100px;
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
            opacity: 0.6;" data-target="#modal">LBO</button></a>
          <a href="/dashboard/RUTENG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 120px;
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
            opacity: 0.6;" data-target="#modal">RTE</button></a>
          <a href="/dashboard/BAJAWA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 150px;
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
            opacity: 0.6;" data-target="#modal">BJW</button></a>
          <a href="/dashboard/ENDE"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 160px;
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
            opacity: 0.6;" data-target="#modal">END</button></a>
          <a href="/dashboard/MAUMERE"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 130px;
            left: 680px;
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
            opacity: 0.6;" data-target="#modal">MMR</button></a>
          <a href="/dashboard/LARANTUKA"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 60px;
            left: 865px;
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
            opacity: 0.6;" data-target="#modal">LRT</button></a>
          <a href="/dashboard/WAINGAPI"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 350px;
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
            opacity: 0.6;" data-target="#modal">WGP</button></a>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    

    
</div>
  

  


  
@endsection
