<!-- anasayfa tasarımının yapılması -->
<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyonu</title>
</head>
<body>
<!-- anasayfa tasarımı için divlerin eklenmesi -->
<div class="adsoyad">
    <!-- header.phpde yazdığımız sorguyu h4 içine çekiyoruz ki sisteme giriş yapıldığında sn.ad soyad bölümü veritabanından, girilen kullanıcıya göre çekilebilsin -->
    <h4>
     Sn. <?php echo $kullanicicek['kullanici_adsoyad']; ?>
    </h4> 
</div>
<!-- orta divlerin eklenmesi -->
<div class="orta_div" id="randevu_div">

<form action="islem.php" method="post">
    <input type="date" name="tarih">
       <!--şehirlerin eklenmesi  -->

    <select name="sehir" class="hastane">
        <option value="İl Seçin">İl Seçin</option>
        <option value="Adana">Adana</option>
        <option value="Adıyaman">Adıyaman</option>
        <option value="Afyonkarahisar">Afyonkarahisar</option>
        <option value="Ağrı">Ağrı</option>
        <option value="Amasya">Amasya</option>
        <option value="Ankara">Ankara</option>
        <option value="Antalya">Antalya</option>
        <option value="Artvin">Artvin</option>
        <option value="Aydın">Aydın</option>
        <option value="Balıkesir">Balıkesir</option>
        <option value="Bilecik">Bilecik</option>
        <option value="Bingöl">Bingöl</option>
        <option value="Bitlis">Bitlis</option>
        <option value="Bolu">Bolu</option>
        <option value="Burdur">Burdur</option>
        <option value="Bursa">Bursa</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Çankırı">Çankırı</option>
        <option value="Çorum">Çorum</option>
        <option value="Denizli">Denizli</option>
        <option value="Diyarbakır">Diyarbakır</option>
        <option value="Edirne">Edirne</option>
        <option value="Elazığ">Elazığ</option>
        <option value="Erzincan">Erzincan</option>
        <option value="Erzurum">Erzurum</option>
        <option value="Eskişehir">Eskişehir</option>
        <option value="Gaziantep">Gaziantep</option>
        <option value="Giresun">Giresun</option>
        <option value="Gümüşhane">Gümüşhane</option>
        <option value="Hakkâri">Hakkâri</option>
        <option value="Hatay">Hatay</option>
        <option value="Isparta">Isparta</option>
        <option value="Mersin">Mersin</option>
        <option value="İstanbul">İstanbul</option>
        <option value="İzmir">İzmir</option>
        <option value="Kars">Kars</option>
        <option value="Kastamonu">Kastamonu</option>
        <option value="Kayseri">Kayseri</option>
        <option value="Kırklareli">Kırklareli</option>
        <option value="Kırşehir">Kırşehir</option>
        <option value="Kocaeli">Kocaeli</option>
        <option value="Konya">Konya</option>
        <option value="Kütahya">Kütahya</option>
        <option value="Malatya">Malatya</option>
        <option value="Manisa">Manisa</option>
        <option value="Kahramanmaraş">Kahramanmaraş</option>
        <option value="Mardin">Mardin</option>
        <option value="Muğla">Muğla</option>
        <option value="Muş">Muş</option>
        <option value="Nevşehir">Nevşehir</option>
        <option value="Niğde">Niğde</option>
        <option value="Ordu">Ordu</option>
        <option value="Rize">Rize</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Samsun">Samsun</option>
        <option value="Siirt">Siirt</option>
        <option value="Sinop">Sinop</option>
        <option value="Sivas">Sivas</option>
        <option value="Tekirdağ">Tekirdağ</option>
        <option value="Tokat">Tokat</option>
        <option value="Trabzon">Trabzon</option>
        <option value="Tunceli">Tunceli</option>
        <option value="Şanlıurfa">Şanlıurfa</option>
        <option value="Uşak">Uşak</option>
        <option value="Van">Van</option>
        <option value="Yozgat">Yozgat</option>
        <option value="Zonguldak">Zonguldak</option>
        <option value="Aksaray">Aksaray</option>
        <option value="Bayburt">Bayburt</option>
        <option value="Karaman">Karaman</option>
        <option value="Kırıkkale">Kırıkkale</option>
        <option value="Batman">Batman</option>
        <option value="Şırnak">Şırnak</option>
        <option value="Bartın">Bartın</option>
        <option value="Ardahan">Ardahan</option>
        <option value="Iğdır">Iğdır</option>
        <option value="Yalova">Yalova</option>
        <option value="Karabük">Karabük</option>
        <option value="Kilis">Kilis</option>
        <option value="Osmaniye">Osmaniye</option>
        <option value="Düzce">Düzce</option>
    </select>
