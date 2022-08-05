
export default function nav() {

  $('#header .nav-links a').on('click', function(e) {
    e.preventDefault();
    
		if (this.hash !== "") {
      // Store hash
      var hash = this.hash;
      var pos = $(hash).offset().top;

      $('html, body').animate({
        scrollTop: pos
      }, 800, function(){
        $( '#header .hamburger' ).removeClass( 'is-active' );
        $( '.nav-container' ).removeClass( 'active' );
      });
    }
  });

  $('#header .hamburger').on('click', function (e) {
		e.preventDefault();
    $( this ).toggleClass( 'is-active' );
    $( '.nav-container' ).toggleClass( 'active' );
  });
}