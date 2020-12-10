// Botão dos menu
$('.open-menu-icon').on('click', function () {
$('.main-nav-outer').addClass('open-menu');
});

$('.menu-close-icon').click(function () {
$('.main-nav-outer').removeClass('open-menu');
});


function validate()
		{
			if (document.myForm.txtfname.value == "") 
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtfname.focus();
				return false;
			}

			if (document.myForm.txtlname.value == "") 
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtlname.focus();
				return false;
			}

			if (document.myForm.txtpass.value == "")
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtpass.focus();
				return false;
			}

			if (document.myForm.txtmobile.value == "") 
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtmobile.focus();
				return false;
			}

			if (document.myForm.txtmail.value == "") 
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtmail.focus();
				return false;
			}

			if (document.myForm.txtadd.value == "") 
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.txtadd.focus();
				return false;
			}

			if (document.myForm.dob.value == "")
			{
				alert("Por favor, complete todos os dados!");
				document.myForm.dob.focus();
				return false;
			}
		}
