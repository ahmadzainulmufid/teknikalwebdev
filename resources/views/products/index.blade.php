<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="container mx-auto max-w-5xl bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Produk</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                + Tambah Produk
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama</th>
                        <th class="p-3 border">Deskripsi</th>
                        <th class="p-3 border">Harga</th>
                        <th class="p-3 border">Stok</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $index => $product)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border text-center">{{ $index + 1 }}</td>
                            <td class="p-3 border font-semibold">{{ $product->name }}</td>
                            <td class="p-3 border text-gray-600">{{ $product->description ?? '-' }}</td>
                            <td class="p-3 border text-green-600 font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="p-3 border">{{ $product->stock }}</td>
                            <td class="p-3 border text-center flex justify-center gap-2">
                                <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">Edit</a>
                                
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-500">Belum ada produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>