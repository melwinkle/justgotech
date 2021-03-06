<?php 
	session_start();

	if(isset($_SESSION['username'])){
		header("Location: ./SEProject1/client/tracker/tracker.php");
	}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Let us help you, Virtual Screening, Online Pharmacy, Specialists Clinic, Partners, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="./SEProject1/client/landingpage/nicepage.css" media="screen">
    <link rel="stylesheet" href="./SEProject1/client/landingpage/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="./SEProject1/client/landingpage/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./SEProject1/client/landingpage/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Oswald:200,300,400,500,600,700|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/justgotech.png",
		"sameAs": []
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body"><header class="u-clearfix u-header u-header" id="sec-a900"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="./index.php" class="u-image u-logo u-image-1" data-image-width="574" data-image-height="435">
          <img src="./SEProject1/images/justgotech.png" class="u-logo-image u-logo-image-1" data-image-width="64">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/client/landingpage/Services.html" style="padding: 10px 20px;">Services</a>
<!-- </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/partner/delivery/dlog.php" style="padding: 10px 20px;">Delivery</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/partner/pharmacist/pharm_log.php" style="padding: 10px 20px;">Pharmacy</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/partner/doctor/doc_log.php" style="padding: 10px 20px;">Doctor</a> -->
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/client/Regforms/Login.php" style="padding: 10px 20px;">Log in</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./SEProject1/client/Regforms/signup.php" style="padding: 10px 20px;">Create Account</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./SEProject1/client/landingpage/Services.html" style="padding: 10px 20px;">Services</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./SEProject1/client/Regforms/Login.html" style="padding: 10px 20px;">Log in</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="./SEProject1/client/Regforms/Register.html" style="padding: 10px 20px;">Create Account</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" id="sec-52d1" data-image-width="1600" data-image-height="1067">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img src="./SEProject1/client/landingpage/images/justgo.png" alt="" class="u-image u-image-default u-image-1" data-image-width="814" data-image-height="306">
        <p class="u-large-text u-text u-text-variant u-text-1">We develop solutions to empower Health Providers. This is from consultation,
