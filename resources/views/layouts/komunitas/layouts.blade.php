<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Linkedin</title>
    <link rel="stylesheet" href="{{asset('komunitas/css/style.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
      integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
      crossorigin="anonymous"
    />
    {{-- dropdown --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="path-to-hierarchySelect-plugin.js"></script>
  </head>
  <body class="body">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbarbg fixed-top">
      <div class="container">
       
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto ml-4 text-center">
            <li class="nav-item active mr-3 my-auto">
              <a class="nav-link" href="#"
                ><i class="fas fa-home fa-lg" style="color: black">
                  <div class="menutext" style="color: black">Home</div></i
                >
              </a>
            </li>
            <li class="nav-item active mr-4 my-auto">
              <a class="nav-link" href="#"
                ><i class="fas fa-user-friends fa-lg">
                  <div class="menutext">connection</div></i
                >
              </a>
            </li>
           
            <li class="nav-item active mr-1 my-auto">
              <a class="nav-link" href="#"
                ><i class="fas fa-comment-dots fa-lg">
                  <div class="menutext">message</div></i
                >
              </a>
            </li>
           
            <li class="nav-item dropdown mt-1 mr-3 ml-3">
              <a
                class="nav-link"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  src="https://patika-prod.s3-eu-central-1.amazonaws.com/userFiles/ayya/profilePicture"
                  style="
                    width: 25px;
                    height: 25px;
                    border-radius: 50%;
                  "
                />
                <div class="menutext mt-0">
                 Profile
                </div>
              </a>
            </li>
          
          </ul>
        </div>
        <a class="navbar-brand" href="#">
           
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          ></button>
          <form class="form-inline flex-grow-1">
            <input
              class="form-control searche"
              type="search"
              placeholder="Search...."
              aria-label="Search"
            />
          </form>
          <i
          class="fas fa-handshake fa-lg"
          style="color: #0a66c2; font-size: 2.4rem"
        >
        </i>
      </div>
    </nav>
      @yield('content')
  
      {{-- dropdown kategori --}}
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

      
      
      <script>
   $('#imageInput').on('change', function() {
	$input = $(this);
	if($input.val().length > 0) {
		fileReader = new FileReader();
		fileReader.onload = function (data) {
		$('.image-preview').attr('src', data.target.result);
		}
		fileReader.readAsDataURL($input.prop('files')[0]);
		$('.image-button').css('display', 'none');
		$('.image-preview').css('display', 'block');
		$('.change-image').css('display', 'block');
	}
});
						
$('.change-image').on('click', function() {
	$control = $(this);			
	$('#imageInput').val('');	
	$preview = $('.image-preview');
	$preview.attr('src', '');
	$preview.css('display', 'none');
	$control.css('display', 'none');
	$('.image-button').css('display', 'block');
});


      </script>
  </body>
</html>
