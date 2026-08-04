(function () {
  var items = document.querySelectorAll('nav > ul > li');

  items.forEach(function (li) {
    var toggle = li.querySelector(':scope > a');
    var dropdown = li.querySelector(':scope > .dropdown');
    if (!toggle || !dropdown) return;

    toggle.addEventListener('click', function (e) {
      var isOpen = li.classList.contains('open');

      // First click opens the menu and stays open; only a second click
      // on an already-open menu follows the link through.
      if (!isOpen) {
        e.preventDefault();
        items.forEach(function (other) { other.classList.remove('open'); });
        li.classList.add('open');
      }
    });
  });

  document.addEventListener('click', function (e) {
    if (!e.target.closest('nav')) {
      items.forEach(function (li) { li.classList.remove('open'); });
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      items.forEach(function (li) { li.classList.remove('open'); });
    }
  });
})();