medication prescription and delivery, to remote monitoring or follow-ups on
chronic diseases to when the patient is fully fit with no side effects</p>
        <a href="#" class="u-btn u-button-style u-palette-2-base u-btn-1">Read More</a>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-grey-10 u-typography-Normal--Introduction u-section-2" src="" id="carousel_6610">
      <img class="u-expanded-width u-image u-image-1" src="./SEProject1/client/landingpage/images/sincerely-media-gPnHi8AmO5k-unsplash.jpg" data-image-width="1600" data-image-height="1067">
      <h5 class="u-custom-font u-font-open-sans u-text u-text-body-alt-color u-text-1">An online healthcare service</h5>
      <h1 class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Let us help you</h1>
      <div class="u-list u-repeater u-list-1">
        <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-align-center u-icon u-icon-circle u-palette-4-dark-1 u-spacing-19 u-icon-1" data-href="https://nicepage.com"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 496 496" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-461d"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 496 496" id="svg-461d"><path d="m248 129.078125 58.894531-49.078125h77.105469v-80h-192v80h56zm-40-65.078125v-48h160v48h-66.894531l-37.105469 30.921875v-30.921875zm0 0"></path><path d="m224 32h16v16h-16zm0 0"></path><path d="m256 32h64v16h-64zm0 0"></path><path d="m336 32h16v16h-16zm0 0"></path><path d="m407.238281 480-6.46875-64.761719c26.710938-4.222656 47.230469-27.351562 47.230469-55.238281v-104h-32v-11.054688c0-10.875-5.976562-20.640624-15.585938-25.648437 9.554688-8.777344 15.585938-21.328125 15.585938-35.296875v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 20.710938 13.207031 38.34375 31.625 45.0625l-42.9375 42.9375h-44.863281c-.894531-13.335938-10.054688-24.960938-23.03125-28.671875l-32.792969-9.359375v-14.289062c9.792969-8.792969 16-21.503907 16-35.679688v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 14.167969 6.207031 26.878906 16 35.679688v14.296874l-32.792969 9.359376c-13.664062 3.894531-23.207031 16.550781-23.207031 30.769531v29.894531h-32v48h16v128h-72v16h496v-16zm-71.238281-128v-36.6875l56.6875-56.6875c4.097656-4.097656 6.535156-9.601562 7.082031-15.34375.070313.558594.230469 1.085938.230469 1.664062v99.054688c0 13.230469-10.769531 24-24 24h-64v-16zm-24 64h40.761719l6.398437 64h-47.160156zm56.839844 0h15.921875l6.398437 64h-15.921875zm47.160156-72v-72h16v88c0 22.054688-17.945312 40-40 40h-80v-16h64c22.054688 0 40-17.945312 40-40zm-80-160v-16c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm-20.6875 104 53.375-53.375c1.671875-1.671875 3.984375-2.625 6.34375-2.625 4.945312 0 8.96875 4.023438 8.96875 8.96875 0 2.359375-.953125 4.671875-2.625 6.34375l-56.6875 56.6875h-84.6875c-4.414062 0-8-3.585938-8-8s3.585938-8 8-8zm-171.3125-120c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm32 64c5.617188 0 10.984375-1.023438 16-2.800781v8.59375c-1.984375 3.0625-7.496094 10.207031-16 10.207031s-14.015625-7.144531-16-10.207031v-8.59375c5.015625 1.777343 10.382812 2.800781 16 2.800781zm-72 42.105469c0-7.113281 4.777344-13.433594 11.601562-15.386719l32.957032-9.414062c4.640625 6.046874 13.671875 14.695312 27.441406 14.695312s22.800781-8.648438 27.441406-14.703125l32.957032 9.414063c6.128906 1.753906 10.402343 7.082031 11.257812 13.28125h-7.65625c-13.230469 0-24 10.769531-24 24 0 2.816406.574219 5.488281 1.472656 8h-113.472656zm-32 45.894531h248v16h-248zm16 64h24v-16h-24v-16h208v16h-168v16h168v96h-19.054688l-16-32h-137.890624l-16 32h-19.054688zm171.054688 96h-134.109376l8-16h118.109376zm0 0"></path></svg></span>
            <h3 class="u-custom-font u-font-titillium-Web u-text u-text-3">General Screening</h3>
            <p class="u-text u-text-grey-50 u-text-4">Use our technologies to determine what your ailment may be and direct you to the right resuources</p>
          </div>
        </div>
        <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-video-cover u-white">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-align-center u-icon u-icon-circle u-palette-4-dark-1 u-spacing-19 u-icon-2" data-href="https://nicepage.com"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a34"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-6a34"><g><path d="m396 42h-42.592c7.484 10.708 12.055 23.593 12.546 37.5h10.046c20.678 0 37.5 16.822 37.5 37.5v320c0 20.678-16.822 37.5-37.5 37.5h-240c-20.678 0-37.5-16.822-37.5-37.5v-320c0-20.678 16.822-37.5 37.5-37.5h10.047c.491-13.907 5.062-26.792 12.546-37.5h-42.593c-30.327 0-55 24.673-55 55v360c0 30.327 24.673 55 55 55h280c30.327 0 55-24.673 55-55v-360c0-30.327-24.673-55-55-55z"></path><path d="m191 109.5h130c8.284 0 15-6.716 15-15v-12.5c0-22.091-17.909-40-40-40v-17c0-13.807-11.193-25-25-25h-30c-13.807 0-25 11.193-25 25v17c-22.091 0-40 17.909-40 40v12.5c0 8.284 6.716 15 15 15z"></path><path d="m136 109.5c-4.142 0-7.5 3.358-7.5 7.5v320c0 4.142 3.358 7.5 7.5 7.5h240c4.142 0 7.5-3.358 7.5-7.5v-320c0-4.142-3.358-7.5-7.5-7.5h-12.58c-6.192 17.459-22.865 30-42.42 30h-130c-19.555 0-36.228-12.541-42.42-30zm80 92.5h25v-25c0-8.284 6.716-15 15-15s15 6.716 15 15v25h25c8.284 0 15 6.716 15 15s-6.716 15-15 15h-25v25c0 8.284-6.716 15-15 15s-15-6.716-15-15v-25h-25c-8.284 0-15-6.716-15-15s6.716-15 15-15zm-10 100h100c8.284 0 15 6.716 15 15s-6.716 15-15 15h-100c-8.284 0-15-6.716-15-15s6.716-15 15-15zm0 60h100c8.284 0 15 6.716 15 15s-6.716 15-15 15h-100c-8.284 0-15-6.716-15-15s6.716-15 15-15z"></path>
