<?php
$portfolio = $portfolio ?? [];
$total_project = $total_project ?? 0;
?>


<div class="flex items-center justify-between mb-6">
    
    <div>
        <h1 class="text-2xl font-semibold">Project</h1>
        <p class="text-gray-500 text-sm mt-1">
            Total: <span class="font-semibold"><?= $total_project ?></span> project(s)
        </p>
    </div>

    <a 
        href="<?= base_url('portfolio/create') ?>"
        class="px-4 py-2 bg-primary-500 text-white rounded-md shadow-md 
               hover:bg-primary-600 active:bg-primary-700 transition font-medium flex items-center gap-2"
    >
        <i class="ti ti-plus text-lg"></i>
        Tambah Project
    </a>

</div>


<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <?php foreach ($portfolio as $item): ?>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">

        <img src="<?= base_url('assets/img/portfolio/'.$item->thumbnail) ?>" 
             class="w-full h-48 object-cover">

        <div class="p-4 space-y-3">

            <div class="flex items-center justify-between">

                <div class="flex-1">
                    <a 
                        href="<?= base_url('portfolio/detail/'.$item->id) ?>" 
                        class="text-lg font-semibold text-primary-600 hover:underline"
                    >
                        <?= $item->client ?>
                    </a>

                    <p class="text-gray-600 text-sm">
                        <span class="font-medium"><?= $item->year ?></span> •
                        <span class="font-medium"><?= $item->city ?>, <?= $item->country ?></span>
                    </p>
                </div>

                <div class="flex items-center gap-2">
                    <a 
                      href="<?= base_url('portfolio/detail/'.$item->id) ?>"
                      class="h-10 px-4 border border-gray-300 text-neutral-700 rounded-md 
                             hover:bg-gray-50 active:bg-gray-100 transition flex items-center justify-center">
                      View
                    </a>
                </div>

            </div>

        </div>
    </div>

    <?php endforeach; ?>

</div>
