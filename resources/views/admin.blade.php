@extends('layout.sidemenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
</head>
<body>
    @section('content')
    <div class="overflow-x-auto p-4">
        <table class="min-w-full bg-white border border-purple-200 rounded-lg shadow-lg">
            <!-- Header Tabel dengan Gradasi -->
            <thead class="bg-gradient-to-r from-blue-400 to-purple-500 text-white">
                <tr>
                    <th class="px-6 py-3 border-b border-purple-300 text-left text-xs font-medium uppercase tracking-wider">Id Admin</th>
                    <th class="px-6 py-3 border-b border-purple-300 text-left text-xs font-medium uppercase tracking-wider">Nama Admin</th>
                    <th class="px-6 py-3 border-b border-purple-300 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 border-b border-purple-300 text-left text-xs font-medium uppercase tracking-wider">Alamat</th>
                    <th class="px-6 py-3 border-b border-purple-300 text-left text-xs font-medium uppercase tracking-wider">No Telepon</th>
                </tr>
            </thead>
            
            <!-- Body Tabel dengan Warna Alternating -->
            <tbody class="text-gray-700">
                @foreach ($admin as $adm)
                    <tr class="hover:bg-purple-50 transition duration-150">
                        <td class="px-6 py-4 border-b border-purple-100">{{ $adm->id_admin }}</td>
                        <td class="px-6 py-4 border-b border-purple-100 font-medium">{{ $adm->nama_admin }}</td>
                        <td class="px-6 py-4 border-b border-purple-100">
                            <span class="px-2 py-1 text-xs rounded-full 
                                {{ $adm->role == 'Admin' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $adm->role == 'Super Admin' ? 'bg-purple-100 text-purple-800' : '' }}
                                {{ $adm->role == 'Staff' ? 'bg-indigo-100 text-indigo-800' : '' }}">
                                {{ $adm->role }}
                            </span>
                        </td>
                        <td class="px-6 py-4 border-b border-purple-100">{{ $adm->alamat_admin }}</td>
                        <td class="px-6 py-4 border-b border-purple-100">{{ $adm->No_telp }}</td>
                    </tr>
                @endforeach
            </tbody>
            
            <!-- Footer Tabel dengan Gradasi -->
            <tfoot class="bg-gradient-to-r from-blue-200 to-purple-200 text-gray-700">
                <tr>
                    <td colspan="5" class="px-6 py-3 text-xs text-center">
                        Total Admin: {{ count($admin) }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    @endsection
</body>
</html>