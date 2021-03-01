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
                <li class="breadcrumb-item active">SBS</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px; background:rgb(215, 248, 253)">
      <div class="row">
          <img src="/img/peta/sbss.png" width="900" alt="">

          <a href="/dashboard/MANYAR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 190px;
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
            opacity: 0.6;">MYR</button></a>

            <a href="/dashboard/GUBENG"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 220px;
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
            opacity: 0.6;">GBG</button></a>

            <a href="/dashboard/RUNGKUT"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 270px;
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
            opacity: 0.6;">RKT</button></a>

            <a href="/dashboard/JAGIR"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 255px;
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
            opacity: 0.6;">JGR</button></a>

            <a href="/dashboard/DARMO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 230px;
            left: 530px;
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
            opacity: 0.6;">DMO</button></a>

            <a href="/dashboard/INJOKO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 300px;
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
            opacity: 0.6;">IJK</button></a>

            

            <a href="/dashboard/WARU"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 340px;
            left: 530px;
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
            opacity: 0.6;">WRU</button></a>

            <a href="/dashboard/TROPODO"><button class="btn" data-toggle="modal" style="position: absolute;
            top: 360px;
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
            opacity: 0.6;">TPO</button></a>
            </form>
      </div>
    </div>    
</div>
  

  


  
@endsection
