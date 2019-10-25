 @extends('layouts/master')
 @section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Product
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
      <a href="{{ route('product.create') }}">
        <button class="btn-info btn-lg" style="margin-top: 10px;">Tambah Product <i class="fa fa-plus"></i></button>
      </a>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->kode}}</td>
                        <td>{{$product->nama}}</td>
                        <td>{{$product->harga}}</td>
                        <td>
                        
                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-warning"> <i class="fa fa-edit"></i> Ubah</a>
                        @csrf
                        @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-eraser"></i> Hapus</button> 
                        </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection

