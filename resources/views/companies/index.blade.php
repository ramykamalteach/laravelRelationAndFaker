<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul> 
        @foreach ($companies as $item)
            <li>
                <b>{{ $item->companyName }}</b> - 
                <small>{{ $item->address }}</small>
            </li>
            <ul>
                @if (count($item->products) == 0)
                    <li>
                        Company has no products
                    </li>
                @else
                   @foreach ($item->products as $oneProduct)
                       <li>
                            {{ $oneProduct->productName }} - 
                            {{ $oneProduct->serialNumber }} - 
                            ${{ $oneProduct->price }}
                       </li>
                   @endforeach 
                @endif
            </ul>
            <br>
        @endforeach
        </ul>
</body>
</html>