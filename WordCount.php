<?php // tag pembukaan skrip php 
//File : Wordcount.php
class Wordcount //deklarasi class WordCount 
{
    public function countWords($sentence)//deklarasi method count words dalam class wordcount yang menerima satu argumen $Sentence
    {
        return count(explode(" ",$sentence)); //fungsi explode memecah kalimat menjadi elemen elemen array lalu fungsi count untuk menghitung array yg di dapat dari explode 
    }
}
?> //tag tutup skrip php