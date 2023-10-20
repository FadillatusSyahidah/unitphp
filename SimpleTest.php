<?php // tag untuk pemulaan skrip php
//Path to run <?php
//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php //perintah yang akan di jalankan di terminal untuk menjalankan phpunit
//Butuh Framework phpunit
use PHPUnit\Framework\TestCase; //mendeclare penggunaan class TestCase yang sudah di sediakan phpunit

//Class yang mau di test.
require_once "Wordcount.php"; // yang menguhubungkan file WordCount.php untuk di uji  

//Class untuk run testing.
class SimpleTest extends TestCase //deklarasi kelas SimpleTest yaitu turunan dari kelas TestCase yang sudah di siakan oleh phpunit
{
    public function testCountWords() //testCountWords adalah method pengujian yang akan dijalankan pada method countword,harus di mulai dengan kata test biar di anggap metode pengujian sama phpunit   
    {
        //kita pakai class yang mau di test.
        $Wc = new WordCount();//membuat instansi baru dari class WordCount

        //kita masukan parameter 4 kata, yang harusnya dapat output 4.
        $TestSentence = "My name is Joko"; //4 Kata // membuat String"my name is joko" menjadi nilai variabel $TestSentence 
        $Wordcount = $Wc->countWords($TestSentence);//manggil metode wordcount dari objek $Wc melewati $TestSentence method countword akan menghitung jlmh kata dlm kalimat lalu hasilnya akan di simpan di variabel $wordcount

        //Kita assert equal, ekspektasinya harus 4 , jika benar berarti word count berfungsi dengan baik.
        $this->assertEquals(4, $Wordcount);//menggunakan method assertequals yang sudah di sediakan php unit untuk menguji apakah dua nilai sama,dalam skenario ini memngharapkan nilai dari word count tsb merupakan 4 jadi kalau sama berarti test berhasil kalau tidak test tb dinyatakan gagal.
    }
}
?> //penutup skrip php 