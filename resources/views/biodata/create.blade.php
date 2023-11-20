@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-semibold">Tambah Biodata</h1>

    <div class="mt-6">
        <form action="{{ route('biodata.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="full_name" class="block  text-gray-600 font-semibold">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="w-full mt-1 p-2 rounded-md" required>
                </div>
                <div>
                    <label for="username" class="block text-gray-600 font-semibold">Username</label>
                    <input type="text" name="username" id="username" class="w-full mt-1 p-2 rounded-md" required>
                </div>
                <div>
                    <label for="password" class="block text-gray-600 font-semibold">Password</label>
                    <input type="password" name="password" id="password" class="w-full mt-1 p-2 rounded-md" required>
                </div>
                <div>
                    <label for="nim" class="block text-gray-600 font-semibold">NIM</label>
                    <input type="text" name="nim" id="nim" class="w-full mt-1 p-2 rounded-md" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-600 font-semibold">Email</label>
                    <input type="email" name="email" id="email" class="w-full mt-1 p-2 rounded-md" required>
                </div>
                <div>
                    <label for="agama" class="block text-gray-600 font-semibold">Agama</label>
                    <select name="agama" id="agama" class="w-full mt-1 p-2 rounded-md" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-600 font-semibold">Jenis Kelamin</label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="jenis_kelamin" value="Laki-laki" required>
                        <span class="ml-2">Laki-laki</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="jenis_kelamin" value="Perempuan" required>
                        <span class="ml-2">Perempuan</span>
                    </label>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
