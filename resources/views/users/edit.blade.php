<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Edit user</h1>
  @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
    </ul>


  @endif
  <form method="post" action="{{route('users.update', ['user' => $user])}}">
    @csrf
    @method('put')
    <div>
      <label for="username">Фамилия Имя Отчество</label>
      <input required type="text" id='username' name="username" placeholder="ФИО" value="{{$user->username}}" />
    </div>
    <div>
      <label for="email">Электронная почта</label>
      <input required type="text" id='email' name="email" placeholder="Электронная почта" value="{{$user->email}}" />
    </div>
    <div>
      <label for="gender">Пол</label>
      <input type="text" id='gender' name="gender" placeholder="Пол" value="{{$user->gender}}" />
    </div>
    <div>
      <label for="birthday">Дата рождения</label>
      <input type="date" id='birthday' name="birthday" placeholder="Дата рождения" value="{{$user->birthday}}" />
    </div>
    <div>
      <input type="submit" value="Update" />
    </div>
  </form>
</body>

</html>