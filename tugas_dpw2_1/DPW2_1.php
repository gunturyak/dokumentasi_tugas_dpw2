<?php

class Hewan 
{
    public $jumlah_kaki, $bisa_terbang;
}

class serigala extends Hewan
{
    function bersuara()
    {
        return "auuuu";
    }     
}

class anjing extends Hewan
{
    function bersuara()
    {
        return "guk guk";
    }
}

class harimau extends Hewan
{
    function bersuara()
    {
        return "roarr";
    }
}

class tekukur extends Hewan
{
    function bersuara()
    {
        return "kuk kuk";
    }
}

echo "Hewan <br>";
echo "<hr>";

//serigala
$Jinoras = new serigala;
$Jinoras-> jumlah_kaki = 4;
$Jinoras->bisa_terbang = "Tidak bisa terbang";

echo "Jinoras adalah serigala <br>"; 
echo "Punya kaki sebanyak : ".$Jinoras->jumlah_kaki."<br>";
echo $Jinoras->bisa_terbang."<br>";
echo "Suaranya : ".$Jinoras->bersuara()."<br>";

echo "<hr>";

//anjing
$Kegy = new anjing;
$Kegy-> jumlah_kaki = 4;
$Kegy->bisa_terbang = "Tidak bisa terbang";

echo "Kegy adalah anjing <br>"; 
echo "Punya kaki sebanyak : ".$Kegy->jumlah_kaki."<br>";
echo $Kegy->bisa_terbang."<br>";
echo "Suaranya : ".$Kegy->bersuara()."<br>";

echo "<hr>";

//harimau
$ehsan = new harimau;
$ehsan-> jumlah_kaki = 4;
$ehsan->bisa_terbang = "Tidak bisa terbang";

echo "ehsan adalah harimau <br>"; 
echo "Punya kaki sebanyak : ".$ehsan->jumlah_kaki."<br>";
echo $ehsan->bisa_terbang."<br>";
echo "Suaranya : ".$ehsan->bersuara()."<br>";

echo "<hr>";

//tekukur
$Bani = new tekukur;
$Bani-> jumlah_kaki = 2;
$Bani->bisa_terbang = "Bisa terbang";

echo "Bani adalah tekukur <br>"; 
echo "Punya kaki sebanyak : ".$Bani->jumlah_kaki."<br>";
echo $Bani->bisa_terbang."<br>";
echo "Suaranya : ".$Bani->bersuara()."<br>";

echo "<hr>";