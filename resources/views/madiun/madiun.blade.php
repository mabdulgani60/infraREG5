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
                <li class="breadcrumb-item active">Madiun</li>
            </ul>
        </div>
    </div>
    <!-- Cards-->
    <div class="container" style="position: relative; max-width: 1500px;">
      <div class="row">
          <img src="/img/peta/madiunn.png" alt="">
          <a href="/dashboard/BANCAR"><button class="btnMlandingan" style="position: absolute;
            top: 40px;
            left: 580px;
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
            opacity: 0.6;" >BCR</button></a>

            <a href="/dashboard/JATIROGO"><button class="btnMlandingan" style="position: absolute;
            top: 60px;
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
            opacity: 0.6;" >JTR</button></a>

            <a href="/dashboard/KERAK"><button class="btnMlandingan" style="position: absolute;
            top: 80px;
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
            opacity: 0.6;" >KRK</button></a>

            <a href="/dashboard/MERAKURAK"><button class="btnMlandingan" style="position: absolute;
            top: 60px;
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
            opacity: 0.6;" >MRR</button></a>

            <a href="/dashboard/TUBAN"><button class="btnMlandingan" style="position: absolute;
            top: 80px;
            left: 750px;
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
            opacity: 0.6;" >TNZ</button></a>

            <a href="/dashboard/SUMBERREJO"><button class="btnMlandingan" style="position: absolute;
            top: 350px;
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
            opacity: 0.6;" >SMJ</button></a>

            <a href="/dashboard/BOJONEGORO"><button class="btnMlandingan" style="position: absolute;
            top: 330px;
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
            opacity: 0.6;" >BJN</button></a>

            <a href="/dashboard/KALITIDUkdu"><button class="btnMlandingan" style="position: absolute;
            top: 310px;
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
            opacity: 0.6;" >KDU</button></a>

            <a href="/dashboard/RENGEL"><button class="btnMlandingan" style="position: absolute;
            top: 260px;
            left: 750px;
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
            opacity: 0.6;" >RGL</button></a>

            <a href="/dashboard/CARUBAN"><button class="btnMlandingan" style="position: absolute;
            top: 660px;
            left: 480px;
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
            opacity: 0.6;" >CRB</button></a>

            <a href="/dashboard/KARANGJATI"><button class="btnMlandingan" style="position: absolute;
            top: 610px;
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
            opacity: 0.6;" >KRJ</button></a>

            <a href="/dashboard/NGAWI"><button class="btnMlandingan" style="position: absolute;
            top: 550px;
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
            opacity: 0.6;" >NWI</button></a>

            <a href="/dashboard/MAOSPATI"><button class="btnMlandingan" style="position: absolute;
            top: 680px;
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
            opacity: 0.6;" >MSP</button></a>

            <a href="/dashboard/STO MADIUN"><button class="btnMlandingan" style="position: absolute;
            top: 720px;
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
            opacity: 0.6;" >MNZ</button></a>

            <a href="/dashboard/UTERAN"><button class="btnMlandingan" style="position: absolute;
            top: 780px;
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
            opacity: 0.6;" >UTR</button></a>

            <a href="/dashboard/GORANGGARENG"><button class="btnMlandingan" style="position: absolute;
            top: 760px;
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
            opacity: 0.6;" >GGR</button></a>

            <a href="/dashboard/MAGETAN"><button class="btnMlandingan" style="position: absolute;
            top: 740px;
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
            opacity: 0.6;" >MGT</button></a>

            <a href="/dashboard/SARANGAN"><button class="btnMlandingan" style="position: absolute;
            top: 740px;
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
            opacity: 0.6;" >SAR</button></a>

            <a href="/dashboard/WALIKUKUN"><button class="btnMlandingan" style="position: absolute;
            top: 560px;
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
            opacity: 0.6;" >WKU</button></a>

            <a href="/dashboard/JOGOROGO"><button class="btnMlandingan" style="position: absolute;
            top: 600px;
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
            opacity: 0.6;" >JGO</button></a>

            <a href="/dashboard/JENANGAN"><button class="btnMlandingan" style="position: absolute;
            top: 890px;
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
            opacity: 0.6;" >JEN</button></a>

            <a href="/dashboard/PONOROGO"><button class="btnMlandingan" style="position: absolute;
            top: 920px;
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
            opacity: 0.6;" >PON</button></a>

            <a href="/dashboard/PULUNG"><button class="btnMlandingan" style="position: absolute;
            top: 920px;
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
            opacity: 0.6;" >PLG</button></a>

            <a href="/dashboard/SUMOROTO"><button class="btnMlandingan" style="position: absolute;
            top: 910px;
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
            opacity: 0.6;" >SMO</button></a>

            <a href="/dashboard/SLAHUNG"><button class="btnMlandingan" style="position: absolute;
            top: 1000px;
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
            opacity: 0.6;" >SLH</button></a>

            <a href="/dashboard/SAMBIT"><button class="btnMlandingan" style="position: absolute;
            top: 990px;
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
            opacity: 0.6;" >SAT</button></a>

            <a href="/dashboard/LOGOR"><button class="btnMlandingan" style="position: absolute;
            top: 1190px;
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
            opacity: 0.6;" >LOG</button></a>

            <a href="/dashboard/PACITAN"><button class="btnMlandingan" style="position: absolute;
            top: 1180px;
            left: 60px;
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
            opacity: 0.6;" >PNZ</button></a>

            <a href="/dashboard/PUNUNG"><button class="btnMlandingan" style="position: absolute;
            top: 1140px;
            left: 10px;
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
            opacity: 0.6;" >PNG</button></a>

            



      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    
</div>
  

  


  
@endsection