<!-- hastanelerin eklenmesi -->
    <select name="hastane" class="hastane">
        <option value="hastane">Hastane Seçin</option>
        <option value="Acıbadem Hastanesi">Acıbadem Hastanesi</option>
        <option value="Bölge Eğitim ve Araştırma Hastanesi">Bölge Eğitim ve Araştırma Hastanesi</option>
        <option value="Akdamar Hastanesi">Akdamar Hastanesi</option>
        <option value="Şifa Hastanesi">Şifa Hastanesi</option>
        <option value="Yaşam Hastanesi">Yaşam Hastanesi</option>
        <option value="Sağlık Merkezi Hastanesi">Sağlık Merkezi Hastanesi</option>
        <option value="Nil Tıp Merkezi">Nil Tıp Merkezi</option>
        <option value="Sema Hastanesi">Sema Hastanesi</option>
        <option value="Meltem Hastanesi">Meltem Hastanesi</option>
        <option value="Deniz Tıp Merkezi">Deniz Tıp Merkezi</option>
        <option value="Yıldız Hastanesi">Yıldız Hastanesi</option>
        <option value="Esenlik Tıp Merkezi">Esenlik Tıp Merkezi</option>
        <option value="Özgür Hastanesi">Özgür Hastanesi</option>
        <option value="Sıhhat Medikal Merkezi">Sıhhat Medikal Merkezi</option>
        <option value="Medplus Tıp Merkezi">Medplus Tıp Merkezi</option>
        <option value="Sağlık Vadisi Hastanesi">Sağlık Vadisi Hastanesi</option>
        <option value="Fatih Devlet Hastanesi">Fatih Devlet Hastanesi</option>
        <option value="Şişli Etfal Hastanesi">Şişli Etfal Hastanesi</option>
        <option value="Berhayat Hastanesi">Berhayat Hastanesi</option>
        <option value="Pendik Devlet Hastanesi">Pendik Devlet Hastanesi</option>
        <option value="Bursa Şehir Hastanesi">Bursa Şehir Hastanesi</option>
        <option value="Edirnekapı Araştırma Hastanesi">Edirnekapı Araştırma Hastanesi</option>
        <option value="Şevket Candal Eğitim ve Araştırma Hastanesi">Şevket Candal Eğitim ve Araştırma Hastanesi</option>
        <option value="Medipol Hastanesi">Medipol Hastanesi</option>

    </select>
