@extends('layouts.dashboard')

@section('content')
<div class="container pt-5">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Data Supplier</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('supplierController.update', $supplier->id)}}"  enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="kd_supp">Kode Supplier</label>
                    <input type="text" class="form-control" name="kd_supp" id="kd_supp" value="{{old('kd_supp') ? old('kd_supp'): $supplier->kd_supp }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="nm_supp">Nama Supplier</label>
                    <input type="text" class="form-control" name="nm_supp" id="nm_supp" value="{{old('nm_supp') ? old('nm_supp'): $supplier->nm_supp }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{old('alamat') ? old('alamat'): $supplier->alamat }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon" value="{{old('telepon') ? old('telepon'): $supplier->telepon }}">
                    </div>
                </div>
            </div>

                <div class="card-footer">
                    <div class="d-grid">
                        <button class="btn btn-success" type="submit">Edit</button>
                        <a href="{{ route('supplierController.index')}}" class="btn btn-warning" type="cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection