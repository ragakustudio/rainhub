<nav class="h-16 bg-white border-b flex items-center justify-between px-8 shadow-sm">

    <h1 class="text-xl font-semibold text-gray-800">
        <?= $page_title ?? 'Dashboard' ?>
    </h1>

    <div class="flex items-center gap-4">
        <span class="text-gray-600 text-sm">
            <?= $this->session->userdata('role'); ?>
        </span>

        <div class="w-10 h-10 bg-primary text-white flex items-center justify-center rounded-full">
            <?= strtoupper(substr($this->session->userdata('name'), 0, 1)); ?>
        </div>
    </div>

</nav>
