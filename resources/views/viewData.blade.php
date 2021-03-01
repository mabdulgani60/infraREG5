@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
@endsection
@section('contant')
<link rel="stylesheet" href="assets/style_login/css/styles.css">
<div class="container-fluid">
    <!-- Breadcrumb-->
    @foreach($data as $value)
            @endforeach
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/dashboard/{{$value->lokasi}}">STO <?php echo $value->lokasi ?></a></li>
                <li class="breadcrumb-item active">Data <?php echo $value->tipe_perangkat ?></li>
            </ul>            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">		
    
            <br>
    <div class="text-left">
            <a href="/dashboard/{{$value->lokasi}}" style="margin-left:20px" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
			<center>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>Kelola Data</h2>
            </div>
            
            <div class="text-right">
            
            
                <a class="btn btn-success" style="margin-right:40px" href="/dashboard/{{$value->lokasi}}/{{$value->tipe_perangkat}}/tambah"><i class="fa fa-pencil"> Tambah</i></a>
            
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Wilayah</th>
            <th>Lokasi</th>
            <th>Tipe Perangkat</th>
            <th>Merk</th>
            <th>Tipe</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $value->wilayah }}</td>
            <td>{{ $value->lokasi }}</td>
            <td>{{ $value->tipe_perangkat }}</td>
            <td>{{ $value->merk }}</td>
            <td>{{ $value->tipe }}</td>
            <td>{{ $value->status }}</td>
            <td>
                
   
                    <a class="btn btn-info" href="/dashboard/data/show/{{ $value->no }}"><i class="fa fa-eye"> Lihat Detail</i></a>
    
                    <a class="btn btn-primary" href="/dashboard/data/edit/{{ $value->no }}"><i class="fa fa-pencil"> Edit</i></a>

                    <a class="btn btn-danger" href="/dashboard/data/hapus/{{ $value->no }}"><i class="fa fa-trash"> Hapus</i></a>
   
                </form>
            </td>
        </tr>
        @endforeach
    </table>
				</center>
				<div>
				</div>
				<br>
			</div>

			
		</div>
   
    
</div>

@endsection