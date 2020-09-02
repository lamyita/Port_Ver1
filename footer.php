
<link rel="stylesheet" href="footer.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('.contnav, .imghead, .title_paragh p, .line').css('display', 'none');
    $('.imgback, .frontbg').css('transform', 'translate3d(100%, 0, 0)');
    $('.frontbg').css('opacity', 0);
  jQuery(function() {
    setTimeout(() => {
      $('.imgback').css('transform', 'translate3d(0%, 0, 0)');      
    }, 1000);


    setTimeout(() => {
    $('.frontbg').css('opacity', 1);
      $('.frontbg').css('transform', 'translate3d(0%, 0, 0)');      
    }, 1800);

    setTimeout(() => {
      $('.imghead, .contnav').fadeIn();
    }, 3000);

    setTimeout(() => {
      $('.line').fadeIn();
      setTimeout(() => {
        $('.title_paragh p').fadeIn();
      }, 1000);
    }, 4000);

    /*$('.imgback').animate({
      transform: "translate3d(0%, 0, 0)"
    }, 500);*/
  });
</script>
<footer>
     <img src="porfolio_design/assets/mylogo.png" alt="logo">
     <p>Copyrights 2020 - lamyaa najahi</p>
   </footer>