@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold">List Biodata</h1>

    <div class="mt-6">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Full Name</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Username</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">NIM</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Email</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Agama</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Jenis Kelamin</th>
                    <th class="text-left py-3 px-4 font-semibold uppercase text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($biodata as $data)
                <tr>
                    <td class="text-left py-3 px-4">{{ $data->full_name }}</td>
                    <td class="text-left py-3 px-4">{{ $data->username }}</td>
                    <td class="text-left py-3 px-4">{{ $data->nim }}</td>
                    <td class="text-left py-3 px-4">{{ $data->email }}</td>
                    <td class="text-left py-3 px-4">{{ $data->agama }}</td>
                    <td class="text-left py-3 px-4">{{ $data->jenis_kelamin }}</td>
                    <td class="text-left py-3 px-4">
                        <a href="{{ route('biodata.edit', $data->id) }}" class="text-indigo-600 hover:underline mr-3">Edit</a>
                        <form action="{{ route('biodata.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
