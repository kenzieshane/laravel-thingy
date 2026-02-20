<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

@auth
<p>Hello!</p>
<form action="/logout" method="POST">
    @csrf
    <button>shit imma log out</button>
</form>
@else
<div style="border: 3px solid black;">
    <h1>Register</h1>
   <form action="/register" method="POST">
    @csrf
<input name="name" type="text" placeholder="name">
<input name="email" type="text" placeholder="email@email.com">
<input name="password" type="password" placeholder="password">
<button>Register</button>   
</form>
</div>   
<br>
<hr>
<br>
<div style="border: 3px solid black;">
    <h1>Log in you fatass buffoon</h1>
   <form action="/login" method="POST">
    @csrf
<input name="loginname" type="text" placeholder="name">
<input name="loginpassword" type="password" placeholder="password">
<button>Log in lmao</button>   
   </div>
</form>   
@endauth



</body>
</html>