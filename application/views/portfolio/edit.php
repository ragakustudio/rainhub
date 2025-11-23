<div class="bg-white p-6 rounded-lg shadow max-w-2xl">

    <h2 class="text-xl font-semibold mb-4">Edit Portfolio</h2>

    <form action="<?= base_url('portfolio/update/'.$portfolio->id) ?>" method="POST" class="space-y-4">

        <div>
            <label class="font-medium">Client</label>
            <input type="text" name="client" value="<?= $portfolio->client ?>" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="font-medium">Project Year</label>
            <select name="year" class="w-full border rounded p-2">
                <?php for($y = date("Y"); $y >= 2000; $y--): ?>
                    <option value="<?= $y ?>" <?= ($portfolio->year == $y) ? 'selected' : '' ?>>
                        <?= $y ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>

        <div>
            <label class="font-medium">Discipline / Industry</label>
            <input type="text" name="discipline" value="<?= $portfolio->discipline ?>" class="w-full border rounded p-2">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="font-medium">City</label>
                <input type="text" name="city" value="<?= $portfolio->city ?>" class="w-full border rounded p-2">
            </div>
            <div>
                <label class="font-medium">Country</label>
                <input type="text" name="country" value="<?= $portfolio->country ?>" class="w-full border rounded p-2">
            </div>
        </div>

        <div>
            <label class="font-medium">Deliverables (Service)</label>
            <select name="service_id" class="w-full border rounded p-2">
                <option value="">Select Deliverable</option>
                <?php foreach ($services as $s): ?>
                    <option value="<?= $s->id ?>" 
                        <?= ($portfolio->service_id == $s->id) ? 'selected' : '' ?>>
                        <?= $s->name ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="font-medium">Project Title</label>
            <input type="text" name="title" value="<?= $portfolio->title ?>" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full border rounded p-2"><?= $portfolio->description ?></textarea>
        </div>

        <button class="bg-primary text-white px-4 py-2 rounded">
            Save Changes
        </button>

    </form>

</div>
