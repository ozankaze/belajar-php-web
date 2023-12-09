<?php require_once('header.php')?>

<br>

<main>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Tempat belajar programming.

<h2>Implode dan Explode</h2>

<?php

$pekerjaanImp = ["Designer", "Programmer", "Manager"];
$testingImp = implode(" - ", $pekerjaanImp);
echo $testingImp;

echo "<br>";

$pelajaranExp = "html,css,js,php";
$testingExp = explode(",", $pelajaranExp);
print_r($testingExp);

// implode() menggabungkan elemen-elemen array menjadi satu string dengan menggunakan delimiter.
// explode() memecah string menjadi array berdasarkan delimiter yang ditentukan.

?>

<h2>Fungsi Date</h2>

<?php

$selamatPagi = "Halo selamat pagi sekarang tanggal: ";
$time = date("d M Y");
echo "$selamatPagi $time";

?>

<h2>Trim dan strip tags</h2>

<?php

$text = "   Contoh teks dengan spasi ekstra   ";
echo trim($text); // Output: "Contoh teks dengan spasi ekstra"

echo"<br>";

$html = "<p>Ini adalah <b>teks</b> dengan <a href='#'>tag</a> HTML.</p>";
echo strip_tags($html); // Output: "Ini adalah teks dengan tag HTML."

// trim() menghapus spasi atau karakter tertentu dari awal dan akhir string.
// strip_tags() menghapus semua tag HTML dan PHP dari string, meninggalkan teks biasa.

?>

</main>

<br>

<!-- include akan memproduksi error warning, yang mana kode program selanjutnya masih akan tetap dieksekusi. 
Sedangkan require akan memproduksi fatal error yang akan memberhentikan alur kerja program yang artinya kode program selanjutnya tidak akan pernah dieksekusi -->

<?php include('footer.php')?>

