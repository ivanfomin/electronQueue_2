@extends('layouts.site')

@section('content')

    <table border="1px black solid">
        <tr>
            <th>Id</th>
            <th>Task_id</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        @foreach($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->task_id }}</td>
                <td>{{ $log->status }}</td>
                <td>{{ $log->created_at }}</td>
                <td>{{ $log->updated_at }}</td>
            </tr>
        @endforeach
    </table>

@endsection


