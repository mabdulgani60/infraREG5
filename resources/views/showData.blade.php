@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
@endsection
@section('contant')
<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Detail Perangkat</h4>
            </div><br>
            @foreach($data as $value)
                        @endforeach
            <div class="text-left">
                <a href="/dashboard/{{$value->lokasi}}/{{$value->tipe_perangkat}}/" style="margin-left: 20px" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <div class="panel-body">
                        
                        <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Wilayah</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$value->wilayah}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$value->lokasi}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tipe Perangkat</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tipe_perangkat" name="tipe_perangkat" value="{{$value->tipe_perangkat}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Merk</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="merk" name="merk" value="{{$value->merk}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tipe</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tipe" name="tipe" value="{{$value->tipe}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Perangkat</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenis_perangkat" name="jenis_perangkat" value="{{$value->jenis_perangkat}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor Serial</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomor_serial" name="nomor_serial" value="{{$value->serial_number}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KAP TPS</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kap_tps" name="kap_tps" value="{{$value->kap_tps}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KAP TPK</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kap_tpk" name="kap_tpk" value="{{$value->kap_tpk}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="status" name="status" value="{{$value->status}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tahun Operasi</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{$value->tahun}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ruangan(Lokasi)</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ruangan" name="ruangan" value="{{$value->ruangan}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$value->keterangan}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Beban Terpasang</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="beban" name="beban" value="{{$value->beban}}" readonly>
                                    </div>
                                </div>
                                
            </div>
        </div>
    </div>


@endsection
