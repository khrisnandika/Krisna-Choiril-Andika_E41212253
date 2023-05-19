@extends('layouts.app')

@section('home')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!doctype html>
<html lang="en">
  <head>
  	<title>Table 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='frontend_table/text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="frontend_table/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			{{-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table #01</h2>
				</div>
			</div> --}}

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Data</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Nasabah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tambahNasabah" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" id="" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Alamat</label>
                            <textarea class="form-control" id="" name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nomer Rekening</label>
                            <textarea class="form-control" id="" name="nomer_rekening"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nomer Telpon</label>
                            <textarea class="form-control" id="" name="nomer_telpon"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						      <th>No</th>
						      <th>Nama Nasabah</th>
						      <th>Alamat</th>
						      <th>Nomer Rekening</th>
						      <th>Nomer Telpon</th>
						      <th>Aksi</th>
						    </tr>
						  </thead>
                          @php
                              $no = 1;
                          @endphp
						  <tbody>
                            @foreach ($item as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data -> nama }}</td>
                                    <td>{{ $data -> alamat }}</td>
                                    <td>{{ $data -> nomer_rekening }}</td>
                                    <td>{{ $data -> nomer_telpon }}</td>
                                    <td>
                                        <button> <a href="/tampilUbahData/{{ $data->id }}">ubah</a></button>
                                        <button> <a href="/hapusData/{{ $data->id }}">hapus</a></button>
                                    </td>
                                </tr>
                            @endforeach
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>

            
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


@endsection
