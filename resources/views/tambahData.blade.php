@extends('layouts.master')
@section('menu')
@include('sidebar.dashboard')
@endsection
@section('contant')
<div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Tambah Perangkat</h4>
            </div><br>
            <div class="text-left">
            @foreach($data as $value)
            @endforeach
                <a href="/dashboard/{{$value->lokasi}}/{{$value->tipe_perangkat}}/" style="margin-left: 20px" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <div class="panel-body">                            
                    <form method="post" action="/dashboard/{{$value->lokasi}}/{{$value->tipe_perangkat}}/store" id="myForm">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Wilayah</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="wilayah" name="wilayah">
                                            <option value="<?php echo $value->wilayah ?>" selected><?php echo $value->wilayah ?></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="lokasi" name="lokasi">
                                            <option value="<?php echo $value->lokasi ?>" selected><?php echo $value->lokasi ?></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tipe Perangkat</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="tipe_perangkat" name="tipe_perangkat">
                                            <option value="<?php echo $value->tipe_perangkat ?>" selected><?php echo $value->tipe_perangkat ?></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Merk</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukan merk">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tipe</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukan tipe">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Jenis Perangkat</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenis_perangkat" name="jenis_perangkat" placeholder="Masukan jenis perangkat">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor Serial</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nomor_serial" name="serial_number" placeholder="Masukan nomor serial">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KAP TPS</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kap_tps" name="kap_tps" placeholder="Masukan kap tps">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">KAP TPK</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kap_tpk" name="kap_tpk" placeholder="Masukan kap tpk">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="status" name="status">
                                            <option value="OPERASI" selected>OPERASI</option>
                                            <option value="IDLE">IDLE</option>
                                            <option value="STANDBY">STANDBY</option>
                                            <option value="MOBILE">MOBILE</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tahun Operasi</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukan tahun operasi">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Ruangan(Lokasi)</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ruangan" name="ruangan" placeholder="Masukan ruangan(lokasi)">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Beban Terpasang</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="beban" name="beban" placeholder="Masukan beban terpasang">
                                    </div>
                                </div>
                                <div class="text-center">
                                        
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            <from>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection