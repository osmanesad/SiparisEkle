<html>
<head>

<style>


h1{

font-family: "Calibri", Times, serif;
font-size: 36px;
}



h2{
  font-family: "Calibri", Times, serif;
  font-size: 46px;

}



.button {
    background-color: #FF8000; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 46px;
    margin: 4px 2px;
    cursor: pointer;
}



input[type=text], select {
  width: 100%;
  padding: 36px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 36px;}

  input[type=date], select {
    width: 100%;
    padding: 36px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 36px;}

  input[name="okul_adi"] {
    width: 100%;
    padding: 36px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 36px;}
  }
  input::-webkit-calendar-picker-indicator {
  /*   display: none; */
  }



</style>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sipariş Ekle</title>



<style type="text/css">
</style>
</head>







<body>




<h2>Sipariş Ekle</h2>



<form method="post" action="">


<input list="browsers" name="okul_adi" placeholder="Okullar">

    <datalist id="browsers">
      <option value="Ahmet Yesevi">
      <option value="Aşık Veysel">
      <option value="Zeki Obdan">
      <option value="Cemal Reşit Rey">
      <option value="Suatlar">
      <option value="Ayazma">
    </datalist>

<p>
 <h1>Kişi Adı</h1>
 <input type="text" name="kisi_adi">
</p>


<p>
  <h1>Siparis</h1>
  <input type="text" name="siparis">
</p>

<p>
  <h1>Siparis Sayisi</h1>
  <input type="text" name="siparis_sayisi">
</p>

<p>
  <h1>Siparis Tutari</h1>
  <input type="text" name="siparis_tutari">
</p>

<p>
  <h1>Siparis Notu</h1>
  <input type="text" name="siparis_notu">
</p>

<p>
  <h1>Siparis Tarihi</h1>
  <input type="date" name="siparis_tarihi">
</p>

<center>
<input type="submit" class="button" value="siparis_ekle">
</center>
</form>

<form method="get" action="insert.php">
  <center>
  <input type="submit" class="button" value="Listele">
  </center>

</form>




</body>
</html>
