<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debug: User Access</title>
</head>
<body>

<h1>Debug: User Access</h1>
<br>
<p>Name: {{$user->name}}</p>
<p>Email: {{$user->email}}</p>
<p>Username: {{$user->username}}</p>
<br>
<h2>Roles</h2>
<ul>
    @foreach($user->roles as $role)
        <li>{{$role->name}}</li>
    @endforeach
</ul>

<h2>Permissions</h2>
<ul>
    @foreach($user->permissions as $permission)
        <li>{{$permission->name}}</li>
    @endforeach
</ul>

</body>
</html>
