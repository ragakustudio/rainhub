<?php
$portfolio = $portfolio ?? null;
$services_list = $services_list ?? [];
$selected_services = $selected_services ?? [];
$images = $images ?? [];
?>

<div class="p-6 space-y-8">

  <h1 class="text-2xl font-semibold">Edit Project</h1>
  <p class="text-gray-600">Fill the project data below.</p>

    <!-- FORM -->
    <form action="<?= base_url('portfolio/update/'.$portfolio->id) ?>" 
          method="POST" enctype="multipart/form-data"
          class="space-y-8">

        <?php 
$this->load->view('portfolio/form', [
    'portfolio'             => $portfolio,
    'action'                => base_url('portfolio/update/'.$portfolio->id),
    'services_list'         => $services_list,
    'deliverables_list'     => $deliverables_list,
    'selected_services'     => $selected_services,
    'selected_deliverables' => $selected_deliverables,
    'images'                => $images
]);
?>


        <?php if (!empty($portfolio->thumbnail)): ?>
    <img src="<?= base_url('assets/img/portfolio/'.$portfolio->thumbnail) ?>"
         class="mt-3 w-40 h-40 object-cover rounded-md shadow">
<?php endif; ?>


        <!-- ACTION BUTTONS -->
        <div class="flex items-center justify-between pt-6 border-t">
            
            <!-- CANCEL -->
            <a href="<?= base_url('portfolio') ?>"
               class="px-4 py-2 rounded-md border border-gray-300 text-gray-700 
                      hover:bg-gray-100 transition">
                Cancel
            </a>

            <!-- SAVE -->
            <button type="submit"
                    class="px-6 py-2 bg-primary-600 text-white rounded-md
                           hover:bg-primary-700 transition">
                Save Changes
            </button>
        </div>

    </form>
</div>