<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <p>
       {{-- @foreach ($data as $row)
           <p>{{$row->product->price}}</p>
           <p>{{$row->contact->phone}}</p>
           <p>{{$row->email}}</p>
       @endforeach --}}
       {{$data->name}}
   </p>
</body>
</html>