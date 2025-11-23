<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<?php foreach ($portfolio as $item): ?>

    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-5">

        <!-- IMAGE -->
        <div class="w-full h-48 mb-4">
            <img src="<?= base_url('assets/img/portfolio/'.$item->thumbnail) ?>"
                 class="w-full h-full object-cover rounded-lg">
        </div>

        <!-- CLIENT -->
        <h3 class="text-lg font-semibold text-gray-900 mb-1">
            <?= $item->client ?>
        </h3>

        <!-- SERVICE -->
        <p class="text-sm text-gray-500 mb-6">
            <?= $item->service_name ?? '[Deliverables]' ?>
        </p>

        <!-- ACTION BUTTONS -->
        <div class="flex justify-between items-center">

            <!-- EDIT BUTTON -->
            <a href="<?= base_url('portfolio/edit/'.$item->id) ?>"
               class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition">
               Edit Product
            </a>

            <!-- DELETE ICON BUTTON -->
            <a href="<?= base_url('portfolio/delete/'.$item->id) ?>"
               onclick="return confirm('Delete this item?')"
               class="p-3 bg-red-100 hover:bg-red-200 text-red-600 rounded-full transition">

               <i class="fi fi-br-eraser"></i>
            </a>

        </div>

    </div>

<?php endforeach; ?>

</div>
