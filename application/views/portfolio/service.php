<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold">Deliverables</h1>

    <!-- Add Button -->
    <button 
        onclick="document.getElementById('addModal').classList.remove('hidden')"
        class="px-4 py-2 bg-primary-500 text-white rounded-md hover:bg-primary-600 transition"
    >
        + Add Deliverable
    </button>
</div>

<!-- LIST TABLE -->
<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="p-3">Name</th>
                <th class="p-3">Project</th>
                <th class="p-3 w-40 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $s): ?>
            <tr class="border-b">
                <td class="p-3"><?= $s->name ?></td>
                <td class="p-3">
                    <span class="text-gray-600 text-sm">
                    <?= $s->count ?>
                </span>
                </td>
                <td class="p-3 text-center">

                    <!-- Edit -->
                    <button 
                        onclick="openEditModal('<?= $s->id ?>','<?= $s->name ?>')"
                        class="
                            px-3 py-1 text-sm
                            bg-primary-100 
                            text-primary-700 
                            rounded-md 
                            hover:bg-primary-200"
                    >
                        Edit
                    </button>

                    <!-- Delete -->
                    <button 
                        href="<?= base_url('portfolio/delete_service/'.$s->id) ?>"
                        onclick="return confirm('Delete this deliverable?')"
                        class="
                            px-3 py-1 text-sm
                            bg-red-100 
                            text-red-600 
                            rounded-md 
                            hover:bg-red-200"
                    >
                        Delete
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- ========================================= -->
<!-- ADD MODAL (taro di bawah table) -->
<!-- ========================================= -->

<div id="addModal" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center">
    <div class="bg-white p-6 w-96 rounded-lg shadow-lg">

        <h2 class="text-lg font-semibold mb-4">Add New Deliverable</h2>

        <form action="<?= base_url('portfolio/store_service') ?>" method="POST" class="space-y-4">
            <input 
                type="text" name="name"
                placeholder="Deliverable name"
                class="w-full border px-3 py-2 rounded-md"
                required
            >

            <div class="flex justify-end gap-3">
                <button type="button"
                    onclick="document.getElementById('addModal').classList.add('hidden')"
                    class="px-4 py-2 border rounded-md">
                    Cancel
                </button>

                <button 
                    type="submit"
                    class="px-4 py-2 bg-primary-500 text-white rounded-md">
                    Add
                </button>
            </div>
        </form>

    </div>
</div>

<!-- ========================================= -->
<!-- EDIT MODAL -->
<!-- ========================================= -->

<div id="editModal" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center">
    <div class="bg-white p-6 w-96 rounded-lg shadow-lg">

        <h2 class="text-lg font-semibold mb-4">Edit Deliverable</h2>

        <form id="editForm" method="POST" class="space-y-4">
            <input 
                id="editName"
                type="text" name="name"
                class="w-full border px-3 py-2 rounded-md"
                required
            >

            <div class="flex justify-end gap-3">
                <button type="button"
                    onclick="document.getElementById('editModal').classList.add('hidden')"
                    class="px-4 py-2 border rounded-md">
                    Cancel
                </button>

                <button 
                    type="submit"
                    class="px-4 py-2 bg-primary-500 text-white rounded-md">
                    Save
                </button>
            </div>
        </form>

    </div>
</div>

<script>
function openEditModal(id, name) {
    document.getElementById("editName").value = name;
    document.getElementById("editForm").action = "<?= base_url('portfolio/update_service/') ?>" + id;
    document.getElementById("editModal").classList.remove("hidden");
}
</script>