</g></svg></span>
            <h3 class="u-custom-font u-font-titillium-Web u-text u-text-5">Treatment Journey</h3>
            <p class="u-text u-text-grey-50 u-text-6">Work with our counsellors and service providers to get you back on your feet</p>
          </div>
        </div>
        <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-repeater-item u-video-cover u-white">
          <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-align-center u-icon u-icon-circle u-palette-4-dark-1 u-spacing-19 u-icon-3" data-href="https://nicepage.com"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-043d"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-043d" style="enable-background:new 0 0 512 512;"><g><g><path d="M125.696,125.994c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S131.216,125.994,125.696,125.994z"></path>
</g>
</g><g><g><path d="M215.691,312.984h-29.998v-29.998c0-5.522-4.478-10-10-10s-9.999,4.478-9.999,10v29.998h-29.998    c-5.522,0-10,4.478-10,9.999s4.478,10,10,10h29.998v29.998c0,5.522,4.478,10,9.999,10s10-4.478,10-10v-29.998h29.998    c5.522,0,10-4.478,10-10S221.214,312.984,215.691,312.984z"></path>
</g>
</g><g><g><path d="M485.578,321.984c-22.105-38.286-70.981-51.389-109.274-29.279l-40.618,23.45v-86.836c0-10.735-3.55-21.388-9.999-29.998    l-49.997-66.661v-28.386c11.638-4.128,19.999-15.242,19.999-28.279V29.998C295.687,13.457,282.23,0,265.689,0H85.698    C69.157,0,55.699,13.457,55.699,29.998v45.998c0,13.035,8.361,24.151,19.999,28.279v28.386l-50.001,66.665    c-6.446,8.606-9.996,19.258-9.996,29.993v193.66c0,27.569,22.429,49.997,49.997,49.997h160.702    c22.421,37.583,70.767,50.161,108.664,28.279L456.3,431.258C494.255,409.34,507.794,360.479,485.578,321.984z M75.698,29.998    c0-5.514,4.486-10,9.999-10h179.991c5.514,0,10,4.486,10,10v45.998c0,5.514-4.486,9.999-10,9.999H85.698    c-5.514,0-9.999-4.486-9.999-9.999V29.998z M41.701,211.319l51.996-69.326c1.298-1.73,2-3.836,2-6v-29.998h159.992v19.999h-89.995    c-5.522,0-10,4.478-10,10s4.478,10,10,10h94.995l48.993,65.322c3.202,4.275,5.191,9.39,5.792,14.674H35.913    C36.513,220.705,38.502,215.59,41.701,211.319z M65.699,452.977c-16.541,0-29.998-13.457-29.998-29.998v-10.099h181.675    c-3.171,12.965-3.15,26.813,0.481,40.098H65.699z M225.219,392.98H35.7V245.987h279.986V327.7l-60.619,35.002    C242.428,370.003,232.212,380.396,225.219,392.98z M325.066,483.935c-28.697,16.571-65.367,6.771-81.949-21.946    c-16.661-28.994-6.564-65.498,21.952-81.969l54.277-31.338l59.997,103.915L325.066,483.935z M446.3,413.939l-49.637,28.659    l-59.998-103.917l49.638-28.656c28.716-16.578,65.373-6.761,81.955,21.957C484.913,360.844,474.785,397.49,446.3,413.939z"></path>
</g>
</g></svg></span>
            <h3 class="u-custom-font u-font-titillium-Web u-text u-text-7">Account Creation</h3>
            <p class="u-text u-text-grey-50 u-text-8">Create an account with us so you can joy amazing benefits like discounts from our service providers</p>
          </div>
        </div>
      </div>
      </p>
    </section>
    
    <section class="u-clearfix u-section-5" id="sec-833d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Partners</h1>
        <div class="u-expanded-width u-list u-repeater u-list-1">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="150" data-image-height="99" src="./SEProject1/client/landingpage/images/68d6a7f3bc0213e8d345c2d3c2b2f28adf9b1d37ea07b0946c3d4439861e3e7d5526cf0f8745b5164bd52a7c8cfa2571462a4998d6bed20d7d0217_1280.jpg">
              <h3 class="u-text u-text-2">Dr. Jonas</h3>
              <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
              <a href="" class="u-border-1 u-border-black u-border-hover-palette-2-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-text-hover-palette-2-base u-btn-1">learn more</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="150" data-image-height="100" src="./SEProject1/client/landingpage/images/241459142-01.jpeg">
              <h3 class="u-text u-text-3">Dr. Mike</h3>
              <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-2"></div>
              <a href="" class="u-border-1 u-border-black u-border-hover-palette-2-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-text-hover-palette-2-base u-btn-2">learn more</a>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="82" data-image-height="150" src="./SEProject1/client/landingpage/images/241459142-01.png">
              <h3 class="u-text u-text-4">Dr. Luka</h3>
              <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-3"></div>
              <a href="" class="u-border-1 u-border-black u-border-hover-palette-2-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-text-hover-palette-2-base u-btn-3">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-6" id="sec-5918">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-27-lg u-size-27-md u-size-27-sm u-size-27-xs u-size-30-xl">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <h2 class="u-text u-text-1">Contact Us</h2>
                      <div class="u-social-icons u-spacing-10 u-social-icons-1">
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="width: 32px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a8a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-6a8a"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
                        
                        
                      </span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="width: 32px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-31fc"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-31fc"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
                        
                        
                      </span>
                        </a>
                        <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="width: 32px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5e78"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-5e78"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
                        
                        
                      </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-google u-social-icon u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style="width: 32px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d3c9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-d3c9"><path d="M62.2,81.6c-8.6,11.2-24.6,14.4-37.6,10C10.9,87,0.8,73.2,1,58.5c-0.8-18,15.2-34.6,33.1-34.9 c9.2-0.8,18.2,2.7,25,8.6c-2.9,3.1-5.7,6.2-8.9,9.2c-6.2-3.8-13.5-6.5-20.6-4C18.1,40.7,11,54.2,15.4,65.6 c3.5,11.8,17.8,18.3,29.2,13.2c5.8-2.1,9.7-7.4,11.3-13.2c-6.6-0.1-13.2,0-20.1-0.3c0-3.9,0-7.9,0-11.9c11.2,0,22.2,0,33.3,0 C69.9,63.4,68.3,73.9,62.2,81.6z M110.9,63.7c-3.4,0-6.6,0-10,0c0,3.4,0,6.6,0,10c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10 c-3.4,0-6.6,0-10,0c0-3.4,0-6.6,0-10c3.4,0,6.6,0,10,0c0-3.4,0-6.6,0.1-10c3.4,0,6.6,0,10,0c0,3.4,0,6.6,0,10c3.4,0,6.6,0,10,0 C110.9,56.9,110.9,60.3,110.9,63.7z"></path></svg>
                        
                        
                      </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30-xl u-size-33-lg u-size-33-md u-size-33-sm u-size-33-xs">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <p class="u-text u-text-default u-text-2">We would love to hear more from you. Please contact us using the form below.</p>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <div class="u-form u-form-1">
                        <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form-4">
                          <div class="u-form-group u-form-name">
                            <label for="name-e2a4" class="u-form-control-hidden u-label">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name-e2a4" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-e2a4" class="u-form-control-hidden u-label">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email-e2a4" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <label for="message-e2a4" class="u-form-control-hidden u-label">Message</label>
                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-e2a4" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                          </div>
                          <div class="u-form-group u-form-submit">
                            <a href="#" class="u-btn u-btn-submit u-button-style u-palette-2-base u-btn-1">Submit</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                          </div>
                          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                          <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-e359"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="./index.php" class="u-image u-logo u-image-1" data-image-width="574" data-image-height="435">
          <img src="./SEProject1/images/justgotech.png" class="u-logo-image u-logo-image-1" data-image-width="80">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-71f8"></use></svg><svg class="u-svg-content" id="svg-71f8" style="color: rgb(59, 89, 152);"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4dfc"></use></svg><svg class="u-svg-content" id="svg-4dfc" style="color: rgb(85, 172, 238);"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a923"></use></svg><svg class="u-svg-content" id="svg-a923" style="color: rgb(197, 54, 164);"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a38d"></use></svg><svg class="u-svg-content" id="svg-a38d" style="color: rgb(0, 122, 185);"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-1">JustGoTech 2021</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      
    </section>
  </body>
</html>