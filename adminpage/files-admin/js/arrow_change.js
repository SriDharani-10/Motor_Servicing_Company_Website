<script>
  // Toggle arrow on collapse show/hide
  document.querySelectorAll('[data-toggle="collapse"]').forEach(button => {
    button.addEventListener('click', function () {
      const icon = this.querySelector('i');
      const target = document.querySelector(this.getAttribute('data-target'));

      target.addEventListener('shown.bs.collapse', () => {
        icon.classList.add('down');
      });

      target.addEventListener('hidden.bs.collapse', () => {
        icon.classList.remove('down');
      });
    });
  });
</script>
