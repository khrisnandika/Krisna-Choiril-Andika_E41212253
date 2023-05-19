<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="modal-body">
        <form action="/ubahData" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="col-form-label">Nama</label>
                <input type="text" class="form-control" id="" name="nama" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Alamat</label>
                <textarea class="form-control" id="" name="alamat" value="{{ $data->alamat }}"></textarea>
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Nomer Rekening</label>
                <textarea class="form-control" id="" name="nomer_rekening" value="{{ $data->nomer_rekening }}"></textarea>
            </div>
            <div class="form-group">
                <label for="" class="col-form-label">Nomer Telpon</label>
                <textarea class="form-control" id="" name="nomer_telpon" value="{{ $data->nomer_telpon }}"></textarea>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</body>
</html>