<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Barang</title>
</head>

<body>
<a href="{{ route('barang.create')}}" class="badge badge-info">create</a>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jenis</th>
        <th scope="col">Jumlah Barang</th>
        <th scope="col">Diskon</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($barang as $item)
      <tr>
        <th scope="row"></th>
        <td>{!!$item->nama_barang !!}</td>
        <td>{!!$item->jenis !!}</td>
        <td>{!!$item->jumlah_barang !!}</td>
        <td>{!!$item->diskon !!}</td>
        <td>{!!$item->tanggal_masuk !!}</td>
        <td>
          <form action="{{route('barang.destroy',$item->id)}}" method="post">
            @csrf
            @method('delete')
            <a href="barang/{!!$item->id!!}" class="badge badge-primary">View</a>
            <a href="barang/{!!$item->id!!}/edit" class="badge badge-warning">edit</a>
            <button type="submit" class="badge badge-danger">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
  </table>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>