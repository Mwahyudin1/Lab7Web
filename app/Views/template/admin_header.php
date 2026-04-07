<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div id="container">
        <header>
            <h1>Halaman Admin - My Blog</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>">Home</a>
            <a href="<?= base_url('/artikel'); ?>" class="btn-live">Live Site</a>
        </nav>
        <section id="wrapper">
            <section id="main">
                <h2><?= $title; ?></h2>