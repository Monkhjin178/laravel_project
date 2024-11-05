@extends('layouts.admin')
@section('content')
    <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
    <table class="table table-bordered align-items-center">
        <thead>
        <tr>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">ID</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Нэр</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Товчлол</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Үнэ</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Тайлбар</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Created at</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">Updated at</th>
            <th class="text-xs text-uppercase text-secondary font-weight-bolder opacity-10">action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->slug }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="{{ route('edit', $item->id)}}" class="btn-danger">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
