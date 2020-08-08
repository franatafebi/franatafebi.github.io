<style>
  #wrapper{
  	width: 800px;
  	margin: 0 auto;
   }
   </style>
<div id="wrapper" class="w3-container w3-content w3-center w3-padding-64" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url();?>images/c.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3></h3>
      <p><b>Penghargaan yang pernah diraih oleh Bank Sampah Junjung Birru</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php echo base_url();?>images/acb.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><center>JUNJUNG BIRRU</center></h2>
    <p class="w3-opacity"><i>Bersih itu sehat</i></p>
    <p>Mencintai dan menjaga lingkungan kita itu penting karena kehidupan kita tak akan lepas dari lingkungan hidup. Lingkungan hidup yang baik akan membuat kehidupan kita menjadi baik begitu juga sebaliknya lingkungan yang buruk akan membuat kehidupan kita menjadi buruk. Oleh sebab itu kita wajib untuk mencintai dan menjaga lingkungan kita.</p>
    <br>
    <p>Apakah Jika Pohon terakhir akan ditebang, dan mata air terakhir berhenti mengalir, baru saat itulah manusia sadar bahwa uang tidak dapat dimakan dan diminum. Hanya manusia yang dapat menebang pohon, mengolahkan menjadi kertas, dan menuliskan pada kertas itu  <b>Stop Penembangan Pohon</b> JIka alam sudah mulai tidak bersahabat, maka manusia harus siap menerima Derita. Dunia diserahkan TUhan kepada Manusia untuk dikuasai, bukan di eksploitasi. Dengan membuang sampah pada tempatnya, maka anda sudah mencintai jutaan manusia. Kebersihan adalah sebagian dari iman. Dengan merusak alam sekitar berarti kita juga merusak diri sendiri, karena manusia adalah bagian dari alam.</p>
  </div>



  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center"><center>CONTACT</center></h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    
      
        <i class="fa fa-map-marker" style="width:30px"></i> Jl Demak No 3 Kelurahan Tuan Kentang Kecamatan Jakabaring Palembang<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      

  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->

<!-- Footer -->
<footer id="wrapper" class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Febi Franata</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>