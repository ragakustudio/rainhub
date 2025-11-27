<a 
  href="<?= base_url($href) ?>"
    class="
      flex
      items-center
      gap-3 px-3 py-2
      rounded-lg
      <?= ($active==$code)
        ? 'bg-white text-[#1E293B] font-semibold' 
        : 'text-gray-300 hover:bg-white/10'
      ?>"
>

<!-- Tabler Icon -->
<i class="
  ti ti-<?= $icon ?>
  text-2xl relative top-[1px]">
</i>

<!-- Label -->
<span
  class="text-base">
  <?= $label ?>
</span>

</a>