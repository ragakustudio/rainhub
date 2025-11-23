<?php
// application/views/components/ragaku_ui.php
// Reusable Ragaku UI Kit components (Tailwind utility classes)
// Usage: $this->load->view('components/ragaku_ui', $vars);
?>

<!-- TYPOGRAPHY EX -->
<section class="space-y-4">
  <h1 class="text-3xl font-semibold">Ragaku UI Kit</h1>
  <p class="text-base text-gray-600">Demo components — buttons, inputs, cards, tables, modals, breadcrumb.</p>
</section>

<hr class="my-6">

<!-- BUTTONS -->
<section id="buttons" class="space-y-3">
  <h3 class="text-lg font-medium mb-2">Buttons</h3>
  <div class="flex items-center gap-3">
    <!-- Primary -->
    <button class="px-5 py-2.5 bg-primary-500 text-white rounded-md shadow-md hover:bg-primary-600 active:bg-primary-700 transition font-medium">
      Primary Button
    </button>

    <!-- Accent CTA -->
    <button class="px-5 py-2.5 bg-accent-500 text-neutral-700 rounded-md shadow-md hover:bg-accent-600 active:bg-accent-700 transition font-semibold">
      Accent CTA
    </button>

    <!-- Secondary soft -->
    <button class="px-5 py-2.5 bg-secondary-200 text-neutral-700 rounded-md hover:bg-secondary-300 transition font-medium">
      Secondary
    </button>

    <!-- Icon outline (more) -->
    <button class="p-2 border rounded-md border-gray-300 hover:bg-gray-50">
      <i class="fi fi-br-menu-dots-vertical"></i>
    </button>
  </div>
</section>

<hr class="my-6">

<!-- INPUTS & FORM FIELDS -->
<section id="forms" class="space-y-3">
  <h3 class="text-lg font-medium">Inputs & forms</h3>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <input class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-400" placeholder="Text input" />
    <select class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary-400">
      <option>Option one</option>
      <option>Option two</option>
    </select>
    <textarea class="w-full border rounded-md px-3 py-2 h-24 focus:outline-none focus:ring-2 focus:ring-primary-400"></textarea>
  </div>
</section>

<hr class="my-6">

<!-- CARDS -->
<section id="cards">
  <h3 class="text-lg font-medium mb-3">Card (portfolio style)</h3>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      <img src="<?= base_url('assets/img/portfolio/sample.jpg') ?>" alt="thumb" class="w-full h-44 object-cover">
      <div class="p-4">
        <div class="flex justify-between items-start">
          <div>
            <h4 class="font-semibold">Client Name</h4>
            <p class="text-sm text-gray-500">Service • 2025</p>
          </div>
          <div class="relative">
            <button class="p-2 border rounded-md border-gray-200 outline-none">
              <i class="fi fi-br-menu-dots-vertical text-gray-600"></i>
            </button>
            <!-- small popup example (toggle via JS) -->
            <div class="absolute right-0 mt-2 hidden group-more bg-white border rounded-md shadow-md w-36">
              <a href="#" class="block px-3 py-2 hover:bg-gray-50">View</a>
              <a href="#" class="block px-3 py-2 text-red-600 hover:bg-gray-50">Delete</a>
            </div>
          </div>
        </div>

        <p class="text-sm text-gray-600 mt-3">Short description about this project.</p>
        <div class="mt-4 flex items-center justify-between">
          <div class="text-sm text-gray-500">Deliverables</div>
          <div class="">
            <button class="text-sm px-3 py-1 border rounded-md">View</button>
            <button class="text-sm px-3 py-1 ml-2 bg-red-500 text-white rounded-md">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat card... -->
  </div>
</section>

<hr class="my-6">

<!-- BADGES & TAGS -->
<section id="badges" class="space-y-3">
  <h3 class="text-lg font-medium">Badges & Tags</h3>
  <div class="flex gap-2 items-center">
    <span class="px-2 py-1 text-xs rounded bg-primary-100 text-primary-700">Primary tag</span>
    <span class="px-2 py-1 text-xs rounded bg-accent-50 text-accent-700">Accent</span>
    <span class="px-2 py-1 text-xs rounded bg-gray-100 text-gray-600">Muted</span>
  </div>
</section>

<hr class="my-6">

<!-- ALERTS -->
<section id="alerts" class="space-y-3">
  <h3 class="text-lg font-medium">Alerts</h3>
  <div class="space-y-2">
    <div class="p-3 rounded-md bg-green-50 text-green-700 border border-green-100">Success alert message</div>
    <div class="p-3 rounded-md bg-yellow-50 text-yellow-700 border border-yellow-100">Warning alert message</div>
    <div class="p-3 rounded-md bg-red-50 text-red-700 border border-red-100">Danger alert message</div>
  </div>
</section>

<hr class="my-6">

<!-- TABLES -->
<section id="tables">
  <h3 class="text-lg font-medium">Table</h3>
  <div class="overflow-x-auto bg-white rounded-md shadow-md">
    <table class="min-w-full divide-y">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-2 text-left text-sm font-medium">Client</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Service</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Year</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <tr>
          <td class="px-4 py-3 text-sm">ACME Co</td>
          <td class="px-4 py-3 text-sm">Branding</td>
          <td class="px-4 py-3 text-sm">2025</td>
          <td class="px-4 py-3 text-sm">
            <button class="px-3 py-1 border rounded-md">View</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<hr class="my-6">

<!-- MODAL (skeleton markup) -->
<section id="modal">
  <h3 class="text-lg font-medium mb-2">Modal (skeleton)</h3>
  <!-- Modal overlay -->
  <div id="ragaku-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
    <div class="bg-white rounded-md shadow-lg max-w-lg w-full p-6">
      <h4 class="text-lg font-semibold mb-2">Modal title</h4>
      <p class="text-sm text-gray-600 mb-4">Modal content goes here.</p>
      <div class="flex justify-end gap-2">
        <button class="px-4 py-2 rounded-md border">Close</button>
        <button class="px-4 py-2 bg-primary-500 text-white rounded-md">Save</button>
      </div>
    </div>
  </div>
</section>

<hr class="my-6">

<!-- BREADCRUMB -->
<section id="breadcrumb">
  <h3 class="text-lg font-medium mb-2">Breadcrumb</h3>
  <nav class="text-sm text-gray-500" aria-label="Breadcrumb">
    <ol class="flex items-center gap-2">
      <li><a href="#" class="hover:underline">Dashboard</a></li>
      <li>/</li>
      <li class="text-gray-700">Projects</li>
    </ol>
  </nav>
</section>

<hr class="my-6">

<!-- LAYOUT HELPERS -->
<section id="layout-helpers">
  <h3 class="text-lg font-medium mb-2">Layout helpers</h3>
  <div class="bg-white p-4 rounded-md shadow-sm">
    <div class="flex gap-4">
      <div class="w-1/3 bg-gray-50 p-3 rounded">col 1</div>
      <div class="w-2/3 bg-gray-50 p-3 rounded">col 2</div>
    </div>
  </div>
</section>
