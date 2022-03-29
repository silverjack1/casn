<?= $this->include('temp/header') ?>
<?= $this->include('temp/navbar') ?>
<?= $this->include('temp/sidebar') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?= $this->renderSection('content') ?>
</div>
<!-- /.content-wrapper -->
<?= $this->include('temp/footer') ?>