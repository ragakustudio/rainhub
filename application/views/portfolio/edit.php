<div class="p-6 space-y-6">

  <!-- HEADER -->
  <div class="flex items-center justify-between">
    <h1 class="text-2xl font-semibold">Edit Project</h1>

    <a href="<?= base_url('portfolio') ?>" 
       class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300">
      Back
    </a>
  </div>

  <!-- FORM -->
  <form action="<?= base_url('portfolio/update/'.$portfolio->id) ?>" 
        method="POST" enctype="multipart/form-data"
        class="space-y-8">

    <!-- COVER IMAGE -->
    <div>
      <p class="font-medium mb-2">Cover Image</p>

      <?php if (!empty($portfolio->thumbnail)): ?>
        <img src="<?= base_url('assets/img/portfolio/'.$portfolio->thumbnail) ?>"
             class="w-64 h-40 object-cover rounded-lg mb-3 border">
      <?php endif; ?>

      <input type="file" name="thumbnail" class="block">
    </div>

    <!-- 2-COLUMN FORM -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <div>
        <label class="block font-medium mb-1">Client</label>
        <input type="text" name="client" value="<?= $portfolio->client ?>"
               class="w-full border rounded-md px-3 py-2">
      </div>

      <div>
        <label class="block font-medium mb-1">Year</label>
        <input type="text" name="year" value="<?= $portfolio->year ?>"
               class="w-full border rounded-md px-3 py-2">
      </div>

      <div>
        <label class="block font-medium mb-1">Discipline</label>
        <input type="text" name="discipline" value="<?= $portfolio->discipline ?>"
               class="w-full border rounded-md px-3 py-2">
      </div>

      <div>
        <label class="block font-medium mb-1">City</label>
        <input type="text" name="city" value="<?= $portfolio->city ?>"
               class="w-full border rounded-md px-3 py-2">
      </div>

      <div>
        <label class="block font-medium mb-1">Country</label>
        <input type="text" name="country" value="<?= $portfolio->country ?>"
               class="w-full border rounded-md px-3 py-2">
      </div>

      <div class="mb-4">
    <label class="font-medium">Deliverables</label>

    <div class="grid grid-cols-2 gap-2 mt-2">
        <?php foreach ($services as $s): ?>
        <label class="flex items-center gap-2">
            <input 
                type="checkbox" 
                name="services[]" 
                value="<?= $s->id ?>" 
                <?= in_array($s->id, $selected) ? 'checked' : '' ?>
                class="rounded"
            >
            <span><?= $s->name ?></span>
        </label>
        <?php endforeach; ?>
    </div>
</div>


    </div>

    <!-- DESCRIPTION -->
    <div>
      <label class="block font-medium mb-1">Description</label>
      <textarea name="description"
                class="w-full border rounded-md px-3 py-2 h-32"><?= $portfolio->description ?></textarea>
    </div>

    <!-- GALLERY -->
    <div>
      <p class="font-medium mb-3">Gallery Images</p>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
        <?php foreach ($images as $img): ?>
          <div class="relative group">
            <img src="<?= base_url('assets/img/portfolio/'.$img->filename) ?>"
                 class="w-full h-32 object-cover rounded border">

            <!-- DELETE ICON -->
            <a href="<?= base_url('portfolio/delete_image/'.$img->id.'/'.$portfolio->id) ?>"
               onclick="return confirm('Delete this image?')"
               class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition">
               Delete
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <input type="file" name="images[]" multiple>
    </div>

    <!-- SUBMIT -->
    <button class="bg-primary-600 text-white px-6 py-2 rounded-md hover:bg-primary-700">
      Save Changes
    </button>

  </form>
</div>
