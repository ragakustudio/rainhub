<?php
$services_list = $services_list ?? [];
$selected_services = $selected_services ?? [];
$images = $images ?? [];
?>

<div class="p-6">

  <h1 class="text-2xl font-semibold mb-6">Add New Project</h1>

  <form action="<?= base_url('portfolio/store') ?>" method="POST" enctype="multipart/form-data" class="space-y-6">

    <?php 
$this->load->view('portfolio/form', [
    'portfolio'             => null,
    'action'                => base_url('portfolio/store'),
    'services_list'         => $services_list,
    'deliverables_list'     => $deliverables_list,
    'selected_services'     => [],
    'selected_deliverables' => [],
    'images'                => []
]);
?>



  </form>

</div>
