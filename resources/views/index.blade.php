<html>
<head>
<link rel="stylesheet" href="app.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.red {
    color: red;
}
.blue {
    color: darkblue;
}
</style>
</head>
<body>

<div class="container">
<div class="row">
<table class="table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">original title</th>
      <th scope="col">author</th>
      <th scope="col">release</th>
      <th scope="col">amount</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>  
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic) 
    <tr>
        <th scope="row">{{$comic->id}}</th>
        <td>{{$comic->title}}</td>
        <td>{{$comic->original_title}}</td>
        <td>{{$comic->author}}</td>
        <td>{{$comic->release}}</td>
        <td>€ {{$comic->amount}}</td>
        <td class="blue">update</td>
        <td class="red">
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input class="red" type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

</body>
</html>