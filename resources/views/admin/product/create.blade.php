@extends('layouts/master')
 @section('content')

    <section class="content-header">
      <h1>
        Data Product
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="col-xs-12">
        <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div style="padding: 10px;"><form action="{{route('product.store')}}" method="POST">
            @csrf

                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" name="kode" class="form-control" placeholder="Kode Produk">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea  name="deskripsi" class="form-control" placeholder="Deskripsi Produk"></textarea>
                </div>
            
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Stok Produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Harga Produk">
                </div>
                <div class="form-group">
                    <label for="berat">Berat</label>
                    <div class="form-inline">
                    <input type="number" name="berat" class="form-control w-25" placeholder="Berat Produk">
                    <label for="berat" class="m-1">gram</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form></div>
          </div>
          <!-- /.box -->


      </div>
      </div>

</div>
      <!-- /.row -->

    </section>



@endsection