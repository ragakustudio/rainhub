<div class="space-y-6">

    <!-- TOP HEADER -->
    <div class="flex justify-between items-start">

        <div>
            <h1 class="text-2xl font-semibold text-neutral-800">
                <?= $portfolio->client ?>
            </h1>

            <!-- BREADCRUMB -->
            <p class="text-sm text-gray-500">
                <a href="<?= base_url('portfolio') ?>" class="hover:underline">Project</a>
                /
                <span class="text-primary-600"><?= $portfolio->title ?></span>
            </p>
        </div>

        <!-- ACTION BUTTONS -->
        <div class="flex gap-3">
            <a href="<?= base_url('portfolio/edit/'.$portfolio->id) ?>"
               class="px-4 py-2 bg-primary-500 text-white rounded-md hover:bg-primary-600 transition">
               Edit
            </a>

            <button onclick="document.getElementById('deleteModal').classList.remove('hidden')"
                    class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition">
                Delete
            </button>
        </div>

    </div>


    <!-- MAIN IMAGE -->
     
    <?php if (!empty($portfolio->thumbnail)): ?>
      <img 
        src="<?= base_url('assets/img/portfolio/'.$portfolio->thumbnail) ?>" 
        class="w-full h-72 object-cover rounded-lg"
      >
    <?php else: ?>
      <img 
        src="<?= base_url('assets/img/placeholder-image.jpg') ?>" 
        class="w-full h-72 object-cover rounded-lg"
      >
    <?php endif; ?>

    <!-- TWO COLUMNS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- LEFT COLUMN (40%) -->
        <div class="md:col-span-1 space-y-4">

            <div>
                <p class="text-gray-500 text-sm">Client</p>
                <p class="font-medium text-neutral-800"><?= $portfolio->client ?></p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Timeline</p>
                <p class="font-medium text-neutral-800"><?= $portfolio->year ?></p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Location</p>
                <p class="font-medium text-neutral-800">
                    <?= $portfolio->city ?>, <?= $portfolio->country ?>
                </p>
            </div>

            <div class="mb-4">
                <?php if (!empty($services)): ?>
                    <p class="text-gray-700 font-medium">Deliverables</p>
                    <p class="text-gray-600">
                        <?= implode(', ', array_map(fn($s) => $s->name, $services)) ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <!-- RIGHT COLUMN (60%) -->
        <div class="md:col-span-2">
            <p class="text-gray-700 leading-relaxed">
                <?= nl2br($portfolio->description) ?>
            </p>
        </div>

    </div>

    <!-- DELETE MODAL -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black/40 flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">

            <h2 class="text-lg font-semibold mb-3 text-neutral-800">Delete Project</h2>
            <p class="text-gray-600 mb-6">Are you sure you want to delete this project?</p>

            <div class="flex justify-end gap-3">
                <button onclick="document.getElementById('deleteModal').classList.add('hidden')"
                        class="px-4 py-2 border rounded-md">
                    Cancel
                </button>

                <a href="<?= base_url('portfolio/delete/'.$portfolio->id) ?>"
                   class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Delete
                </a>
            </div>

        </div>
    </div>

</div>
