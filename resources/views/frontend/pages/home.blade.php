<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>Admin form</h1>
    <hr>
    <form action='' method='post' enctype='multipart/form-data'>
        <input type='hidden' name='_token' value='{{csrf_token("")}}'>
        <label for='name'>Name</label>
        <input type='text' id='name' value='' name='name' placeholder='enter your name'>
        <hr>
        <label for='username'>Userame</label>
        <input type='text' id='username' value='' name='username' placeholder='enter your username'>
        <hr>
        <label for='email'>Email</label>
        <input type='text' id='email' value='' name='email' placeholder='enter your email'>
        <hr>
        <label for='image'>Image</label>
        <input type='file' id='image' value='' name='image' placeholder='choose your image'>
        <hr>
        <label for='password'>Password</label>
        <input type='password' id='password' value='' name='password' placeholder='enter your password'>
        <hr>
        <label for='cpassword'>Confirm_Password</label>
        <input type='password' id='cpassword' value='' name='cpassword' placeholder='confirm your password'>
        <hr>
        <button type='submit'>Submit</button>
</form>
</body>
</html>