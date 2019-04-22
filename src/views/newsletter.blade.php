<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Subscribe For Newsletter</title>
    </head>
    <body>
        <h1>Subscribe For Newsletter</h1>

        <form class="" action="{{route('newsletter')}}" method="post">
            @csrf
            <input type="email" name="email" value="" placeholder="Email">
            <button type="submit" name="button">Subscribe</button>
        </form>
    </body>
</html>
