// (function($) {

//     $(".toggle-password").click(function() {

//         $(this).toggleClass("zmdi-eye zmdi-eye-off");
//         var input = $($(this).attr("toggle"));
//         if (input.attr("type") == "password") {
//           input.attr("type", "text");
//         } else {
//           input.attr("type", "password");
//         }
//       });
// })(jQuery);

$(document).ready(()=> {
  var apiUrl = "https://restcountries.eu/rest/v2/all";
  $.get(apiUrl,
      data => {
          data.forEach(country => {
              $('#Nationality').append(`<option value='${country.name}'>${country.name}</option>`)
          });
      }
  );

  $('.insurance').css("display", "none");

  $("#No").click(()=>{
    $('.insurance').css("display", "none");
  });

  $("#Yes").click(()=>{
    $(".insurance").css("display", "inline");
  });
});