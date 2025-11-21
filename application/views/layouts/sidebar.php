<aside class="w-64 bg-[#1E293B] text-gray-200 min-h-screen p-6 space-y-4">
    <h1 class="text-2xl font-bold text-white mb-8">RainHUB</h1>

    <nav class="space-y-1 text-sm">

        <a href="<?= base_url('dashboard') ?>"
            class="flex items-center gap-3 px-4 py-2 rounded-lg 
            <?= ($active == 'dashboard') ? 'bg-[#334155] text-white' : 'hover:bg-[#334155] hover:text-white' ?>">
            <span class="material-icons-outlined text-lg">dashboard</span>
            Dashboard
        </a>

        <a href="<?= base_url('portfolio') ?>"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#334155] hover:text-white">
            <span class="material-icons-outlined text-lg">folder</span>
            Portfolio
        </a>

        <a href="<?= base_url('employee') ?>"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#334155] hover:text-white">
            <span class="material-icons-outlined text-lg">groups</span>
            Employees
        </a>

        <a href="<?= base_url('inventory') ?>"
            class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-[#334155] hover:text-white">
            <span class="material-icons-outlined text-lg">inventory_2</span>
            Inventory
        </a>

        <a href="<?= base_url('auth/logout') ?>" 
           class="flex items-center gap-3 px-4 py-2 rounded-lg mt-6 text-red-300 hover:bg-red-500/10">
            <span class="material-icons-outlined text-lg">logout</span>
            Logout
        </a>
    </nav>
</aside>
