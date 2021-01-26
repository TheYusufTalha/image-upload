<?php include 'important/include/header.php'; ?>
<div class="container" style='text-align: center;'>
<?php echo $ads2; ?>

<hr></div>
<div class="container">
<div class="row" style="margin-top: 17px;" >
<?php 
if($_POST){
//get the url
$url = $_POST['url'];
 
//add time to the current filename
$uret = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$uretkucuk = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$sayi= rand(1,10);
$sayi2= rand(1,10);
$sayi3= rand(1,10);
$name = basename($url);
@list($txt, $ext) = explode(".", $name);
@$name = $sayi.$uret[rand(0,26)].$sayi2.$uret[rand(0,26)].$sayi3.$uretkucuk[rand(0,26)];
$name = $name.".".$ext;
$resim_urli = $base_url.'tr/img/'.$name;
//check if the files are only image / document
if($ext == "jpg" or $ext == "png" or $ext == "gif" or $ext == "JPG"  or $ext == "GIF" or $ext == "PNG"){
//here is the actual code to get the file from the url and save it to the uploads folder
//get the file from the url using file_get_contents and put it into the folder using file_put_contents
$upload = file_put_contents("img/$name",file_get_contents($url));
//check success
if($upload) {
 echo '<div class="col-md-4" style="padding: 0;">';
 echo '<div class="highlight"><img src="img/'.$name.'" alt="'.$txt.'" class="img-thumbnail"></div></div>';
}else{ '<script> alert("Lütfen klasör izninizi kontrol ediniz."); window.location = "/tr/anasayfa";</script>';}
}else{
echo '<script> alert("Lütfen bir resim dosyası ekleyiniz ve ya link boşluğunu doldurunuz."); window.location = "/tr/anasayfa";</script>';
}
}else {header('Location: '.$base_url);}
?>
</div>
</div>
<br>
<div class="form-group">
    <span>Direkt Bağlantı</span>
	<textarea style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" disabled><?php echo $resim_urli?></textarea>
	<span><a href="<?php print_r($resim_urli) ?>"><i style="color: #fff" class="fad fa-paper-plane"></i></a></span>
</div>
<div class="form-group">
    <span>Html Kodu</span>
	<textarea style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" disabled><?php echo '<img src="'.$resim_urli.'">'?></textarea>
</div>
<div class="form-group">
    <span>BB Kodu</span>
	<textarea style="width: 45%; height: 50px;resize: none;" class="form-field active" type="text" disabled><?php echo '[img]'.$resim_urli.'[/img]'?></textarea>
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