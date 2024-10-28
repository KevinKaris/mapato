<footer class="bottom bg-navy text-center mt-2 mb-0" style="height:100px;">
  <br>
    <!-- <strong>Copyright &copy; 2022 <a href="">TazarChriss</a>.</strong>
    All rights reserved. -->
    <div class="float-right d-none d-sm-inline-block">

    </div>
    <br>
    <h1> </h1>
  </footer>
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