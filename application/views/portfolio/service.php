<div class="bg-white p-6 rounded-lg shadow max-w-xl">

    <h2 class="text-xl font-semibold mb-4">Deliverables (Services)</h2>

    <form action="<?= base_url('portfolio/services/store') ?>" method="POST" class="flex gap-3 mb-6">
        <input type="text" name="name" placeholder="Add new service"
               class="border rounded p-2 w-full" required>
        <button class="bg-primary text-white px-4 py-2 rounded">Add</button>
    </form>

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-2 border">Service Name</th>
                <th class="p-2 border w-24">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $s): ?>
            <tr>
                <td class="p-2 border"><?= $s->name ?></td>
                <td class="p-2 border text-center">
                    <a class="text-red-500"
                       href="<?= base_url('portfolio/services/delete/'.$s->id) ?>"
                       onclick="return confirm('Delete this service?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
