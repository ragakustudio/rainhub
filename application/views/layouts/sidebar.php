<!-- SIDEBAR -->
<div 
  class="
    w-64
    bg-[#1E293B]
    text-white
    min-h-screen
    px-5 py-6
    font-sans
    ">

    <!-- Logo -->
    <div class="flex items-center gap-2 mb-8">
        <img src="<?= base_url('assets/img/logo/rainhub-logo-white.webp') ?>" 
             class="w-8">
    </div>

    <!-- Menu Title -->
    <p class="text-xs text-gray-400 uppercase mb-3">Menu</p>

    <!-- DASHBOARD -->
    
   <!-- Dashboard -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => 'dashboard',
            'icon' => 'brand-tabler',
            'label' => 'Dashboard',
            'code' => 'dashboard',
            'active' => $active
        ]);
    ?>

    <!-- PORTFOLIO GROUP -->
    <p class="text-xs text-gray-400 uppercase mt-6 mb-2">Portfolio</p>

    <!-- Projects -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => 'portfolio',
            'icon' => 'brush',
            'label' => 'Projects',
            'code' => 'portfolio',
            'active' => $active
        ]);
    ?>

    <!-- Deliverables -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => 'portfolio/services',
            'icon' => 'category',
            'label' => 'Deliverables',
            'code' => 'deliverables',
            'active' => $active
        ]);
    ?>

    <!-- OTHERS -->
    <p class="text-xs text-gray-400 uppercase mt-6 mb-2">Others</p>

    <!-- Employees -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => '#',
            'icon' => 'briefcase',
            'label' => 'Employee Data',
            'code' => 'employee',
            'active' => $active
        ]);
    ?>

    <!-- Inventory -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => '#',
            'icon' => 'archive',
            'label' => 'Inventory',
            'code' => 'inventory',
            'active' => $active
        ]);
    ?>
    
    <!-- Inventory -->
    <?php 
        $this->load->view('components/sidebar_item', [
            'href' => 'uikit',
            'icon' => 'layer',
            'label' => 'UI Kit',
            'code' => 'uikit',
            'active' => $active
        ]);
    ?>

    <!-- LOGOUT -->
    <a href="<?= base_url('auth/logout') ?>" 
       class="flex items-center gap-3 px-3 py-2 text-red-300 hover:bg-red-500/20 rounded-lg mt-6">
        <i class="fi fi-sr-door-open"></i>
        Logout
    </a>
</div>
