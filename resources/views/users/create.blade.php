<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Users</h1>
  <form action="post" action="">
    <div>
      <label for="name">Фамилия Имя Отчество</label>
      <input type="text" name="name" placeholder="ФИО"/>
    </div>
    <div>
      <label for="email">Электронная почта</label>
      <input type="text" name="email" placeholder="Электронная почта"/>
    </div>
    <div>
      <label for="gender">Пол</label>
      <input type="text" name="gender" placeholder="Пол"/>
    </div>
    <div>
      <label for="birthday">Дата рождения</label>
      <input type="date" name="birthday" placeholder="Дата рождения"/>
    </div>
    <div>
      <input type="submit" value="Создать пользователя"/>
    </div>
  </form>
</body>

</html>