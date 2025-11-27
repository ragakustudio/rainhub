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
<section class="space-y-4">
  <h3 class="text-xl font-semibold">Buttons</h3>

  <div class="flex flex-wrap gap-3">

    <!-- Primary -->
    <button
      class="
        px-5 py-2.5
        bg-primary-500
        text-white rounded-md shadow-md
        hover:bg-primary-700 
        active:bg-primary-800 
        transition font-medium">
      Primary Button
    </button>

    <!-- Accent CTA -->
    <button
      class="
        px-5 py-2.5
        bg-accent-500
        text-neutral-900
        rounded-md shadow-md 
        hover:bg-accent-600
        active:bg-accent-700 
        transition font-semibold">
      Accent CTA
    </button>

    <!-- Secondary Soft -->
    <button
      class="
        px-5 py-2.5
        bg-secondary-200
        text-neutral-700
        rounded-md shadow-sm 
        hover:bg-secondary-300
        active:bg-secondary-400
        transition font-semibold">
      Secondary Button
    </button>
    
    <!-- Outline Button -->
    <button 
      class="
        px-5 py-2.5 border
        border-gray-300 
        text-neutral-700 
        rounded-md hover:bg-gray-50
        active:bg-gray-100 transition">
      Outline Button
    </button>

    <!-- Ghost Button -->
    <button 
      class="
        px-5 py-2.5
        text-neutral-600
        hover:bg-gray-100
        rounded-md transition">
      Ghost Button
    </button>

    <!-- Delete Button -->
    <button
      class="
        px-5 py-2.5
        bg-red-500 
        text-white 
        rounded-md 
        shadow-md
        hover:bg-red-600
        active:bg-red-700 
        transition font-medium">
      Delete
    </button>

    <!-- Disabled Button -->
    <button
      class="
        px-5 py-2.5
        bg-gray-400
        text-white
        rounded-md
        opacity-60
        cursor-not-allowed">
      Disabled
    </button>

    <!-- Icon+Text Button -->
    <button 
      class="
        flex items-center
        gap-2 px-5 py-2.5
        bg-primary-500
        text-white rounded-md
        hover:bg-primary-600
        active:bg-primary-700
        transition font-medium">
      <i class="ti ti-plus text-xl"></i>
      Button Text
    </button>

    <!-- Link Button -->
    <button 
      class="
        px-5 py-2.5
        text-primary-600
        hover:underline
        font-medium">
      View Details
    </button> 

    <!-- Icon Button -->
    <button
      class="
        px-4 py-2 border
        rounded-md 
        hover:bg-neutral-100 
        transition">
      <i class="ti ti-point text-xl"></i>
    </button>

    <!-- Icon outline (more) -->
    <button
      class="
        px-4 py-2 border
        rounded-md border-gray-300
        hover:bg-gray-50">
      <i class="ti ti-dots-vertical"></i>
    </button>
  </div>
</section>

<hr class="my-6">

<!-- INPUTS & FORM FIELDS -->
<section id="forms" class="space-y-3">
  <h3 class="text-lg font-medium">Inputs & forms</h3>
  <div class="grid grid-cols-1 md:grid-cols-1 gap-4">

      <!-- Basic Input -->
      <div>
        <label class="mb-2 text-sm font-medium text-neutral-700">Input</label>
        <input 
          type="text"
          class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                bg-white text-neutral-800 placeholder-gray-400
                focus:outline-none focus:ring-2 focus:ring-primary-400 focus:border-primary-400"
        />
      </div>
    
      <!-- Input with Placeholder-->
       <div>
        <label class="text-sm font-medium text-neutral-700">Input with Placeholder</label>
        <input 
          type="text"
          placeholder="info@gmail.com"
          class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                bg-white text-neutral-800 placeholder-gray-400
                focus:outline-none focus:ring-2 focus:ring-primary-400"
        />
      </div>

      <!-- Input with Icon-->
       <div>
        <label class="text-sm font-medium text-neutral-700">Input with Placeholder</label>
        
        <input 
            type="text"
            placeholder="info@gmail.com"
            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                  bg-white text-neutral-800 placeholder-gray-400
                  focus:outline-none focus:ring-2 focus:ring-primary-400"
          />
      </div>

      <!-- Input with Icon-->
      <div>
  <label class="text-sm font-medium text-neutral-700 mb-1 block">Email</label>

  <div class="relative">
    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-neutral-400">
      <i class="fi fi-rr-envelope text-lg"></i>
    </span>

    <input
      type="text"
      placeholder="info@gmail.com"
      class="pl-10 w-full px-4 py-2.5 border border-gray-300 rounded-lg
             bg-white text-neutral-800 placeholder-gray-400
             focus:outline-none focus:ring-2 focus:ring-primary-400"
    />
  </div>
