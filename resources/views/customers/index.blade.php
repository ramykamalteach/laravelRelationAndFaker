<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 95%;" border> 
        @foreach ($customers as $item)
            <tr>
                <th>{{ $item->fullName }}</th>
                <th>{{ $item->email }}</th>

                <th>{{ $item->profile->address }}</th>
                <th>{{ $item->profile->phone }}</th>
            </tr>
        @endforeach
    </table>
</body>
</html>