<!-- kliniklerin eklenmesi -->
<select name="klinik" class="klinik">
        <option value="klinik">Klinik Seçin</option>
        <option value="Dahiliye Polikliniği">Dahiliye Polikliniği</option>
        <option value="Göz Polikliniği">Göz Polikliniği</option>
        <option value="Kulak Burun Boğaz Polikliniği">Kulak Burun Boğaz Polikliniği</option>
        <option value="Dermatoloji Polikliniği">Dermatoloji Polikliniği</option>
        <option value="Kadın Hastalıkları ve Doğum Polikliniği">Kadın Hastalıkları ve Doğum Polikliniği</option>
        <option value="Ortopedi Polikliniği">Ortopedi Polikliniği</option>
        <option value="Üroloji Polikliniği">Üroloji Polikliniği</option>
        <option value="Nöroloji Polikliniği">Nöroloji Polikliniği</option>
        <option value="Kardiyoloji Polikliniği">Kardiyoloji Polikliniği</option>
        <option value="Radyoloji Polikliniği">Radyoloji Polikliniği</option>
        <option value="Genel Cerrahi Polikliniği">Genel Cerrahi Polikliniği</option>
        <option value="Pediatri Polikliniği">Pediatri Polikliniği</option>
        <option value="Enfeksiyon Hastalıkları Polikliniği">Enfeksiyon Hastalıkları Polikliniği</option>
        <option value="Fizik Tedavi ve Rehabilitasyon Polikliniği">Fizik Tedavi ve Rehabilitasyon Polikliniği</option>
        <option value="Gastroenteroloji Polikliniği">Gastroenteroloji Polikliniği</option>
        <option value="Plastik Cerrahi Polikliniği">Plastik Cerrahi Polikliniği</option>
        <option value="Psikiyatri Polikliniği">Psikiyatri Polikliniği</option>
        <option value="Göğüs Hastalıkları Polikliniği">Göğüs Hastalıkları Polikliniği</option>
        <option value="Endokrinoloji Polikliniği">Endokrinoloji Polikliniği</option>
        <option value="Hematoloji Polikliniği">Hematoloji Polikliniği</option>
        <option value="KBB Polikliniği">KBB Polikliniği</option>
        <option value="Göğüs Cerrahisi Polikliniği">Göğüs Cerrahisi Polikliniği</option>
        <option value="Nefroloji Polikliniği">Nefroloji Polikliniği</option>
        <option value="Onkoloji Polikliniği">Onkoloji Polikliniği</option>
        <option value="Klinik Mikrobiyoloji Polikliniği">Klinik Mikrobiyoloji Polikliniği</option>
        <option value="Oftalmoloji Polikliniği">Oftalmoloji Polikliniği</option>
        <option value="Diş Polikliniği">Diş Polikliniği</option>
        <option value="Kadın Hastalıkları ve Doğum Polikliniği">Kadın Hastalıkları ve Doğum Polikliniği</option>
        <option value="Nöroloji Polikliniği">Nöroloji Polikliniği</option>
        <option value="Dermatoloji Polikliniği">Dermatoloji Polikliniği</option>
        <option value="Genel Cerrahi Polikliniği">Genel Cerrahi Polikliniği</option>
        <option value="Ortopedi Polikliniği">Ortopedi Polikliniği</option>
        <option value="Pediatri Polikliniği">Pediatri Polikliniği</option>
        <option value="Fizik Tedavi ve Rehabilitasyon Polikliniği">Fizik Tedavi ve Rehabilitasyon Polikliniği</option>
        <option value="Gastroenteroloji Polikliniği">Gastroenteroloji Polikliniği</option>
        <option value="Psikiyatri Polikliniği">Psikiyatri Polikliniği</option>
        <option value="Enfeksiyon Hastalıkları Polikliniği">Enfeksiyon Hastalıkları Polikliniği</option>
        <option value="KBB Polikliniği">KBB Polikliniği</option>
        <option value="Plastik Cerrahi Polikliniği">Plastik Cerrahi Polikliniği</option>
        <option value="Radyoloji Polikliniği">Radyoloji Polikliniği</option>
        <option value="Göğüs Hastalıkları Polikliniği">Göğüs Hastalıkları Polikliniği</option>
        <option value="Klinik Psikoloji Polikliniği">Klinik Psikoloji Polikliniği</option>
        <option value="İç Hastalıkları Polikliniği">İç Hastalıkları Polikliniği</option>

    </select>
