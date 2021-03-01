@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
@endsection
@section('contant')
<link rel="stylesheet" href="assets/css/styles.css">
<div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item active">Denpasar</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253);">
      <div class="row">
          <img src="/img/peta/denpasarr.png" width="1000px" alt="">
          
          <a href="/dashboard/KALIASEM"><button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 180px;
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
            opacity: 0.6;" data-target="#modalBenoa">KLM</button></a>
            
            <a href="/dashboard/UBUNG"><button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 160px;
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
            opacity: 0.6;" data-target="#modalBenoa">UBN</button></a>
            
            <a href="/dashboard/TOHPATI"><button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 160px;
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
            opacity: 0.6;" data-target="#modalBenoa">TOP</button></a>
            
            <a href="/dashboard/SUKAWATI"><button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 130px;
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
            opacity: 0.6;" data-target="#modalBenoa">SWI</button></a>

            <a href="/dashboard/MONANG-MANING"><button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 210px;
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
            opacity: 0.6;" data-target="#modalBenoa">MMN</button></a>
            
            <a href="/dashboard/SEMINYAK">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 210px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">SMY</button></a>

            <a href="/dashboard/SANUR">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 220px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">SAU</button></a>

            <a href="/dashboard/BENOA">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 270px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">BNO</button></a>
            
            <a href="/dashboard/KUTA">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 310px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">KUT</button></a>

            <a href="/dashboard/JIMBARAN">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 350px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">JBR</button></a>

            <a href="/dashboard/NUSA DUA">
            <button class="btnKaliasem" data-toggle="modal" style="position: absolute;
            top: 400px;
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
            opacity: 0.6;" 
            data-target="#modalBenoa">NSD</button></a>

          



      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
