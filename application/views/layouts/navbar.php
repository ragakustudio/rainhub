<!-- NAVBAR -->
<div
    class="
        flex
        justify-end
        items-center
        w-full
        px-6 h-16
        bg-white
        shadow
        font-sans
    ">

    <div class="flex items-center gap-6">

        <!-- Settings Icon (Flaticon UIcons) -->
        <button>
            <i class="fi fi-br-settings text-xl text-gray-600"></i>
        </button>

        <!-- User info -->
        <div class="flex items-center gap-3">

            <!-- Name + Role -->
            <div class="flex flex-col text-right leading-4">
                <span class="font-medium text-gray-800">
                    <?= $this->session->userdata('first_name') . ' ' . $this->session->userdata('last_name') ?>
                </span>
                <span class="text-xs text-gray-500">
                    <?= $this->session->userdata('role') ?>
                </span>
            </div>
        </div>

    </div>

</div>
