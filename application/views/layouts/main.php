<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $page_title ?? 'RainHUB' ?></title>

    <!-- Tailwind Build -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

</head>

<body class="bg-gray-100 flex">

    <!-- SIDEBAR -->
    <?php $this->load->view('layouts/sidebar'); ?>

    <!-- MAIN CONTENT WRAPPER -->
    <div class="flex-1 flex flex-col min-h-screen">
        
        <!-- NAVBAR -->
        <?php $this->load->view('layouts/navbar'); ?>

        <!-- PAGE CONTENT -->
        <main class="p-6">
            <?= $content ?>
        </main>

    </div>

</body>
</html>
