<?php $this->load->view('layouts/header'); ?>

<?php $this->load->view('layouts/sidebar'); ?>

<div class="flex-1 min-h-screen">

    <?php $this->load->view('layouts/navbar'); ?>

    <div class="p-6">
        <?= $content ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<!-- Small helpers (below have the init code) -->
<script>
  // Init TomSelect for deliverables & services (will be used in form code)
  document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('#deliverables')) {
      new TomSelect('#deliverables', {
        plugins: ['remove_button'],
        persist: false,
        create: false,
        maxItems: null,
        dropdownDirection: 'auto'
      });
    }

    if (document.querySelector('#services')) {
      new TomSelect('#services', {
        plugins: ['remove_button'],
        persist: false,
        create: false,
        maxItems: null,
        dropdownDirection: 'auto'
      });
    }

    // Custom file input label update
    document.querySelectorAll('.custom-file-input').forEach(function(input) {
      input.addEventListener('change', function(e){
        const label = this.closest('.custom-file').querySelector('.custom-file-label');
        const files = Array.from(this.files).map(f => f.name).join(', ');
        label.textContent = files || 'No file chosen';
      });
    });
  });
</script>

</body>
</html>
