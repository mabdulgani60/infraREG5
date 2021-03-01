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
                <li class="breadcrumb-item"><a href="dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item active"></li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px;">
      <div class="row">
        <img src="/img/dashboard.jpg" alt="">
        <a href="/dashboard/sbu"><button class="btnSbu" data-toggle="modal" data-target="#modalSbu">SBU</button></a>
        <a href="/dashboard/sbs"><button class="btnSbs" data-toggle="modal" data-target="#modalSbs">SBS</button></a>
        <a href="/dashboard/madura"><button class="btnMadura" data-toggle="modal" data-target="#modalMadura">MAD</button></a>
        <a href="/dashboard/malang"><button class="btnMalang" data-toggle="modal" data-target="#modalMalang">ML</button></a>
        <a href="/dashboard/pasuruan"><button class="btnPasuruan" data-toggle="modal" data-target="#modalPasuruan">PS</button></a>
        <a href="/dashboard/sda"><button class="btnSidoarjo" data-toggle="modal" data-target="#modalSidoarjo">SDA</button></a>
        <a href="/dashboard/madiun"><button class="btnMadiun" data-toggle="modal" data-target="#modalMadiun">MN</button></a>
        <a href="/dashboard/kediri"><button class="btnKediri" data-toggle="modal" data-target="#modalKediri">KD</button></a>
        <a href="/dashboard/jember"><button class="btnJember" data-toggle="modal" data-target="#modalJember">JR</button></a>
        <a href="/dashboard/denpasar"><button class="btnDenpasar" data-toggle="modal" data-target="#modalDenpasar">DPR</button></a>
        <a href="/dashboard/sgr"><button class="btnSingaraja" data-toggle="modal" data-target="#modalSingaraja">SGR</button></a>
        <a href="/dashboard/ntb"><button class="btnNtb" data-toggle="modal" data-target="#modalNtb">NTB</button></a>
        <a href="/dashboard/maumere"><button class="btnWitelMaumere" data-toggle="modal" data-target="#modalMaumere">MME</button></a>
        <a href="/dashboard/kupang"><button class="btnWitelKupang" data-toggle="modal" data-target="#modalKupang">KUP</button></a>
                </div>
      </div>
    </div>    
</div>
  

  


  
@endsection
