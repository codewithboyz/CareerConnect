document.addEventListener("DOMContentLoaded", function() {
    if (window.innerWidth >= 992) {
      document.querySelectorAll('.dropdown').forEach(drop => {
        let timeoutId;

        drop.addEventListener('mouseenter', function() {
          clearTimeout(timeoutId);
          let menu = this.querySelector('.dropdown-menu');
          if (menu) menu.classList.add('show');
        });

        drop.addEventListener('mouseleave', function() {
          let menu = this.querySelector('.dropdown-menu');

          timeoutId = setTimeout(() => {
            if (menu) menu.classList.remove('show');
          }, 50);
        });

      });
    }
  });