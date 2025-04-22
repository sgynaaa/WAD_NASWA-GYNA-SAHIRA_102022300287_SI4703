<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        .body{
            font-size: 16px;
            justify-content: center;
            padding: 50px;
            background-color: white;
        }

        .konten{
            font-size: 16px;
            padding: 10px 20px
            marging-top: 8px;
        }

        .button{
            font-size: 16px;
            text-align: center;
            padding: 10px 20px;
            margin-top: 8px;
        }

        

    </style>
</head>
<body>
    <h1 style="text-align: center;">Tambah Produk</h1>
    <div class="body">
        <form action="{{ url('/produk/store') }}" method="POST" style="width: 300px; margin: auto;">
            @csrf
            <div class="konten">
                <label>Nama:</label><br>
                <input classtype="text" name="name" required><br><br>

                <label>Kategori:</label><br>
                <input type="text" name="category" required><br><br>

                <label>Stok:</label><br>
                <input type="number" name="stock" required><br><br>

                <label>Harga:</label><br>
                <input type="number" name="price" required><br><br>
            </div>

            <button class="button" type="submit">Tambahkan</button>
        </form>
    </div>
</body>
</html>
