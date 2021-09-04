<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br>
  <h2>Form Artikel</h2>
  <p>create new data</p>
  <form action="{{ route('artikel.update') }}" method="POST">
    <input type="hidden" name="id" value="{{$data->id}}">

    @csrf
    <div class="form-group">
      <label for="judul">Judul:</label>
      <input type="text" class="form-control" placeholder="Judul" name="judul" required value="{{$data->judul}}">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi:</label>
      <textarea class="form-control" rows="5" cols="5" name="deskripsi">{{$data->deskripsi}}</textarea>
    </div>
    <div class="form-group">
      <label for="kategori">Kategori:</label>
      <select name="kategori" class="form-control" >
            <option {{$data->kategori == 'php' ? 'selected="selected"' : ''}}>php</option>
            <option {{$data->kategori == 'java' ? 'selected="selected"' : ''}}>java</option>
            <option {{$data->kategori == 'js' ? 'selected="selected"' : ''}}>js</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>

</body>
</html>

