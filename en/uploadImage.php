<?php include 'important/include/header.php'; ?>
<div class="container" style='text-align: center;'>
<?php echo $ads2; ?>

<hr></div>
<div class="container">
<div class="row" style="margin-top: 17px;" >
	<?php 
	// local  upload don'edit here
		if ($_POST) {
			if ($_FILES["resim"]["size"]<1024*1024*1024*1024){
				if ($_FILES["resim"]["type"]=="image/png" or $_FILES["resim"]["type"]=="image/jpeg" or $_FILES["resim"]["type"]=="image/gif" ) {
					$Alertyuklenmedi= '<div class="container"><div class="alert alert-danger" role="alert">No File Selected.</div></div>';
					$Alertformat= '<div class="container"><div class="alert alert-danger" role="alert">Only JPG, PNG and GIF files can be uploaded!</div></div>';
					$adi = $_FILES["resim"]["name"];
					$uret = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
					$uretkucuk = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
					$uzanti=substr($adi,-4);
					$sayi= rand(1,10);
					$sayi2= rand(1,10);
					$sayi3= rand(1,10);
					@$yeni_ad = "img/".$uretkucuk[rand(0,26)].$sayi.$uret[rand(0,26)].$sayi2.$uret[rand(0,26)].$sayi3.$uzanti;
					$resim_urli = $base_url."tr/".$yeni_ad;
					if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
						echo '<div class="col-md-4" style="padding: 0;">';
						echo '<div class="highlight"><img src="'.$resim_urli.'" alt="'.$yeni_ad.'" class="img-thumbnail"></div></div>';
					} else {
						echo $Alertyuklenmedi;
					
					}
				}else{
					echo '<script> alert("Please attach a file."); window.location = "/tr/anasayfa";</script>';
				}
			}else{
				echo '<script> alert("This file is much larger than our site accepts."); window.location = "/tr/anasayfa";</script>';
			}
		}else {
		header('Location: '.$base_url);
		}
	?></div>
</div>
<br>
<div class="form-group">
    <span>Direct Link</span>
	<textarea style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" disabled><?php echo $resim_urli?></textarea>
	<span><a href="<?php print_r($resim_urli) ?>"><i style="color: #fff" class="fad fa-paper-plane"></i></a></span>
</div>
<div class="form-group">
    <span>Html Code</span>
	<textarea id="myInput2" style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" value="<img src=<?php $resim_urli ?>>" disabled><?php echo '<img src="'.$resim_urli.'">'?></textarea>
</div>
<div class="form-group">
    <span>BB Code</span>
	<textarea id="myInput" style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" value="[img]<?php $resim_urli ?>[/img]" disabled><?php echo '[img]'.$resim_urli.'[/img]'?></textarea>
</div>
<style>

	.img-thumbnail {
		float: left;
        margin-top: 2%;
        width: 400px;
        margin: 2%;
        align: center;
        margin-left: 4.3%;
        line-height: 10%;
        transition: all 0.2s;
        box-shadow: 0px 3px 6px #000;
	}
</style>
<?php include('important/include/footer.php') ?>