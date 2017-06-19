 $(document).ready(function() {  
  $('.multiselect').multiselect();
  $('.datepicker').datepicker();  
});
     function resimage(input) {
		 console.log(input, res);
            if (input.files && input.files[0]) {
                var rimage = new FileReader();
                rimage.onload = function (e) {
                    $('#rcard')
                        .attr('src', e.target.result);
                };

                rimage.readAsDataURL(input.files[0]);

            }
        }
		function visitingcard(input) {
            if (input.files && input.files[0]) {
                var vimage = new FileReader();

                vimage.onload = function (e) {
                    $('#vcard')
                        .attr('src', e.target.result);
                };

                vimage.readAsDataURL(input.files[0]);
            }
        }
		function menucard(input) {
            if (input.files && input.files[0]) {
                var mimage = new FileReader();

                mimage.onload = function (e) {
                    $('#mcard')
                        .attr('src', e.target.result);
                };

                mimage.readAsDataURL(input.files[0]);
            }
        }