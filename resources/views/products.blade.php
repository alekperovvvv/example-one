<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
</head>
<body>
<div>
    @foreach ($products as $product)
        @include('components.product', ['product' => $product])
    @endforeach
</div>
</body>
</html>