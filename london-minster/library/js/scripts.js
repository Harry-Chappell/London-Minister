document.addEventListener('DOMContentLoaded', function () {
  var header = document.querySelector('header.header');
  var parentNavItems = document.getElementsByClassName('menu-item-has-children');
  for (var i = 0; i < parentNavItems.length; i++) {
    var parentNavItem = parentNavItems[i];
    parentNavItem.addEventListener('mouseenter', function () {
      header.classList.add('active');
    });
  };
  header.addEventListener('mouseleave', function () {
    header.classList.remove('active');
  });
});