</div>



      <!-- Select Input-->
      <div>
        <label class="text-sm font-medium text-neutral-700">Select Input</label>
        <div class="relative">
          <select 
            class="w-full appearance-none px-4 py-2.5 border border-gray-300 rounded-lg
                  bg-white text-neutral-800 focus:outline-none focus:ring-2 focus:ring-primary-400"
          >
            <option>Marketing</option>
            <option>Design</option>
            <option>Development</option>
          </select>

          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
            <i class="ti ti-chevron-down"></i>
          </span>
        </div>
      </div>
    
      <!-- Password -->
      <div>
        <label class="text-sm font-medium text-neutral-700">Password Input + Toggle Icon</label>
        <div class="flex items-center w-full border border-gray-300 rounded-lg bg-white">
          <input 
            type="password"
            class="flex-1 px-4 py-2.5 bg-white focus:outline-none"
            placeholder="Enter your password"
          />
          <button class="px-3 text-gray-500">
            <i class="ti ti-eye"></i>
          </button>
        </div>
      </div>

      <!-- Input with Left Icon -->
      <div>
        <label class="text-sm font-medium text-neutral-700">Textarea</label>
        <textarea
          class="w-full px-4 py-3 border border-gray-300 rounded-lg
                bg-white text-neutral-800 placeholder-gray-400
                focus:outline-none focus:ring-2 focus:ring-primary-400"
          rows="4"
          placeholder="Enter your description..."
        ></textarea>
      </div>

      <!-- File Upload -->
      <div class="mb-6">
        <label class="block mb-1 font-medium text-gray-700">Upload File</label>

        <div 
          class="relative flex items-center w-full border border-gray-300 rounded-md bg-white cursor-pointer overflow-hidden"
          onclick="this.querySelector('input').click()"
        >
            <div class="px-4 py-2 bg-gray-50 border-r border-gray-200 text-gray-700 whitespace-nowrap">
                Choose File
            </div>

            <div id="file-name" class="px-4 py-2 text-gray-500">
                No file chosen
            </div>

            <input 
              type="file" 
              class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
              onchange="document.getElementById('file-name').innerText = this.files[0]?.name ?? 'No file chosen'"
            >
        </div>
      </div>


  </div>
</section>

<hr class="my-6">

