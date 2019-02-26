<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" cellspacing="0">
    <tr>
        <th width="30px">Id</th>
        <th width="100px">Name</th>
        <th width="100px">Email</th>
        <th width="100px">dob</th>
    </tr>
    @foreach($customer as $key=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->dob}}</td>
            <td><a href="{{route('delete', $value->id)}}">delete</a></td>
            <td><a href="{{route('edit', $value->id)}}">Update</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>