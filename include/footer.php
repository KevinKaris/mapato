
  <script>
  $(document).ready(function(){
    $('#open-menu').on('click', function(){
      $('#navbarCollapse').css('display', 'flex');
    });

    // Close the menu when clicking outside of it or the toggler button
    $(document).on('click', function(event) {
      if (!$(event.target).closest('#navbarCollapse').length && !$(event.target).closest('#open-menu').length) {
        $('#navbarCollapse').css('display', 'none');
      }
    });
  });
</script>