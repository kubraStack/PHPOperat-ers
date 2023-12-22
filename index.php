<?php 

   
    //* 1- a, b çarpımı ile a,b,c topmanının farkı nedir?

      //$sonuc = ($a * $b) - ($a+$b+$c );
      
    //* 2- a, b, c toplamının mod 3'ü nedir?
       //$sonuc = ($a + $b + $c) % 3 ;
    
    //* 3- b'nin c. kuvvetini hesaplayınız.
        //$sonuc = pow($b, $c);
       
    //* 4- a içi 500-100 arasında kontrolü yapınız.
        /* $sonuc = ($a >50 and $a <100);

            if ($sonuc == true) {
                echo "a değeri 50 ile 100 arasındadır.";
            }else {
                echo "a değeri 50 ile 100 arasında değildir.";
            } 
        */
    //* 5- a için pozitif çift kontrolü yapınız.
        /* $sonuc = ($a > 0 and $a % 2 == 0);
            if ($sonuc) {
                echo "a değeri pozitif ve çift bir sayıdır.";
            }else {
                echo "a değeri tek ve negatif bir sayodor";
            } 
        */
    //* 6- username ve password ile uygulama giriş kontrolü yapınız.
        // $username = 'Akgün Gökalp Taşkın';
        // $password = "123456";

        // $sonuc = ($username == "Akgün Gökalp Taşkın" and $password == "123456");
        // if ($sonuc) {
        //     echo "Giriş Başarılı.";
        // }else{
        //     echo "Kullanıcı Bulunamadı !";
        // }
    //* 7- a,b,c için büyüklük kontrolü yapınız.
        // $a = 5;
        // $b = 9;
        // $c = 20;
        // if ($a > $b and $a > $c) {
        //     echo "A En Büyük";
        // }elseif($b > $a and $b > $c){
        //     echo "B En Büyük";
        // }else{
        //     echo "C En Büyük";
        // }
    //* 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız.
        //   a- Eğer ortalama 50 ve üstündeyse geçti değilse kaldı yazdırın.
        //   b- Geçmek için ortalama 50 olsa bile final notu en az 50 olmalıdır.
        //   c- Geçmek için finalden 70 alındığında ortalamanın önemi olmasın.

        $vize1 = 80;
        $vize2 = 90;
        $final = 48;

        $ortalama = (($vize1 + $vize2) / 2) * 0.6 + ($final * 0.4);
        // $gecmeDurumu = ($ortalama >= 50);
        $gecmeDurumu = ($ortalama >= 50 and $final >=50);
        // $gecmeDurumu = ($ortalama >= 50 or $final >=70);

        echo $ortalama."<br>";
        echo "geçme durumu: ".(int)$gecmeDurumu;


?>