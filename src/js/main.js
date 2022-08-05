require( 'owl.carousel' );

import nav from './modules/nav';
import music from './modules/music';
import instagram from './modules/instagram';

jQuery( document ).ready(function($) {

  // init header nav
  nav();

  // init music section
  music();

  // init instagram section
  instagram();

});