<!-- CARDS -->
<section id="cards" class="space-y-6 mt-10">
  <h2 class="text-xl font-semibold">Cards</h2>

  <!-- Basic Card -->
  <div class="bg-white rounded-lg shadow-md p-5">
      <h4 class="text-lg font-semibold mb-2">Basic Card</h4>
      <p class="text-gray-600 text-sm">This is a simple card using Ragaku UI tokens.</p>
  </div>

  <!-- Portfolio Card 1 -->
  <div class="flex gap-4">

    <!-- Detail Card 1-->
    <div class="w-full bg-white rounded-xl shadow-md overflow-hidden">

      <!-- IMAGE -->
      <img 
        src="<?= base_url('assets/img/placeholder-image.jpg') ?>" 
         class="w-full h-48 object-cover"
      >

      <div class="item-center p-4">
        <div class="flex items-center justify-between gap-4">
      
          <!-- LEFT SECTION: CLIENT INFO -->
          <div class="flex-1">
            <a 
              href="<?= base_url('portfolio/detail/1') ?>" 
              class="text-lg font-semibold text-primary-600 hover:underline"
            >
            Client Name
            </a>
            <!-- TIMELINE & LOCATION -->
              <p class="text-gray-600 text-sm">
              <span class="font-medium">2024</span>  
              •  
              <span class="font-medium">Jakarta, Indonesia</span>
              </p>
          </div>

          <!-- ACTION BUTTONS -->
          <div class="flex items-center gap-2">

            <!-- Edit -->
            <button 
              class="
                px-5 py-2.5 border
                border-gray-300 
                text-neutral-700 
                rounded-md hover:bg-gray-50
                active:bg-gray-100 transition"
              >
            View Project
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Detail Card 1-->
    
    <!-- Detail Card 2 -->
    <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
      <img 
        src="<?= base_url('assets/img/placeholder-image.jpg') ?>" 
        class="w-full h-48 object-cover">
      
      <div class="p-4">
        <h4 class="text-lg font-semibold text-primary-600 hover:underline">Card with Image</h4>
        <p class="text-gray-600 text-sm">Short description for demo.</p>
      </div>
    </div>
    <!-- End of Detail Card 2 -->
    <!-- End of Portfolio Detail Card 1 -->
  </div>
  
  <!-- Portfolio Card 2 -->
  <!-- Detail Card 1 -->
  <div class="flex gap-4">
    <div class="w-full bg-white rounded-xl shadow-md overflow-hidden">
    <!-- IMAGE -->
    <img 
      src="<?= base_url('assets/img/placeholder-image.jpg') ?>" 
      class="w-full h-48 object-cover"
    >
      <div class="item-center p-4">
        <div class="flex items-center justify-between gap-4">

          <!-- LEFT SECTION: CLIENT INFO -->
          <div class="flex-1">
            <a 
              href="<?= base_url('portfolio/detail/1') ?>" 
              class="text-lg font-semibold text-primary-600 hover:underline"
            >
            Client Name
            </a>
            <!-- TIMELINE & LOCATION -->
              <p class="text-gray-600 text-sm">
              <span class="font-medium">2024</span>  
              •  
              <span class="font-medium">Jakarta, Indonesia</span>
              </p>
          </div>

          <!-- RIGHT SECTION: ACTION BUTTONS -->
          <div class="flex items-center gap-2">
          
            <!-- EDIT (normal button) -->
            <button 
              class="
                flex items-center
                gap-2 h-10 px-4
                bg-primary-500
                text-white text-sm
                rounded-md 
                justify-center
                hover:bg-primary-600
                transition"
            >
            Edit Project
            </button>

            <!-- DELETE (icon button only) -->
            <button 
              class="
                flex items-center
                gap-2 h-10 w-10
                justify-center 
                rounded-md
                bg-red-500 text-white
                hover:bg-red-600
                transition"
            >
            <i class="ti ti-trash text-lg"></i>
            </button>

          </div>
        </div>
      </div>
    </div>
  <!-- End of Detail Card 1 -->
   
  <!-- Detail Card 2 -->
   <div class="w-full bg-white rounded-xl shadow-md overflow-hidden">
      <img 
        src="<?= base_url('assets/img/placeholder-image.jpg') ?>" 
        class="w-full h-48 object-cover">

      <!-- RIGHT SECTION: ACTION BUTTONS -->
      <div class="item-center p-4">
        <div class="flex items-center justify-between gap-4">

          <!-- LEFT SECTION: CLIENT INFO -->
          <div class="flex-1">
            <a 
              href="<?= base_url('portfolio/detail/1') ?>" 
              class="text-lg font-semibold text-primary-600 hover:underline"
            >
            Client Name
            </a>
            <!-- TIMELINE & LOCATION -->
              <p class="text-gray-600 text-sm">
              <span class="font-medium">2024</span>  
              •  
              <span class="font-medium">Jakarta, Indonesia</span>
              </p>
          </div>

          <!-- RIGHT SECTION: ACTION BUTTONS -->
          <div class="
            flex items-center gap-2">
            <button 
              class="
                h-10 w-10
                border rounded-md
                hover:bg-gray-100">
              <i class="ti ti-dots-vertical text-xl"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  <!-- End of Detail Card 2 -->
  </div>
</section>

<hr class="my-6">

<!-- BADGES & TAGS -->
<section id="badges" class="space-y-3 mt-10">
  <h3 class="text-lg font-medium">Badges & Tags</h3>
  
  <div class="flex flex-wrap gap-3">

    <span 
      class="
        flex items-center 
        px-5 py-1 gap-1
        bg-primary-100
        text-primary-700
        text-sm rounded-full"
    >
      Primary
    </span>

    <span 
      class="
        flex items-center 
        px-5 py-1 gap-1
        bg-accent-500
        text-neutral-900
        text-sm rounded-full"
    >
      Accent
    </span>

    <span 
      class="
        flex items-center 
        px-5 py-1 gap-1
        bg-gray-100
        text-gray-700
        text-sm rounded-full"
    >
      Neutral
    </span>

    <span 
      class="
        flex items-center 
        px-3 py-1 gap-1
        bg-primary-100
        text-primary-700
        text-sm rounded-full"
    >
      <i class="ti ti-help text-lg"></i>
      Information
    </span>

    <span 
      class="
        flex items-center 
        px-3 py-1 gap-1
        bg-green-100
        text-green-700
        text-sm rounded-full"
    >
      <i class="ti ti-circle-check text-lg"></i>
      Success
    </span>

    <span 
      class="
        flex items-center 
        px-3 py-1 gap-1
        bg-accent-500
        text-neutral-900
        text-sm rounded-full"
    >
      <i class="ti ti-exclamation-circle text-lg"></i>
      Warning Message
    </span>

    <span 
      class="
        flex items-center 
        px-3 py-1 gap-1
        bg-red-100
        text-red-700
        text-sm rounded-full"
    >
      <i class="ti ti-exclamation-circle text-lg"></i>
      Error Message
    </span>

    <span
      class="
        flex items-center 
        px-3 py-1 gap-1
        bg-secondary-200 
        text-neutral-700 
        text-sm rounded-full">
      UI/UX
      <i class="ti ti-x text-md"></i>
    </span>

  </div>
