<div class="space-y-8">

    <!-- CLIENT -->
    <div>
        <label class="text-sm font-medium text-gray-700">Client</label>
        <input type="text" name="client"
               value="<?= $portfolio->client ?? '' ?>"
               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg" />
    </div>

    <!-- YEAR + CITY + COUNTRY -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div>
            <label class="text-sm font-medium text-gray-700">Year</label>
            <input type="number" name="year" 
                   value="<?= $portfolio->year ?? '' ?>"
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="text-sm font-medium text-gray-700">City</label>
            <input type="text" name="city"
                   value="<?= $portfolio->city ?? '' ?>"
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="text-sm font-medium text-gray-700">Country</label>
            <input type="text" name="country"
                   value="<?= $portfolio->country ?? '' ?>"
                   class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
        </div>

    </div>

    <!-- DISCIPLINE / INDUSTRY -->
    <div>
        <label class="text-sm font-medium text-gray-700">Discipline / Industry</label>
        <input type="text" name="discipline"
               value="<?= $portfolio->discipline ?? '' ?>"
               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
    </div>

    <!-- SERVICES MULTI SELECT -->
    <div>
        <label class="text-sm font-medium text-gray-700">Services</label>
        <select name="services[]" multiple
                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg h-32">

            <?php foreach($services_list as $s): ?>
                <option value="<?= $s->id ?>"
                    <?= in_array($s->id, $selected_services ?? []) ? 'selected' : '' ?>>
                    <?= $s->name ?>
                </option>
            <?php endforeach; ?>

        </select>
    </div>

    <!-- PROJECT TITLE -->
    <div>
        <label class="text-sm font-medium text-gray-700">Project Title</label>
        <input type="text" name="title"
               value="<?= $portfolio->title ?? '' ?>"
               class="w-full px-4 py-2.5 border border-gray-300 rounded-lg">
    </div>

    <!-- DESCRIPTION -->
    <div>
        <label class="text-sm font-medium text-gray-700">Description</label>
        <textarea name="description"
                  class="w-full px-4 py-2.5 border border-gray-300 rounded-lg h-40"><?= $portfolio->description ?? '' ?></textarea>
    </div>

    <!-- IMAGES -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- COVER IMAGE -->
         <div>
          <label class="text-sm font-medium text-gray-700">Upload File</label>

          <label
            class="mt-2 flex items-center w-full border border-gray-300 rounded-lg overflow-hidden cursor-pointer bg-white"
          >
              <span class="px-4 py-2 bg-gray-50 text-gray-700 border-r border-gray-300">
                  Choose File
              </span>

              <span id="file-name" class="px-4 py-2 text-gray-500">
                  No file chosen
              </span>

              <input 
                type="file"
                name="thumbnail"
                class="hidden"
                onchange="document.getElementById('file-name').innerText = this.files[0]?.name ?? 'No file chosen'"
              />
          </label>
        </div>

        <!-- ADDITIONAL IMAGES -->
        <div>
          <label class="text-sm font-medium text-gray-700">Additional Images</label>

          <label
            class="mt-2 flex items-center w-full border border-gray-300 rounded-lg overflow-hidden cursor-pointer bg-white"
          >
              <span class="px-4 py-2 bg-gray-50 text-gray-700 border-r border-gray-300">
                  Choose Files
              </span>

              <span id="multi-file-name" class="px-4 py-2 text-gray-500">
                  No file chosen
              </span>

              <input 
                type="file"
                name="images[]"
                multiple
                class="hidden"
                onchange="document.getElementById('multi-file-name').innerText = 
                  this.files.length > 0 
                  ? this.files.length + ' files selected'
                  : 'No file chosen'"
              />
          </label>
        </div>

    </div>

</div>
