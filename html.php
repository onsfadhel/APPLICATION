<?php
    $pageTitle = 'Html Course';
    include_once('fragments/header.php');
    include_once('fragments/menu.php');
?>

    <section class="slider_section">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <h1 style="text-align:center;color:#7B68EE;"><strong>Join Our HTML course</strong></h1><hr>
 
            <div class="video" >
                <h2 style="text-align:center;color:#409fbf;"><strong>Watch the video</stong></h2>
                <video width="600" height="480"  src="videos/html.mp4" controls ></video>
                <h3>Course File</h3>
                <a href="downloadfile.php">Télécharger Text(.text)File</a>
                <h3 style="left:67%;">Video</h3>
                <a  href="dowloadvid.php"><div style="text-align:right">Télécharger le fichier Video</div></a><br>


            </div>
                
        </div>

    </section>

<?php
    include_once('fragments/footer.php');
?>