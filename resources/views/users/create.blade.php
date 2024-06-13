<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Users</h1>
  <form method="post" action="{{route('users.add')}}">
    @csrf
    @method('post')
    <div>
      <label for="username">Фамилия Имя Отчество</label>
      <input required type="text" id='username' name="username" placeholder="ФИО"/>
    </div>
    <div>
      <label for="email">Электронная почта</label>
      <input required type="text" id='email' name="email" placeholder="Электронная почта"/>
    </div>
    <div>
      <label for="gender">Пол</label>
      <input type="text" id='gender' name="gender" placeholder="Пол"/>
    </div>
    <div>
      <label for="birthday">Дата рождения</label>
      <input type="date" id='birthday' name="birthday" placeholder="Дата рождения"/>
    </div>
    <div>
      <input type="submit" value="Создать пользователя"/>
    </div>
  </form>
</body>

</html>