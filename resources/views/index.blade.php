<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>
    <header>
        <form action="{{ route('users.import') }}" method="post">
            <button><a href="{{ route('users.export') }}">export</a></button>
            <label for="file">import</label>
            <input type="file" name="file" id="file">
        </form>
    </header>
    <table>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @isset($users)
        @foreach ($users as $item)
            <tr>
                <td> {{ $item->id }} </td>
                <td> {{ $item->name }} </td>
                <td> {{ $item->email }} </td>
            </tr>
        @endforeach
        @endisset
    </table>
</body>
</html>