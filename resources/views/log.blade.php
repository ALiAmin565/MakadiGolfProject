<!DOCTYPE html>
<html>

<head>
    <title>Log Activity Lists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <h1>Log Activity Lists</h1>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Subject</th>
                <th>URL</th>
                <th>Method</th>
                <th>Ip</th>
                <th>User Id</th>
            </tr>
            @if ($logs->count())
                @foreach ($logs as $key => $log)
                    <tr>
                        <td>{{ $logs->firstItem() + $key }}</td>
                        <td>{{ $log->subject }}</td>
                        <td class="text-success">{{ $log->url }}</td>
                        <td><label class="label label-info">{{ $log->method }}</label></td>
                        <td class="text-warning">{{ $log->ip }}</td>
                        <td>{{ $log->name }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
        <div class="text-center">
            {{ $logs->links('pagination::bootstrap-4', ['showing' => 5]) }}
        </div>
    </div>
</body>

</html>