<!-- doktorların eklenmesi -->
 <select name="doktor" class="doktor">
        <option value="doktor">Doktor Seçin</option>
        <option value="Dr.Esra Turgut">Dr.Esra Turgut</option>
        <option value="Dr.Muhammet Asem Aydin">Dr.Muhammet Asem Aydin</option>
        <option value="Dr.Ömer Faruk Yangıncı">Dr.Ömer Faruk Yangıncı</option>
        <option value="Dr.Ayazbey Yaka">Dr.Ayazbey Yaka</option>
        <option value="Dr.Yunus Emre Bilgin">Dr.Yunus Emre Bilgin</option>
        <option value="Dr.Kerem Önal">Dr.Kerem Önal</option>
        <option value="Dr.Emir Kaan Uzun">Dr.Emir Kaan Uzun</option>
        <option value="Dr.Ahmet Işık">Dr.Ahmet Işık</option>
        <option value="Dr.Mustafa Balaban">Dr.Mustafa Balaban</option>
        <option value="Dr.Muhammet Ali Kerdiğe">Dr.Muhammet Ali Kerdiğge</option>
        <option value="Dr.Şervan Erkan">Dr.Şervan Erkan</option>
        <option value="Dr.Elif Sıla Kuyucu">Dr.Elif Sıla Kuyucu</option>
        <option value="Dr. Ahmet Yılmaz">Dr. Ahmet Yılmaz</option>
        <option value="Dr. Ayşe Kaya">Dr. Ayşe Kaya</option>
        <option value="Dr. Mehmet Demir">Dr. Mehmet Demir</option>
        <option value="Dr. Elif Öztürk">Dr. Elif Öztürk</option>
        <option value="Dr. Ali Güneş">Dr. Ali Güneş</option>
        <option value="Dr. Fatma Çelik">Dr. Fatma Çelik</option>
        <option value="Dr. Hasan Aksoy">Dr. Hasan Aksoy</option>
        <option value="Dr. Zeynep Özdemir">Dr. Zeynep Özdemir</option>
        <option value="Dr. Emre Kılıç">Dr. Emre Kılıç</option>
        <option value="Dr. Esra Kaya">Dr. Esra Kaya</option>
        <option value="Dr. Mustafa Arslan">Dr. Mustafa Arslan</option>
        <option value="Dr. Selin Başaran">Dr. Selin Başaran</option>
        <option value="Dr. İbrahim Demir">Dr. İbrahim Demir</option>
        <option value="Dr. Nilay Yıldız">Dr. Nilay Yıldız</option>
        <option value="Dr. Cemal Durmuş">Dr. Cemal Durmuş</option>
        <option value="Dr. Aysel Aydın">Dr. Aysel Aydın</option>
        <option value="Dr. Murat Yılmaz">Dr. Murat Yılmaz</option>
        <option value="Dr. Şule Akın">Dr. Şule Akın</option>
        <option value="Dr. Hakan Özcan">Dr. Hakan Özcan</option>
        <option value="Dr. Aylin Öztürk">Dr. Aylin Öztürk</option>
        <option value="Dr. Emine Yıldırım">Dr. Emine Yıldırım</option>
        <option value="Dr. Serkan Güler">Dr. Serkan Güler</option>
        <option value="Dr. Ebru Durmaz">Dr. Ebru Durmaz</option>
        <option value="Dr. Volkan Korkmaz">Dr. Volkan Korkmaz</option>
        <option value="Dr. Şeyma Doğan">Dr. Şeyma Doğan</option>
        <option value="Dr. İsmail Çelik">Dr. İsmail Çelik</option>
        <option value="Dr. Nazlı Yılmaz">Dr. Nazlı Yılmaz</option>
        <option value="Dr. Eren Şahin">Dr. Eren Şahin</option>
        <option value="Dr. Gizem Yıldız">Dr. Gizem Yıldız</option>
        <option value="Dr. Ahmet Aydın">Dr. Ahmet Aydın</option>

     </select>
<!-- randevu kısmı ile bağlantı -->
     <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">

     <button name="randevu_kaydet">Randevu Kaydet</button>
      
     </form>

    </div>

<div class="orta_div" id="ailehekimi_div" >
    <h3>Aile Hekimi</h3>
    <p>
        Aile Hekiminize Ait Bir Çalışma Saati Bulunmamıştır.
    </p>
</div>
</body>
</html>