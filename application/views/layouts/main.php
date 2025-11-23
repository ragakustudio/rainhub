<?php $this->load->view('layouts/header'); ?>

<?php $this->load->view('layouts/sidebar'); ?>

<div class="flex-1 min-h-screen">

    <?php $this->load->view('layouts/navbar'); ?>

    <div class="p-6">
        <?= $content ?>
    </div>
</div>

</body>
</html>
