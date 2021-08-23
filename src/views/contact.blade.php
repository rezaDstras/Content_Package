<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action='{{route('store.contact')}}'>
        @csrf
        <div>
            <label>name</label>
            <input type="text" name="name" placeholder="your name">
        </div>
        <div>
            <label>email</label>
            <input type="email" name="email" placeholder="your email">
        </div>
        <div>
            <label>message</label>
            <textarea  name="message" placeholder="your message"></textarea>
        </div>
        <div>

            <button type="submit" style="color: green" >Submit</button>
        </div>
    </form>
</body>
</html>
