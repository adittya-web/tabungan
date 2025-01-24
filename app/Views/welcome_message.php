<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Penjualan Pakaian Bekas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f0f0f0, #ffffff);
            color: #333;
        }
        .hero {
            background-image: url('/assets/image/baju.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.6);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .features {
            padding: 4rem 1rem;
            text-align: center;
        }
        .features h2 {
            margin-bottom: 2rem;
        }
        .features .feature {
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .features .feature:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .cta {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 3rem 1rem;
        }
        .cta a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.8rem 2rem;
            border: 2px solid white;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .cta a:hover {
            background: white;
            color: #007bff;
        }
        footer {
            background: #f8f9fa;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <header class="hero">
        <div class="text-center">
            <h1>Welcome to Parak Karakah Thrift Store</h1>
            <p>Jelajahi pakaian bekas berkualitas tinggi dengan harga terjangkau!</p>
            
            <a href="<?= site_url('Login/logout') ?>" class="btn btn-primary btn-lg">Silahkan Login</a>
        </div>
    </header>

    <section id="features" class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Pilihan Luas</h3>
                        <p>Telusuri beragam gaya dan merek untuk setiap kesempatan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Ramah Lingkungan</h3>
                        <p>Kurangi limbah dan promosikan fesyen berkelanjutan dengan menggunakan kembali pakaian.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <h3>Harga terjangkau</h3>
                        <p>Belanja barang-barang bergaya dan tahan lama tanpa menghabiskan banyak uang.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h2>Mulailah Perjalanan Fashion Berkelanjutan Anda Sekarang</h2>
        <p>Kunjungi toko kami dan temukan kesenangan berbelanja barang bekas!</p>
        <a href="#">Shop Now</a>
    </section>

    <footer>
        <p>&copy; 2025 Parak Karakah Thrift Store. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
