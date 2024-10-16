<!DOCTYPE html>
<html>
<head>
 
    <style>
    body {
        font-family: sans-serif;
        background-color: #f0f0f0;
    }
    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .header h1 {
        margin: 0;
    }
    .header .time {
        font-size: 18px;
        color: #777;
    }
    .sidebar {
        width: 20%;
        float: left;
        padding: 20px;
        background-color: #333;
        color: white;
    }
    .sidebar ul {
        list-style: none;
        padding: 0;
    }
    .sidebar li {
        margin-bottom: 10px;
    }
    .sidebar a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        display: block;
        padding: 10px;
        border-radius: 5px;
    }
    .sidebar a:hover {
        background-color: #555;
    }
    .content {
        width: 75%;
        float: right;
        padding: 20px;
    }
    .content .section {
        background-color: #fff;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .content .section h2 {
        margin-top: 0;
    }
    .content .section .form-group {
        margin-bottom: 10px;
    }
    .content .section .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .content .section .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .content .section .form-group button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .content .section .form-group button:hover {
        background-color: #45a049;
    }
    .content .section .table {
        width: 100%;
        border-collapse: collapse;
    }
    .content .section .table th,
    .content .section .table td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }
    .content .section .table th {
        background-color: #f0f0f0;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Kasirku</h1>
        <div class="time">09-09-2024</div>
    </div>

    <div class="content">
        <div class="section">
            <h2>Detail Pembelian</h2>
            <p>Nama Pelanggan: Farhan</p>
        </div>

        <div class="section">
            <h2>Tambah Produk</h2>
            <form id="form-produk">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" placeholder="Headset Robot 02">
                </div>
                <div class="form-group">
                    <label for="jumlah_produk">Jumlah Produk</label>
                    <input type="number" id="jumlah_produk" name="jumlah_produk" placeholder="1" min="1">
                </div>
                <div class="form-group">
                    <label for="harga_produk">Harga Produk</label>
                    <input type="number" id="harga_produk" name="harga_produk" placeholder="50000" min="1">
                </div>
                <div class="form-group">
                    <button type="button" id="submit-produk">Tambah Produk</button>
                </div>
            </form>
        </div>

        <div class="section">
            <h2>Daftar Produk Pembelian</h2>
            <div class="table-responsive">
                <table class="table" id="tabel-produk">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Produk akan ditambahkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section">
            <h2>Total Pembelian</h2>
            <p id="total_pembelian">Rp 0</p>
        </div>
    </div>
</div>

<script>
    let produkCount = 0;
    let totalPembelian = 0;

    document.getElementById('submit-produk').addEventListener('click', function() {
        const namaProduk = document.getElementById('nama_produk').value;
        const jumlahProduk = parseInt(document.getElementById('jumlah_produk').value);
        const hargaProduk = parseInt(document.getElementById('harga_produk').value);

        if (!namaProduk || jumlahProduk <= 0 || hargaProduk <= 0) {
            alert('Mohon isi semua data produk dengan benar.');
            return;
        }

        produkCount++;

        const subtotal = jumlahProduk * hargaProduk;

        const tableBody = document.querySelector('#tabel-produk tbody');
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${produkCount}</td>
            <td>${namaProduk}</td>
            <td>Rp ${hargaProduk.toLocaleString()}</td>
            <td>${jumlahProduk}</td>
            <td class="subtotal">Rp ${subtotal.toLocaleString()}</td>
            <td><button class="btn-delete">Delete</button></td>
        `;

        // Tambahkan baris ke tabel
        tableBody.appendChild(row);

        // Update total pembelian
        totalPembelian += subtotal;
        document.getElementById('total_pembelian').innerText = `Rp ${totalPembelian.toLocaleString()}`;

        // Hapus produk dari daftar saat tombol Delete diklik
        row.querySelector('.btn-delete').addEventListener('click', function() {
            const rowSubtotal = parseInt(row.querySelector('.subtotal').innerText.replace(/Rp\s|,/g, ''));
            tableBody.removeChild(row);

            // Kurangi total pembelian
            totalPembelian -= rowSubtotal;
            document.getElementById('total_pembelian').innerText = `Rp ${totalPembelian.toLocaleString()}`;
        });

        // Reset form setelah produk ditambahkan
        document.getElementById('form-produk').reset();
        const rowSubtotal = parseInt(row.querySelector('.subtotal').innerText.replace(/Rp\s|,/g, ''));
totalPembelian -= rowSubtotal;

    });
</script>
</body>
</html>
