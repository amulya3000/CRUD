<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product</h1>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label> Name </label>
            <input type="text" name="name" placeholder="name">
        </div>

        <div>
            <label> qty </label>
            <input type="text" name="qty" placeholder="qty">
        </div>

        <div>
            <label> price </label>
            <input type="text" name="price" placeholder="price">
        </div>

        <div>
            <label> Description </label>
            <input type="text" name="description" placeholder="description">
        </div>

        <div>
            <input type="submit" value="Save a new product">
        </div>

    </form>
</body>
</html>