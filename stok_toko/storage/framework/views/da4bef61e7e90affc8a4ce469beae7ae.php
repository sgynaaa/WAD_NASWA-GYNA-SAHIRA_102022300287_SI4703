<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        .body{
            justify-content: center;
            padding: 50px;
            background-color: white;
        }

        .button{
            display: flex;
            justify-content: flex-start;
            text-align: center;
            margin-top: 20px;
            margin-left: 203px
        }

        .info{
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk di Toko</h1>
    <div class="body">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->category); ?></td>
                        <td><?php echo e($product->stock); ?></td>
                        <td>Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <div class="button">
                <a href="<?php echo e(url('/produk/tambah')); ?>">
                <button style="padding: 10px 20px; font-size: 16px;">+ Tambah Produk</button>
                </a>
        </div>
    </div>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/WAD/stok_toko/resources/views/produk/index.blade.php ENDPATH**/ ?>