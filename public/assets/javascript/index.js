$(document).ready(function() {
  // Highlight active page on sidebar
  $(".sidelink").each(function() {
    if (this.href == window.location.href) {
      $(this).css('color', 'red');
    }
  });
});