</section>

<hr class="my-6">

<!-- ALERTS -->
<section id="alerts" class="space-y-3">
  <h3 class="text-lg font-medium">Alerts</h3>
  <div class="space-y-2">

    <!-- Success -->
    <div class="
          flex items-center 
          gap-3 bg-green-100 
          text-green-700 p-4
          rounded-xl">
      <i class="ti ti-circle-check text-2xl"></i>
      <span>Successfully updated!</span>
    </div>

    <!-- Warning -->
    <div class="
          flex items-center 
          gap-3 bg-yellow-100 
          text-yellow-700 p-4
          rounded-xl">
      <i class="ti ti-alert-square-rounded text-2xl"></i>
      <span>Warning alert message</span>
    </div>

    <!-- Danger -->
    <div class="
          flex items-center 
          gap-3 bg-red-100 
          text-red-700 p-4
          rounded-xl">
      <i class="ti ti-exclamation-circle text-2xl"></i>
      <span>Danger alert message</span>
    </div>

  </div>
</section>

<hr class="my-6">

<!-- TABLES -->
<section id="tables" class="space-y-4">
  <h3 class="text-lg font-medium">Table</h3>
  
  <!-- Tables with one button action -->
  <div class="overflow-x-auto bg-white rounded-md shadow-md">
    <table class="min-w-full divide-y">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-2 text-left text-sm font-medium">Client</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Timeline</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Location</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <tr>
          <td class="px-4 py-3 text-sm">Client A</td>
          <td class="px-4 py-3 text-sm">2024</td>
          <td class="px-4 py-3 text-sm">Jakarta, Indonesia</td>
          <td class="px-4 py-3 text-sm">
            <button class="px-3 py-1 border rounded-md">View</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <!-- Tables with two button action -->
  <div class="overflow-x-auto bg-white rounded-md shadow-md">
    <table class="min-w-full divide-y">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-2 text-left text-sm font-medium">Client</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Timeline</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Location</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <tr>
          <td class="px-4 py-3 text-sm">Client A</td>
          <td class="px-4 py-3 text-sm">2024</td>
          <td class="px-4 py-3 text-sm">Jakarta, Indonesia</td>
          <td class="px-4 py-3 text-sm">
            <div class="flex gap-3">
              <button class="px-3 py-1 border rounded-md text-primary-600">Edit</button>
              <button class="px-3 py-1 border rounded-md text-red-500">Delete</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Tables with three button action -->
  <div class="overflow-x-auto bg-white rounded-md shadow-md">
    <table class="min-w-full divide-y">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-2 text-left text-sm font-medium">Client</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Timeline</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Location</th>
          <th class="px-4 py-2 text-left text-sm font-medium">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y">
        <tr>
          <td class="px-4 py-3 text-sm">Client A</td>
          <td class="px-4 py-3 text-sm">2024</td>
          <td class="px-4 py-3 text-sm">Jakarta, Indonesia</td>
          <td class="px-4 py-3 text-sm">
            <div class="flex gap-3">
              <button class="px-3 py-1 border rounded-md">
                View
              </button>
              <button class="px-2 py-1 border rounded-md bg-primary-500 text-white">
                <i class="ti ti-edit text-2xl"></i>
              </button>
              <button class="px-2 py-1 border rounded-md bg-red-500 text-white">
                <i class="ti ti-eraser text-2xl"></i>
              </button>
            </div>
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
  
  

</section>

<hr class="my-6">

<!-- BREADCRUMB -->
<section id="breadcrumb">
  <h3 class="text-lg font-medium mb-2">Breadcrumb</h3>
    <nav class="text-sm text-gray-500 flex items-center gap-2">
      <a href="#" class="hover:text-primary-600">Dashboard</a>
      <span>/</span>
      <a href="#" class="hover:text-primary-600">Portfolio</a>
      <span>/</span>
      <span class="text-gray-800 font-medium">Details</span>
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
