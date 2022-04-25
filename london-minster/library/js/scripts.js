


// Apply "active" class to header when certain things are hovered over.

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


window.onload = function() {
  var donateLarge = document.querySelector('.donate-large');
  var subMenus = document.getElementsByClassName('sub-menu');
  for (var i = 0; i < subMenus.length; i++) {
    donateLarge.cloneNode(true);
    subMenus[i].prepend(donateLarge.cloneNode(true));
  };


  var donateLargeRemoval = document.querySelector('header.header > .donate-large');
  donateLargeRemoval.remove();


  // Hide Things Until Scripts have loaded
  var elementsHide = document.getElementsByClassName('hide-until-load');
  for(var i = 0, length = elementsHide.length; i < length; i++) {
      elementsHide[i].classList.add('show');
  }
};
