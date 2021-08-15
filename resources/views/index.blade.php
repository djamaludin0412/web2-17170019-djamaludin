@extends('layouts.dashboard')

@section('content')
<h1 class="h3 mb-2 text-gray-800">List Data Supplier</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
       <a href="{{ route('supplierController.create') }}" class="btn btn-primary btn-icon-split">
           <span class="icon text-white-50">
               <i class="fas fa-plus"></i>
           </span>
           <span class="text">Add Data Supplier</span>
       </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($suppliers as $supplier)
                   <tr>
                       <td> {{ $loop->iteration}}</td>
                       <td> {{$supplier->kd_supp}}</td>
                       <td> {{$supplier->nm_supp}}</td>
                       <td> {{$supplier->alamat}}</td>
                       <td> {{$supplier->telepon}}</td>
                       <td>
                           <form action="{{ route('supplierController.destroy', $supplier->id) }}" method="POST">
                               <a href="{{route('supplierController.edit', $supplier->id) }}" type="" class=""><input type="button" class="btn btn-warning btn-sm" value="Edit"></a>

                                   @csrf
                                   @method('DELETE')
                                   <button class="btn btn-danger btn-sm btn-table" type="submit" onclick="return confirm('Delete Confirmation')">
                                  Delete
                                   </button>
                           </form>
                       </td>
                   </tr>
                   @empty
                   <div class="alert alert-danger">
                       <strong> Oopps ! </strong> Data kosong
                     </div>
                   @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection