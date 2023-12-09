<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";

// Custom style for the form
echo "<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        flex-direction: column; /* Stack items vertically */
    }
    h3 {
        color: #333333; /* Dark gray text */
        margin-bottom: 10px; /* Add some space below the heading */
    }
    form {
        background-color: #ffffff; /* White background for the form */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px #888888; /* Gray shadow */
        width: 300px; /* Set a fixed width for the form */
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #555555; /* Gray text for labels */
    }
    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 12px;
        box-sizing: border-box;
    }
    input[type=\"submit\"] {
        background-color: #4CAF50; /* Green submit button */
        color: white;
        cursor: pointer;
    }
</style>";

echo "<h3>Silahkan isi form berikut ini :</h3>";

$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

$form->displayForm();

echo "</body></html>";
?>
