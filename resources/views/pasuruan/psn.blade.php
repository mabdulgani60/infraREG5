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
                <li class="breadcrumb-item active"><a href="/dashboard/pasuruan">Pasuruan</a></li>
                <li class="breadcrumb-item active">Pasuruan</li>
            </ul>
            
        </div>
    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">		
		
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
            <div class="alert alert-info" role="alert">
				<center>STO : PASURUAN || Coordinate : XX || Alamat : </center>
			</div>
            <a href="/dashboard/pasuruan" class="btn"><i class="fa fa-arrow-left"></i> Kembali</a>
			<center>
				<form action="" method="post">
					
				<a type="submit" href="/dashboard/PASURUAN/PLN" class="btn btn-secondary" name="PLN" value="PLN">PLN</a>
					<a type="submit" href="/dashboard/PASURUAN/GENERATOR" class="btn btn-secondary" name="GENERATOR" value="GENERATOR">GENERATOR</a>
					<a type="submit" href="/dashboard/PASURUAN/AC" class="btn btn-secondary" name="AC" value="AC">AIR CONDITIONER</a>
					<a type="submit" href="/dashboard/PASURUAN/RECTIFIER" class="btn btn-secondary" name="RECTIFIER" value="RECTIFIER">RECTIFIER</a>
					<a type="submit" href="/dashboard/PASURUAN/BATTERE" class="btn btn-secondary" name="BATTERE" value="BATTERE">BATTERE</a></form>
				</form>
				<br>
				<form action="" method="post">
					<button type="submit" class="btn btn-info" name="WIRING" value="WIRING">WIRING</button>
					<button type="submit" class="btn btn-info" name="LAYOUT" value="LAYOUT">LAYOUT GEDUNG</button>
					<br><br>
				</form>
				<a href="http://newinfracnr.telkom.co.id/infracnr/site/login" class="btn btn-info">INFRA CNR</a>
				<a href="http://newosase.telkom.co.id" class="btn btn-info">OSASE</a>
				<br> <br>
								<img style="height: 401px; width: 600px;" src="img/pasuruan/PASURUAN.jpg" alt=""></center>
				<div>
				</div>
				<br>
			</div>

			
		</div>
   
    
</div>
  

  


  
@endsection