# **Lab 10 Web**

```
Nama    : Nurul Akbar
NIM     : 312210413
Kelas   : TI.22.A4
```

## **Instruksi Praktikum**

1. Persiapkan text editor misalnya VSCode. 
2. Buat folder baru dengan nama lab10_php_oop pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya. 

## **Langkah Langkah Praktikum**

1. Buat file baru dengan nama `mobil.php`

```php
<?php
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna ($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna ()
    {
        echo "warna mobilnya : " . $this->warna;
    }
}

//membuat objek mobil
$a = new Mobil();
$b = new Mobil();

//memanggil objek
echo "<b>Mobil pertama </b><br>";
$a->tampilWarna();
echo "<br> Mobil pertama ganti warna <br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

//memanggil objek
echo "<br><b>Mobil kedua </b><br>";
$a->gantiWarna("Hijau");
$a->tampilWarna();
?>
```


[img](assets/2.png)

2. Buat file baru dengan nama `form.php`

```php
<?php
/**
* Nama Class: Form
* Deskripsi: CLass untuk membuat form inputan text sederhan
**/
class Form
{
    private $fields = array();
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function displayForm()
    {
        echo "<form action='".$this->action."' method = 'POST'>";
        echo '<table widht="100%" border="0">';
        for ($j=0; $j<count($this->fields);$j++){
            echo "<tr><td align='right'>".$this->fields[$j]['label']."</td>";
            echo "<td><input type='text' name='".$this->fields[$j]['name']."'></td?</tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='".$this->submit."'></td></tr>";
        echo "</table>";
    }

    public function addField($name, $label)
    {
        $this->fields [$this->jumField]['name'] = $name;
        $this->fields [$this->jumField]['label'] = $label;
        $this->jumField ++;
    }
}
?>
```
[img](assets/1.png)


3. Buat file baru dengan nama `form_input.php`

```php
<?php
/**
* Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
**/
include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
?>
```

4. Buat file dengan nama `database.php`

    Script :

```php
    <?php
    class Database {
        protected $host;
        protected $user;
        protected $password;
        protected $db_name;
        protected $conn;

        public function __construct() {
            $this->getConfig();
            $this->conn = new mysqli($this->host, $this->user, $this->password,
            $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

    private function getConfig() {
        include_once("config.php");
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    public function query($sql) {
        return $this->conn->query($sql);
    }

    public function get($table, $where=null) {
        if ($where) {
        $where = " WHERE ".$where;
        }
        $sql = "SELECT * FROM ".$table.$where;
        $sql = $this->conn->query($sql);
        $sql = $sql->fetch_assoc();
        return $sql;
    }

    public function insert($table, $data) {
        if (is_array($data)) {
            foreach($data as $key => $val) {
                $column[] = $key;
                $value[] = "'{$val}'";
        }
        $columns = implode(",", $column);
        $values = implode(",", $value);
    }
        $sql = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return $sql;
        } else {
            return false;
        }
    }

    public function update($table, $data, $where) {
        $update_value = "";
        if (is_array($data)) {
            foreach($data as $key => $val) {
                $update_value[] = "$key='{$val}'"
            }
            $update_value = implode(",", $update_value);
        }

        $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($table, $filter) {
        $sql = "DELETE FROM ".$table." ".$filter;
        $sql = $this->conn->query($sql);
        if ($sql == true) {
            return true;
        } else {
            return false;
        }
    }
    }
    ?>
```

[OUTPUT](assets/3.png)





