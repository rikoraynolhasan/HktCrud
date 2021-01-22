<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Edit</title>
</head>

<body>
  <h1>Edit</h1>
  @foreach($barangEdit as $item)
  <form action="{{route('barang.update',$item->id)}}" method="POST" >
  @csrf
  @method('put')
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label>
      <div class="col-sm-10">
        <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="" value="{!! $item->nama_barang !!}">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis</label>
      <div class="col-sm-10">
      <select name="jenis" id="" class="form-control">
        @if($item->jenis == "Asus")
          <option value="">-Pilih-</option>
          <option value="Asus" selected>Asus</option>
          <option value="Acer">Acer</option>
          <option value="HP">HP</option>
        @elseif($item->jenis == "Acer")
          <option value="">-Pilih-</option>
          <option value="Asus" >Asus</option>
          <option value="Acer" selected>Acer</option>
          <option value="HP">HP</option>
        @else
          <option value="">-Pilih-</option>
          <option value="Asus" >Asus</option>
          <option value="Acer" >Acer</option>
          <option value="HP" selected>HP</option>
        @endif
      </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Barang</label>
      <div class="col-sm-10">
        <input type="number" name="jumlah_barang" class="form-control" id="inputEmail3" placeholder="" value="{!! $item->jumlah_barang !!}">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">diskon</label>
      <div class="col-sm-10">
        <input type="number" name="diskon" class="form-control" id="inputEmail3" placeholder="" value="{!! $item->diskon !!}">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">tanggal</label>
      <div class="col-sm-10">
        <input type="date" name="tanggal_masuk" class="form-control" id="inputEmail3" placeholder="" value="{!! $item->tanggal_masuk !!}">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
  @endforeach
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>