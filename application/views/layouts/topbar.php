<header
    class="
        sticky
        top-0
        z-50
        flex
        w-full
        bg-white
        border-b
        border-gray-200
        px-4 py-3
        items-center
        justify-between
        shadow-sm
        font-sans
    ">

    <!-- Logo Kecil (Mobile) -->
    <div class="flex items-center gap-2 lg:hidden">
        <button id="sidebarToggle" class="text-gray-700 text-2xl">
            <i class="fi fi-sr-menu-burger"></i>
        </button>
        <span class="text-lg font-semibold">RainHUB</span>
    </div>

    <!-- Logo Tengah -->
    <div class="hidden lg:flex items-center gap-3">
        <img src="<?= base_url('assets/img/logo/logo.svg') ?>" class="h-8" alt="Logo">
        <span class="text-xl font-semibold">RainHUB</span>
    </div>

    <!-- User Info -->
    <div class="flex items-center gap-3">
        <span class="text-gray-600 text-sm"><?= $this->session->userdata('role') ?></span>

        <div class="h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center text-white">
            <?= strtoupper(substr($this->session->userdata('name'), 0, 1)) ?>
        </div>
    </div>

</header>

<script>
// Toggle sidebar (mobile)
document.getElementById("sidebarToggle").addEventListener("click", () => {
    let sidebar = document.getElementById("sidebarMain");
    sidebar.classList.toggle("-translate-x-full");
});
</script>
