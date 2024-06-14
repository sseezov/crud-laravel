<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <a href="{{route('users.index')}}">Back to main</a>
  </div>
  <h1>Create user</h1>
  @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
    </ul>


  @endif
  <form method="post" action="{{route('users.add')}}">
    @csrf
    @method('post')
    <div>
      <label for="username">Фамилия Имя Отчество</label>
      <input required type="text" id='username' name="username" placeholder="ФИО" />
    </div>
    <div>
      <label for="email">Электронная почта</label>
      <input required type="text" id='email' name="email" placeholder="Электронная почта" />
    </div>
    <div>
      <label for="email">Пол</label>
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
    </div>
    <div>
      <label for="birthday">Дата рождения</label>
      <input type="date" id='birthday' name="birthday" placeholder="Дата рождения" />
    </div>
    <div>
      <input type="submit" value="Создать пользователя" />
    </div>
  </form>
</body>

</html>