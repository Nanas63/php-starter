<?php
$title = "Page accueil";
include_once "header.php"; ?>
<?php include_once "data.php"; ?>

<!-- <a href="contact.php">Contact</a> -->

<div class="container">
    <h1>Blog</h1><br><br>

    <div class="row g-5">

        <?php foreach ($articles as $key => $item):
            ?>


            <!-- <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">

                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            

                        </div>
                    </div>

            </div> -->


            <div class="col-xl-4 col-lg-4 col-sm-6">

                <div class="card">
                    <h2><?php echo $item['name']; ?></h2>

                    <img class="card-img-top" src="/asset/image/<?php echo $item['imagePath'] ?>" alt="...">

                    <div class="card-body">
                        <p><?php echo $item['date']; ?></p>
                        <p><?php echo $item['createdBy']; ?></p>


                        <p class="card-text">
                        <p><?php echo substr($item ['article'], 0, 25); ?>...</p>

                        <a href="single.php?position=<?php echo $key; ?>">voir le sport</a>
                    </div>


                </div>


            </div>

        <?php endforeach ?>
    </div>
</div>


<?php include_once "footer.php"; ?>
<?php include_once "contact.php"; ?>

<!-- <div class="col-xl-4 col-lg-4 col-sm-6">
     <h2>Mes inspirations</h2>
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
         </div>
 </div>

 <div class="col-xl-4 col-lg-4 col-sm-6">
     <h2>Mes voyages</h2>

         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
         </div>

 </div><div class="col-xl-4 col-lg-4 col-sm-6">
     <h2>Mes lectures</h2>
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
         </div>

 </div><div class="col-xl-4 col-lg-4 col-sm-6">
     <h2>Mes</h2>
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
         </div>
 </div>

 <div class="col-xl-4 col-lg-4 col-sm-6">
     <h2>Mes</h2>
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             </div>
         </div>
 </div> -->

