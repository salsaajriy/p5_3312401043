<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<h3 class="mt-10 text-center font-bold">Daftar Produk Toko</h3>

<div class="m-10 mt-5">
    <table class="w-full border-collapse shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-pink-300">
                <th class="px-4 py-2 text-center">No</th>
                <th class="px-4 py-2 text-center">Nama Produk</th>
                <th class="px-4 py-2 text-center">Deskripsi Produk</th>
                <th class="px-4 py-2 text-center">Harga Produk</th>
                <th class="px-4 py-2 text-center">Tanggal Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr>
                <td class="px-4 py-2">{{ $index + 1 }}</td>
                <td class="px-4 py-2 font-medium">{{ $item }}</td>
                <td class="px-4 py-2">{{ $desc[$index] }}</td>
                <td class="px-4 py-2 text-right">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                <td class="px-4 py-2">{{ $created[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
