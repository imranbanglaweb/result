	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
$("#myElem").show();
setTimeout(function() { $("#myElem").fadeOut(); }, 5000);

//bootstrap tooltip

 $(function () {
   $('[data-toggle="tooltip"]').tooltip({
     animation: 'animated slideInDown'
   });
})

//shake effect
 $(document).ready(function() {
// Start when document will be ready.
$("#btn").click(function() {
var email = $("#email").val(); // Store E-mail input value in the variable email.
var password = $("#semester").val(); // Store Password input value in the variable password.
/* Check if email=formget@gmail.com and password=fugo then,Show the message Account Validated!!! in the Div having id message.*/
if (email == "formget@gmail.com" && password == "fugo") {
$(".error").html("Account Validated!!!");
}
/* If E-mail and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
else {
$("#form1").effect("bounce");
$(".error").addClass("error");
}
});
});

 $('.bootpopup').click(function(){
  var frametarget = $(this).attr('href');
  var targetmodal = $(this).attr('target');
  if (targetmodal == undefined) {
    targetmodal = '#myModal';
  } else { 
    targetmodal = '#'+targetmodal;
  }
  if ($(this).attr('title') != undefined) {
    $(targetmodal+ ' .modal-header h3').html($(this).attr('title'));
    $(targetmodal+' .modal-header').show();
  } else {
     $(targetmodal+' .modal-header h3').html('');
    $(targetmodal+' .modal-header').hide();
  }  
    $(targetmodal).on('show', function () {
        $('iframe').attr("src", frametarget );   
    });
    $(targetmodal).modal({show:true});
  return false;

});







