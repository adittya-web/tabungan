<?php $this->extend('layout/main') ?>

<?php $this->section('isi') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 1.5rem;
            font-size: 1rem;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        .hero {
            text-align: center;
            padding: 6rem 2rem;
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            border-radius: 0 0 20px 20px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.4rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
        }

        .hero a {
            display: inline-block;
            background-color: white;
            color: #007bff;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .hero a:hover {
            background-color: #e9ecef;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .info-box {
            background-color: #ffffff;
            color: #333;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .info-box i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .info-header h2 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: bold;
            color: #000000;
        }

        .info-header p {
            margin: 0.5rem 0 1rem;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .info-box.green {
            background-color: #007bff;
            color: white;
        }

        .info-box.yellow {
            background-color: #007bff;
            color: white;
        }

        .info-box.blue {
            background-color: #007bff;
            color: white;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        footer p {
            font-size: 1rem;
            margin: 0;
        }

        footer a {
            color: #ffc107;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
    <div style="background:transparent;color:#fff;margin:5px 0;padding:10px 0;width:100%">
  <marquee direction="left" scrolldelay="20" truespeed="truespeed" scrollamount="1" onmouseover="this.stop()" onmouseout="this.start()" style="width:100%;">
    Selamat Datang Di Sistem Informasi Pakaian Bekas
  </marquee>
</div>

    </header>
    <section class="dashboard">
    </section>

</body>
</html>

<?= $this->endSection() ?>
