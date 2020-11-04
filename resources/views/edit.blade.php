<!DOCTYPE html>
<html lang="en">

<head>
  
</head>

<body>
  <form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
      <label for="title">Titolo</label>
      <input type="text" name="title" placeholder="Titolo" id="title" value="{{$comic->title}}">
    </div>

    <div>
      <label for="original_title">Titolo Originale</label>
      <input type="text" name="original_title" placeholder="Titolo Originale" id="originalTitle" value="{{$comic->original_title}}">
    </div>
    
    <div>
      <label for="author">Autore</label>
      <input type="text" name="author" placeholder="Autore" id="author" value="{{$comic->author}}">
    </div>

    <div>
      <label for="year">Anno di pubblicazione</label>
      <input type="date" name="year" id="year" value="{{$comic->release}}">
    </div>

    <div>
      <label for="amount">Prezzo</label>
      <input type="text" name="amount" placeholder="Prezzo" id="amount" value="{{$comic->amount}}">
    </div>

    <input type="submit" value="Salva">
  </form>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      </ul>
    </div>
  @endif

</body>
</html>