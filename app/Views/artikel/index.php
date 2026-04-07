<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
    <div class="page-title">
        <h1><?= $title; ?></h1>
        <hr>
    </div>

    <?php if($artikel): foreach($artikel as $row): ?>
    <article class="entry">
        <h2>
            <a href="<?= base_url('/artikel/' . $row['slug']);?>">
                <?= $row['judul']; ?>
            </a>
        </h2>
        <img src="<?= base_url('/gambar/' . $row['gambar']);?>" alt="<?= $row['judul']; ?>">
        <p><?= substr($row['isi'], 0, 200); ?>...</p>
    </article>
    <?php endforeach; else: ?>
        <p>Belum ada data artikel.</p>
    <?php endif; ?>
<?= $this->endSection() ?>