<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>About Page</title>

<style>

nav {
  font-family: 'Shadows Into Light';
}

h1 {
  font-size: 2.5em;
  text-align: center;
  font-family: 'Shadows Into Light';
  color: white;
}

h2 {
  font-size: 2em;
  font-family: 'Shadows Into Light';
  text-align: center;
}

p {
  font-size: 1em;
  text-align: center;
  font-family: 'Shadows Into Light';
  color: white;
}

.page-header {
  text-align: center;
  font-family: 'Shadows Into Light';
  font-size: 3em;
  color: white;
}

body {
  background-image: url("lib/images/danceWithTheDevil.jpg");
  repeat: no-repeat center center;
  background-position: 10% 10%;
}

div.img {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.img:hover {
  border: 1px solid #777;
}

div.img img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.container {
  padding-left: 5px;
}

</style>

    <?php require_once("headutils.php");?>

  </head>

  <body>
      <?php require_once("navbar.php");?>

      <div class="page-header">
        <h1>Up Close and Personal</h1>
      </div>

    <div class="container">
      <h2>
       <p>
         Web development, graphic design, custom imagery/photoshop,
         and construction design.
       </p>
     </h2>
    </div>

    <h3>
      <p class="text">
         Art has been a passion for me since a young age.
         Creating that perfect image or the perfect circle.
         Always interested in CAD and drawing plans throughout
         school, I immediately dove into the construction
         trades while in high school. Which thus only
         furthered my interest in creation/building. Art can
         take many many forms, and as an artist or creator
         it's our responsibility to share our work with the world.
      </p>
    </h3>

   </div>
<div class="container">
   <div class="img">
     <a target="_blank" href="PicsArt_09-10-10.30.44.jpg">
       <img src="lib/images/PicsArt_09-10-10.30.44.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Created by Cali</div>
   </div>

   <div class="img">
     <a target="_blank" href="KOHSMTHNGWCK2.jpg">
       <img src="lib/images/KOHSMTHNGWCK2.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Custom Creations</div>
   </div>

   <div class="img">
     <a target="_blank" href="PicsArt_10-11-11.18.26.jpg">
       <img src="lib/images/PicsArt_10-11-11.18.26.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Created by Cali</div>
   </div>

   <div class="img">
     <a target="_blank" href="PicsArt_10-21-12.01.36.jpg">
       <img src="lib/images/PicsArt_10-21-12.01.36.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Creations by Cali</div>
   </div>
   <div class="img">
     <a target="_blank" href="PicsArt_10-21-12.01.36.jpg">
       <img src="lib/images/PicsArt_10-21-12.01.36.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Creations by Cali</div>
   </div>
   <div class="img">
     <a target="_blank" href="PicsArt_10-21-12.01.36.jpg">
       <img src="lib/images/PicsArt_10-21-12.01.36.jpg" alt="KOH" width="300" height="200">
     </a>
     <div class="desc">Creations by Cali</div>
   </div>
   </div>
</div>
  </body>

</html>
