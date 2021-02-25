<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* The grid: Three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 50px;
  text-align: center;
  font-size: 25px;
  cursor: pointer;
  color: white;
}

.containerTab {
  padding: 20px;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Closable button inside the container tab */
.closebtn {
  float: right;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div class="information-panel">
  <div class="table-grouped-cell">
    <div class="flexible-row">
      <div class="table-icon">
        <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><ellipse cx="20" cy="20.014" rx="20" ry="19.987" fill="#ffb268">
          
        </ellipse><path d="M20.697 7.8a.3.3 0 01.3.3v2.163a9.78 9.78 0 015.185 2.246l1.598-1.599a.298.298 0 01.424 0l.986.986a.298.298 0 010 .424l-1.618 1.618a9.74 9.74 0 012.086 5.164l2.342.001a.3.3 0 01.3.3v1.394a.3.3 0 01-.3.3h-2.362a9.764 9.764 0 01-2.157 5.074l1.709 1.709a.298.298 0 010 .424l-.986.986a.298.298 0 01-.424 0l-1.709-1.709a9.764 9.764 0 01-5.074 2.157V32.1a.3.3 0 01-.3.3h-1.394a.3.3 0 01-.3-.3l-.001-2.342a9.75 9.75 0 01-5.163-2.088l-1.619 1.62a.298.298 0 01-.424 0l-.986-.986a.298.298 0 010-.424l1.6-1.599a9.774 9.774 0 01-2.248-5.184H8a.3.3 0 01-.3-.3v-1.394a.3.3 0 01.3-.3l2.141-.001a9.763 9.763 0 012.173-5.277L10.81 12.32a.298.298 0 010-.424l.986-.986a.298.298 0 01.424 0l1.504 1.505a9.733 9.733 0 015.278-2.174l.001-2.141a.3.3 0 01.3-.3h1.394zm-3.07 14.95a1.326 1.326 0 100 2.65c.733 0 1.328-.593 1.328-1.325s-.595-1.325-1.328-1.325zm4.646 0c-.733 0-1.328.593-1.328 1.325a1.327 1.327 0 002.655 0c0-.732-.594-1.325-1.327-1.325zm-6.985-4.108a1.364 1.364 0 000 2.726c.753 0 1.368-.616 1.368-1.368 0-.752-.615-1.358-1.368-1.358zm4.602 0a1.364 1.364 0 000 2.726c.753 0 1.368-.616 1.368-1.368 0-.752-.615-1.358-1.368-1.358zm4.602 0a1.364 1.364 0 000 2.726c.753 0 1.368-.616 1.368-1.368 0-.752-.615-1.358-1.368-1.358zM17.627 14.8a1.326 1.326 0 100 2.65c.733 0 1.328-.593 1.328-1.325S18.36 14.8 17.627 14.8zm4.646 0c-.733 0-1.328.593-1.328 1.325a1.327 1.327 0 002.655 0c0-.732-.594-1.325-1.327-1.325z" fill="#fff" fill-rule="nonzero"></path></svg></div><div><h2 class="table-grouped-cell-label">About COVID-19</h2><span class="table-grouped-cell-descriptive-label">An up-to-date rundown of the virus and its symptoms. <span class="table-grouped-cell-link"><ui-button class="push primary" tabindex="0" ontouchstart="void(0)" role="button" aria-label="About COVID-19 Learn more"><button type="button" tabindex="-1"></button>Learn more<svg viewBox="0 0 49.853515625 86.7666015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class="chevron-inline-cap chevron-inline-end glyph-box" style="margin-left: 5px; height: 9.851450430347466px; width: 5.660351207883466px;"><g transform="matrix(1 0 0 1 -12.451225585937436 78.61328125)"><path d="M 18.2617 8.00781 C 19.873 8.00781 21.1914 7.42188 22.3145 6.34766 L 60.3027 -30.7617 C 61.6211 -32.1289 62.3047 -33.5449 62.3047 -35.3027 C 62.3047 -37.0117 61.6699 -38.5254 60.3027 -39.7949 L 22.3145 -76.9531 C 21.1914 -78.0273 19.873 -78.6133 18.2617 -78.6133 C 14.9902 -78.6133 12.4512 -76.0742 12.4512 -72.8516 C 12.4512 -71.2891 13.1348 -69.7754 14.209 -68.6523 L 48.4375 -35.2539 L 14.209 -1.95312 C 13.0859 -0.78125 12.4512 0.634766 12.4512 2.24609 C 12.4512 5.46875 14.9902 8.00781 18.2617 8.00781 Z"></path></g></svg></ui-button></span></span></div></div></div><div class="table-grouped-cell"><div class="flexible-row"><div class="table-icon"><div class="info-tile-icon" style="background-color: rgb(85, 151, 113);"><svg viewBox="0 0 233.30078125 159.98291015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" layout-box" style="fill: rgb(255, 255, 255);"><g transform="matrix(1 0 0 1 58.56936523437503 115.221435546875)"><path d="M 28.5156 10.4492 L 87.6465 10.4492 C 98.2422 10.4492 103.711 4.98047 103.711 -5.46875 L 103.711 -64.8926 C 103.711 -75.3418 98.2422 -80.8105 87.6465 -80.8105 L 28.5156 -80.8105 C 17.9688 -80.8105 12.4512 -75.3906 12.4512 -64.8926 L 12.4512 -5.46875 C 12.4512 4.98047 17.9688 10.4492 28.5156 10.4492 Z M 52.7832 -11.1328 C 50.8789 -11.1328 49.4141 -11.9141 47.998 -13.7207 L 36.084 -28.2227 C 35.1562 -29.3457 34.7168 -30.4688 34.7168 -31.6895 C 34.7168 -34.2285 36.7188 -36.2793 39.2578 -36.2793 C 40.7715 -36.2793 41.9922 -35.7422 43.2129 -34.1309 L 52.5879 -22.2656 L 72.7539 -54.4922 C 73.7793 -56.2012 75.1953 -57.0312 76.7578 -57.0312 C 79.1992 -57.0312 81.4453 -55.3223 81.4453 -52.7344 C 81.4453 -51.6113 80.8594 -50.3906 80.1758 -49.3164 L 57.3242 -13.7207 C 56.2012 -12.0117 54.5898 -11.1328 52.7832 -11.1328 Z"></path></g></svg></div></div><div><h2 class="table-grouped-cell-label">What You Can Do</h2><span class="table-grouped-cell-descriptive-label">Information about social distancing, isolating from others, and more. <span class="table-grouped-cell-link"><ui-button class="push primary" tabindex="0" ontouchstart="void(0)" role="button" aria-label="What You Can Do Learn more"><button type="button" tabindex="-1"></button>Learn more<svg viewBox="0 0 49.853515625 86.7666015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class="chevron-inline-cap chevron-inline-end glyph-box" style="margin-left: 5px; height: 9.851450430347466px; width: 5.660351207883466px;"><g transform="matrix(1 0 0 1 -12.451225585937436 78.61328125)"><path d="M 18.2617 8.00781 C 19.873 8.00781 21.1914 7.42188 22.3145 6.34766 L 60.3027 -30.7617 C 61.6211 -32.1289 62.3047 -33.5449 62.3047 -35.3027 C 62.3047 -37.0117 61.6699 -38.5254 60.3027 -39.7949 L 22.3145 -76.9531 C 21.1914 -78.0273 19.873 -78.6133 18.2617 -78.6133 C 14.9902 -78.6133 12.4512 -76.0742 12.4512 -72.8516 C 12.4512 -71.2891 13.1348 -69.7754 14.209 -68.6523 L 48.4375 -35.2539 L 14.209 -1.95312 C 13.0859 -0.78125 12.4512 0.634766 12.4512 2.24609 C 12.4512 5.46875 14.9902 8.00781 18.2617 8.00781 Z"></path></g></svg></ui-button></span></span></div></div></div><div class="table-grouped-cell"><div class="flexible-row"><div class="table-icon"><div class="info-tile-icon" style="background-color: rgb(132, 120, 142);"><svg viewBox="0 0 233.30078125 159.98291015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" layout-box" style="fill: rgb(255, 255, 255);"><g transform="matrix(1 0 0 1 53.32033203125002 115.221435546875)"><path d="M 12.4512 10.791 C 12.4512 21.3867 17.9199 26.8555 28.3691 26.8555 L 74.0723 26.8555 C 84.5215 26.8555 89.9902 21.3379 89.9902 10.791 L 89.9902 1.75781 L 98.291 1.75781 C 108.74 1.75781 114.209 -3.75977 114.209 -14.3066 L 114.209 -81.3477 C 114.209 -91.9434 108.74 -97.4609 98.291 -97.4609 L 52.5879 -97.4609 C 42.1387 -97.4609 36.6699 -91.9434 36.6699 -81.3477 L 36.6699 -72.3633 L 28.3691 -72.3633 C 17.9199 -72.3633 12.4512 -66.7969 12.4512 -56.25 Z M 63.916 -79.9316 C 61.7676 -79.9316 60.5957 -81.3965 60.5957 -83.0078 L 60.5957 -84.1309 C 60.5957 -85.5957 61.6699 -87.2559 63.916 -87.2559 L 86.9141 -87.2559 C 89.209 -87.2559 90.2344 -85.5957 90.2344 -84.1309 L 90.2344 -83.0078 C 90.2344 -81.3965 89.1113 -79.9316 86.9141 -79.9316 Z M 22.168 10.1562 L 22.168 -55.6152 C 22.168 -60.1074 24.5117 -62.5977 29.248 -62.5977 L 44.1406 -62.5977 L 44.1406 -36.0352 C 44.1406 -28.9551 47.6074 -25.5371 54.6387 -25.5371 L 80.2734 -25.5371 L 80.2734 10.1562 C 80.2734 14.6484 77.9297 17.1387 73.1934 17.1387 L 29.1992 17.1387 C 24.5117 17.1387 22.168 14.6484 22.168 10.1562 Z M 55.5664 -34.082 C 53.5645 -34.082 52.6855 -34.9121 52.6855 -36.9629 L 52.6855 -60.7422 L 78.9551 -34.082 Z"></path></g></svg></div></div><div><h2 class="table-grouped-cell-label">COVID-19 Testing</h2><span class="table-grouped-cell-descriptive-label">Current guidance on who should be tested and what to expect from results. <span class="table-grouped-cell-link"><ui-button class="push primary" tabindex="0" ontouchstart="void(0)" role="button" aria-label="COVID-19 Testing Learn more"><button type="button" tabindex="-1"></button>Learn more<svg viewBox="0 0 49.853515625 86.7666015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class="chevron-inline-cap chevron-inline-end glyph-box" style="margin-left: 5px; height: 9.851450430347466px; width: 5.660351207883466px;"><g transform="matrix(1 0 0 1 -12.451225585937436 78.61328125)"><path d="M 18.2617 8.00781 C 19.873 8.00781 21.1914 7.42188 22.3145 6.34766 L 60.3027 -30.7617 C 61.6211 -32.1289 62.3047 -33.5449 62.3047 -35.3027 C 62.3047 -37.0117 61.6699 -38.5254 60.3027 -39.7949 L 22.3145 -76.9531 C 21.1914 -78.0273 19.873 -78.6133 18.2617 -78.6133 C 14.9902 -78.6133 12.4512 -76.0742 12.4512 -72.8516 C 12.4512 -71.2891 13.1348 -69.7754 14.209 -68.6523 L 48.4375 -35.2539 L 14.209 -1.95312 C 13.0859 -0.78125 12.4512 0.634766 12.4512 2.24609 C 12.4512 5.46875 14.9902 8.00781 18.2617 8.00781 Z"></path></g></svg></ui-button></span></span></div></div></div><div class="table-grouped-cell"><div class="flexible-row"><div class="table-icon"><div class="info-tile-icon" style="background-color: rgb(220, 67, 96);"><svg viewBox="0 0 233.30078125 159.98291015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" layout-box" style="fill: rgb(255, 255, 255);"><g transform="matrix(1 0 0 1 55.46865234374991 115.221435546875)"><path d="M 61.1816 12.0117 C 62.4512 12.0117 64.3066 11.0352 65.8203 10.0586 C 93.1152 -7.51953 110.596 -28.125 110.596 -48.9746 C 110.596 -66.9922 98.1445 -79.4922 82.5684 -79.4922 C 72.8516 -79.4922 65.5762 -74.1211 61.1816 -66.1133 C 56.8848 -74.1211 49.5605 -79.4922 39.8438 -79.4922 C 24.2188 -79.4922 11.7676 -66.9922 11.7676 -48.9746 C 11.7676 -28.125 29.2969 -7.51953 56.543 10.0586 C 58.0566 11.0352 59.9121 12.0117 61.1816 12.0117 Z"></path></g></svg></div></div><div><h2 class="table-grouped-cell-label">Supporting Yourself</h2><span class="table-grouped-cell-descriptive-label">Resources to help you care for yourself during this time. <span class="table-grouped-cell-link"><ui-button class="push primary" tabindex="0" ontouchstart="void(0)" role="button" aria-label="Supporting Yourself Learn more"><button type="button" tabindex="-1"></button>Learn more<svg viewBox="0 0 49.853515625 86.7666015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class="chevron-inline-cap chevron-inline-end glyph-box" style="margin-left: 5px; height: 9.851450430347466px; width: 5.660351207883466px;"><g transform="matrix(1 0 0 1 -12.451225585937436 78.61328125)"><path d="M 18.2617 8.00781 C 19.873 8.00781 21.1914 7.42188 22.3145 6.34766 L 60.3027 -30.7617 C 61.6211 -32.1289 62.3047 -33.5449 62.3047 -35.3027 C 62.3047 -37.0117 61.6699 -38.5254 60.3027 -39.7949 L 22.3145 -76.9531 C 21.1914 -78.0273 19.873 -78.6133 18.2617 -78.6133 C 14.9902 -78.6133 12.4512 -76.0742 12.4512 -72.8516 C 12.4512 -71.2891 13.1348 -69.7754 14.209 -68.6523 L 48.4375 -35.2539 L 14.209 -1.95312 C 13.0859 -0.78125 12.4512 0.634766 12.4512 2.24609 C 12.4512 5.46875 14.9902 8.00781 18.2617 8.00781 Z"></path></g></svg></ui-button></span></span></div></div></div><div class="table-grouped-cell"><div class="flexible-row"><div class="table-icon"><div class="info-tile-icon" style="background-color: rgb(239, 110, 110);"><svg viewBox="0 0 233.30078125 159.98291015625" version="1.1" xmlns="http://www.w3.org/2000/svg" class=" layout-box" style="fill: rgb(255, 255, 255);"><g transform="matrix(1 0 0 1 58.42283447265618 115.221435546875)"><path d="M 101.758 -14.7949 L 37.793 -78.7598 C 35.9863 -80.5664 34.9121 -81.0059 32.5684 -81.0059 L 20.6055 -81.0059 C 17.6758 -81.0059 15.8203 -80.7617 14.2578 -79.1992 C 12.6465 -77.5879 12.4512 -75.5371 12.4512 -72.8516 L 12.4512 -60.8887 C 12.4512 -58.4961 12.9395 -57.373 14.6973 -55.6641 L 78.6621 8.30078 C 80.4688 10.1074 81.5918 10.5469 83.8867 10.5469 L 95.8496 10.5469 C 98.7793 10.5469 100.635 10.3027 102.197 8.74023 C 103.809 7.12891 104.004 5.07812 104.004 2.39258 L 104.004 -9.57031 C 104.004 -11.9629 103.516 -13.0859 101.758 -14.7949 Z M 102.49 -40.4297 C 102.686 -40.0391 102.93 -39.8926 103.271 -39.8926 C 103.613 -39.8926 103.955 -40.1855 103.955 -40.7227 L 103.955 -72.8516 C 103.955 -75.5371 103.76 -77.5879 102.148 -79.1992 C 100.586 -80.7617 98.7305 -81.0059 95.8008 -81.0059 L 63.6719 -81.0059 C 63.1348 -81.0059 62.793 -80.7129 62.793 -80.3223 C 62.793 -80.0293 62.9883 -79.7363 63.3789 -79.5898 C 81.7871 -70.0195 92.9688 -58.8867 102.49 -40.4297 Z M 13.8672 -30.0293 C 13.7207 -30.4199 13.4277 -30.5664 13.1348 -30.5664 C 12.7441 -30.5664 12.4512 -30.2734 12.4512 -29.7363 L 12.4512 2.39258 C 12.4512 5.07812 12.6465 7.12891 14.2578 8.74023 C 15.8203 10.3027 17.6758 10.5469 20.6055 10.5469 L 52.7344 10.5469 C 53.2715 10.5469 53.5645 10.2539 53.5645 9.86328 C 53.5645 9.57031 53.418 9.27734 53.0273 9.13086 C 34.5703 -0.439453 23.4375 -11.5723 13.8672 -30.0293 Z"></path></g></svg></div></div><div><h2 class="table-grouped-cell-label">Updates from Apple News</h2><span class="table-grouped-cell-link with-outbound-link"><a href="https://apple.news/covid_19_web" target="_blank" rel="noopener noreferrer" aria-label="apple.news" title="apple.news" class="outbound-link">The latest information on COVID-19 from trusted sources.<svg viewBox="0 0 68.65234375 68.7001953125" version="1.1" xmlns="http://www.w3.org/2000/svg" class="arrow-up-inline-cap glyph-box" style="margin-left: 3px; height: 8.77522141065266px; width: 8.769109229255312px;"><g transform="matrix(1 0 0 1 -12.499980468749982 69.580078125)"><path d="M 81.1523 -18.3594 L 81.1523 -63.8672 C 81.1523 -67.2852 78.9551 -69.5801 75.4395 -69.5801 L 29.9316 -69.4824 C 26.6113 -69.4824 24.3652 -66.9922 24.3652 -64.1602 C 24.3652 -61.2305 26.8555 -58.9355 29.7852 -58.9355 L 44.5801 -58.9355 L 64.5508 -59.7168 L 56.0547 -52.1973 L 14.2578 -10.3027 C 13.0859 -9.17969 12.5 -7.76367 12.5 -6.44531 C 12.5 -3.56445 15.0879 -0.927734 18.0176 -0.927734 C 19.3848 -0.927734 20.752 -1.46484 21.9238 -2.63672 L 63.7695 -44.4824 L 71.2891 -53.0273 L 70.5078 -33.8379 L 70.5078 -18.2129 C 70.5078 -15.2344 72.8516 -12.7441 75.7812 -12.7441 C 78.6621 -12.7441 81.1523 -15.1855 81.1523 -18.3594 Z"></path></g></svg></a></span></div></div></div></div>

</body>
</html> 