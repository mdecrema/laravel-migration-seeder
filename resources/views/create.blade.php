<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="{{route('comics.store')}}" method="POST">
    @csrf
    @method('POST')
    <div>
      <label for="title">Titolo</label>
      <input type="text" name="title" placeholder="Titolo" id="title">
    </div>

    <div>
      <label for="original_title">Titolo Originale</label>
      <input type="text" name="original_title" placeholder="Titolo Originale" id="originalTitle">
    </div>
    
    <div>
      <label for="author">Autore</label>
      <input type="text" name="author" placeholder="Autore" id="author">
    </div>

    <div>
      <label for="year">Anno di pubblicazione</label>
      <input type="date" name="year" id="year">
    </div>

    <div>
      <label for="amount">Prezzo</label>
      <input type="text" name="amount" placeholder="Prezzo" id="amount">
    </div>

    <input type="submit" value="Salva">
  </form>

</body>

</html>

