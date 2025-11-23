document.addEventListener('click', function(e){
  if (e.target.closest('[data-toggle="modal"]')) {
    document.getElementById('ragaku-modal').classList.remove('hidden');
    document.getElementById('ragaku-modal').classList.add('flex');
  }
  if (e.target.closest('[data-close="modal"]')) {
    const m = document.getElementById('ragaku-modal');
    m.classList.add('hidden');
    m.classList.remove('flex');
  }
});
