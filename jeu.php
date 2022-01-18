<!DOCTYPE html>
<html>
<head>
	<title>Jeu</title>
<style>
body{
	margin:0;
	background-image: url("bg.png");
}
.rouge{
		border-color: tomato!important; 
}
.green{
		border-color: green!important; 
		opacity: 0.60;
}
.container{
	padding: 1px;
	margin-top: 60px;
	margin-left: auto;
	margin-right: auto;
	width:672px;
	height:480px;
	background-color:  rgba(200,200,200,0.6);
	/* ombres */
	-webkit-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	-moz-box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75);
	box-shadow: 2px 2px 73px -4px rgba(0,0,0,0.75); 
}
.container div {
	cursor: pointer;
	float:left;
	width:80px;
	height: 116px;
	border-color: #ccc; 
	border-style: solid;
    border-width: 2px;
}
.container div:hover {
	opacity: 0.60;
}
#demo{
	width:100px;
    margin-left: auto;
	margin-right: auto;

}
</style>
</head>
<body>
	<div class="container">
        <?php
        // Etape 1
            $tablChiffres = range(0, 41);

        // Etape 2
            shuffle($tablChiffres);

        // Etape 3
            $tablChiffre16 = array_slice($tablChiffres,26);

        // Etape 4
            $tablChiffre32 = array_merge($tablChiffre16, $tablChiffre16);
            //var_dump($tablChiffre32);

        // Etape 5
            shuffle($tablChiffre32);
            foreach($tablChiffre32 as $index=>$nombre){
                $img = "./images/".$nombre.".jpg"; ?>
                <div>
                    <a href="jeu.php">
                        <img src="<?=$img ?>" width="80" data-id='<?=$nombre ?>'>
                    </a> 
                </div>  
            <?php } ?>
	</div>
	<br><br>
	<div id="demo"><button id="btnTricher">Tricher</button></div>
</body>
</html>