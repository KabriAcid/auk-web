<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff List</title>
</head>
<body>
    <h1>Staff List</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($staff as $member)
            <li>{{ $member->last_name }} {{ $member->first_name }} - {{ $member->email }} </li>
        @endforeach
    </ul>
</body>
</html>
