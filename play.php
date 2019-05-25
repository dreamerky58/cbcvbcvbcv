<body>
<?php include 'templates/navbar.php' ?>
<?php     Error_Reporting( E_ALL | E_STRICT );
    Ini_Set( 'display_errors', true ); ?>
    <style>.alert-server {
        background-color:white;
        color: #555;
        text-align:center;
        border-bottom: 3px solid #446cb3 !important;
        border: 1px solid #446cb3;
        }
    .play-icon {
        max-width: 75px;
        max-height: 75px;
        }</style>
    <!-- Players online, logo etc. is located at templates/navbar.php -->
    <div class="container">
        <br>
        <div class="alert alert-server"><b>Connect to our server with <?php echo serverip ?></b></div>
        <br>
        <center>
        <div class="row">
            <div class="col-md col-md-4">
            <img class="play-icon" src="/img/annihilation.png">
            <h2><b>Annihilation</b></h2>
            <h4>Fun minigame where you must destroy other teams nexus!<br>Playing time: Arround 1 hour</h4>
                </div>
        </div>
	</center>
    </div>
	<?php include 'templates/footer.php' ?>