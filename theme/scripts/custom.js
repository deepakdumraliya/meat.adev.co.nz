

$(window).scroll(function(){
  var sticky = $('.header'),
      scroll = $(window).scrollTop();

  if (scroll >= 90) sticky.addClass('header-sticky');
  else sticky.removeClass('header-sticky');
});


$( document ).on( 'change', '.inputquantitysummary', function ()
{
  let product_id = $( this ).data( 'id' );
  let addurl = $( "#" + product_id + "-cart" ).attr( 'href' );
  $( "#" + product_id + "-cart" ).attr( 'data-quantity', $( this ).val() );
  let value = addurl.substring( addurl.lastIndexOf( '/' ) + 1 );
  addurl = addurl.replace( value, $( this ).val() );
  $( "#" + product_id + "-cart" ).attr( 'href', addurl );
} );

// $( document ).on( 'click', '.minquantity', function (e)
// {
//   e.preventDefault();
//   console.log( $( this ).data( 'minqunatity' ) );
//   alert( 'Hello' );
// } );