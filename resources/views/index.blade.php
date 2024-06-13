<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Users</h1>
  <div>
    @if (session()->has('success'))
    <div>{{session('success')}}</div>
  @endif
  </div>
  <div>
    <div>
      <a href="{{route('users.create')}}">Create user</a>
    </div>
    <table>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
      @foreach ($users as $user)
      <tr>
      <td>{{$user->username}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->birthday}}</td>
      <td><a href="{{route('users.edit', ['user' => $user])}}">Edit</a></td>
      <td>
        <form method="post" action="{{route('users.delete', ['user'=>$user])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
        </form>
      </td>
      </tr>
    @endforeach
    </table>
  </div>
</body>

</html>