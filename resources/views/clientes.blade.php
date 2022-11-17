<h3>Clientes:</h3>

<ul>

  @foreach($clientes as $cliente)
    <li> <a href='cliente/{{$cliente->id}}'> {{$cliente->nome}}</a></li>
  @endforeach

</ul>

<h3>Cadastrar cliente: </h3>

<form method='post'>
    {{csrf_field()}}
    <input type='text' name='nome' placeholder='Nome...'>

    <br><br>

    <input type='text' name='email' placeholder='Email...'>

    <br><br>

    <input type='submit' value='Cadastrar!'>


</form>