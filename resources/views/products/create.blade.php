<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    <div class="container mx-auto max-w-lg bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Tambah Produk Baru</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Nama Produk</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full border p-2 rounded @error('name') border-red-500 @enderror">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Deskripsi (Opsional)</label>
                <textarea name="description" class="w-full border p-2 rounded">{{ old('description') }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Harga</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}"
                        class="w-full border p-2 rounded @error('price') border-red-500 @enderror">
                    @error('price')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Stok</label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}"
                        class="w-full border p-2 rounded @error('stock') border-red-500 @enderror">
                    @error('stock')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('products.index') }}" class="text-gray-600 hover:underline pt-2">Kembali</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">Simpan
                    Produk</button>
            </div>
        </form>
    </div>
</body>

</html>
