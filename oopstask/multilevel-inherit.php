
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS-Multilevelinherit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>



<body    style="background-image: linear-gradient(to right,whitesmoke,rgb(203, 253, 247 ),rgb(
    165, 254, 244 ));">

    <div class="container mt-md-6">
        <h3 class='text-center bg-info m-0 text-light p-1'>Multilevel Inheritance</h3>


        <?php
        class persondata
        {
            public $name = "Robbin";
            public $age = 23;
            public $city = "tirupur";
            public $gender = "male";
           

           public function perName()
           {
            echo "<table class='text-center mt-1 col-lg-12 p-1'>
            <thead class='bg-dark text-light'>
            <tr>
              <th>Name</th>
              <th>age</th>
              <th>city</th>
              <th>gender</th>
              <td>scl</td>
          <td>clg</td>
          <td>city_clg</td>
              </tr>
            </thead>
            <tr>
          <td>$this->name</td>
          <td> $this->age</td>
          <td>$this->city </td>
          <td>$this->gender</td>
          <td>$this->scl</td>
          <td>$this->clg</td>
          <td>$this->city_clg</td>
        </tr>
        <table>";

           }
        }

        class std_data extends persondata{
            public $name1 = "Dhilip";
            public $age1 = 22;
            public $city1 = "tirupur";
            public $gender = "male";
           

public $scl=2;
public $clg=1;
public $city_clg="erode";

public function stud_details()
{
    echo "<table class='text-center ml-4 col-lg-10 pr-10'>
  <tr>
  <td>$this->name1</td>
  <td> $this->age1</td>
  <td>$this->city1</td>
  <td>$this->gender</td>
  <td>$this->scl</td>
  <td>$this->clg</td>
  <td>$this->city_clg</td>
</tr>
</table>";

}

}

$std= new std_data();
$std->perName();
$std->stud_details();
?>
</body>
</html>
