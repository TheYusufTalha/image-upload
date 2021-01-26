<?php $dil = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if($dil == "tr")
{
    header("Location: /tr/");
}
elseif($dil == "en")
{
    header("Location: /en/");
}
else
{
   // varsayılan dil
   header("Location: /en/");
}
?>