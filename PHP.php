
<link rel='stylesheet' href='css.css' />

<?php


 $db_host = "localhost";
 $db_user = "user_6";
 $db_password = "123456789";
 $db_name = "week6";

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);


  
if(mysqli_connect_error())
{
    echo mysqli_connect_error();
    exit;
}
?>
<?php
//--CLASS--
//--PUBLIC--
//--CONSTANT--
//--FUNCTION--
class HELLO {
  const const = "<h1>UNIVERSITY RANKINGS</h1>";
  
  public function solay() {
    echo self::const;
  }
}

$constanta = new HELLO();
$constanta->solay();

?>



<?php
//--FINAL CLASS--
//--PUBLIC--
//--FUNCTIONS GET AND SET--
//--OBJECT--
Final class Participants {
  
  public $name;
public $color;

 
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  
}

$participants1 = new Participants();
$participants2 = new Participants();
$participants1->set_name('Amirzhan');
$participants2->set_name('Talgat');
echo "Student's Name: " . $participants1->get_name();
echo "<br>";
echo "Teacher's Name: " . $participants2->get_name();
echo "<br>";
echo "<br>";
?>

<?php
//--CLASS--
//--STATIC FUNCTION--
//--PUBLIC--
class MoiRank {
  public static function ranki() {
    echo "<h3>Here You can see university ratings in three different world rankings:</h3>";
  }
}

MoiRank::ranki();
?>

<?php
//--CLASS--
//--PRIVATE--
//--CONSTRUCTOR--
//--INHERITENCE--
//--FUNCTION--
//--PROTECTED--
      class Data
      {
        private $name;
        private $info;
        
        function __construct($name, $info)
        {
          $this->name = $name;
          $this->info = $info;
          
        }

        public function textus()
        {
          echo "Rank {$this->name} {$this -> info}.";
        }

        protected function textus2()
        {
          echo "Rank {$this->name}{$this -> info}.";
          echo "<br>";
         
        }
      }
      class Rank extends Data
      {
        function textus()
        {
          echo "<br>";
          echo $this -> textus2();
          echo "<br>";
          
        
        }
      }
    ?>
    <?php
      $Rank1 = new Rank("ARWU", " ranks universities by the number of Nobel and Fields prizes among graduates and teachers. It also takes into account prestigious scientific articles and major research.");
  
      $Rank1 -> textus();
      $Rank2 = new Rank("RUR", " uses the maximum number of individual metrics for ratings, 20 parameters. Another feature is that the criteria for “teaching” and “research” are evaluated equally, at 40% each.");
      
      $Rank2 -> textus();
      $Rank3 = new Rank("RankPro", " is the most mysterious of all ratings, as its methodology is not disclosed.");
      
      $Rank3 -> textus();
    ?>

<?php
//--CLASS--
//--PUBLIC--
//--STATIC PROPERTY--
//--FUNCTION--
class ranks {
  public static $three="<h3>*Please, click on the rating You want to see*</h3>";
  public function staticValue() {
    return self::$three;
  }
}

$ranks = new ranks();
echo $ranks->staticValue();
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="submit" name="ranking1" value="ARWU">
<input type="submit" name="ranking2" value="RUR"> 
<input type="submit" name="ranking3" value="RankPro">

</form>


<?php if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['ranking1'])){
 $ddd = "SELECT * FROM `table6` ORDER BY `table6`.`ARWU` DESC";
 $ttt = "SELECT * from `place` ORDER BY `place`.`Place` asc";
 $result = mysqli_query($connect, $ddd);
 $resultt = mysqli_query($connect, $ttt);

 if(mysqli_num_rows($result) > 0){
 if(mysqli_num_rows($resultt) > 0)
{
     "<br>";
    echo "<table>";
        echo "<tr>";
        echo "<th>Place</th>";
        echo "<th>University</th>";
        echo "<th>ARWU</th>";
        echo "<th>RUR</th>";
        echo "<th>RankPro</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result) and $now = mysqli_fetch_array($resultt)){
        echo "<tr>";
            echo "<td>" . $now['Place'] . "</td>";
            echo "<td>" . $row['University'] . "</td>";
            echo "<td>" . $row['ARWU'] . "</td>";
            echo "<td>" . $row['RUR'] . "</td>";
            echo "<td>" . $row['RankPro'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    
    
}
 }
} 
 else if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['ranking2'])){
    $ddd1 = "SELECT * FROM `table6` ORDER BY `table6`.`RUR` DESC";
    $ttt1 = "SELECT * from `place` ORDER BY `place`.`Place` asc";
    $result = mysqli_query($connect, $ddd1);
    $resultt = mysqli_query($connect, $ttt1);
    if(mysqli_num_rows($result) > 0){
        if(mysqli_num_rows($resultt) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Place</th>";
                echo "<th>University</th>";
                echo "<th>ARWU</th>";
                echo "<th>RUR</th>";
                echo "<th>RankPro</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result) and $now = mysqli_fetch_array($resultt)){
            echo "<tr>";
                echo "<td>" . $now['Place'] . "</td>";
                echo "<td>" . $row['University'] . "</td>";
                echo "<td>" . $row['ARWU'] . "</td>";
                echo "<td>" . $row['RUR'] . "</td>";
                echo "<td>" . $row['RankPro'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
       
   
    } 
}
 }
else if(($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['ranking3']))){
    $ddd2 = "SELECT * FROM `table6` ORDER BY `table6`.`RankPro` DESC";
    $ttt2 = "SELECT * from `place` ORDER BY `place`.`Place` asc";
    $result = mysqli_query($connect, $ddd2);
    $resultt = mysqli_query($connect, $ttt2);
    if(mysqli_num_rows($result) > 0){
        if(mysqli_num_rows($resultt) > 0){
        echo "<table>";
            echo "<tr>";
            echo "<th>Place</th>";
            echo "<th>University</th>";
            echo "<th>ARWU</th>";
            echo "<th>RUR</th>";
            echo "<th>RankPro</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result) and $now = mysqli_fetch_array($resultt)){
            echo "<tr>";
                echo "<td>" . $now['Place'] . "</td>";
                echo "<td>" . $row['University'] . "</td>";
                echo "<td>" . $row['ARWU'] . "</td>";
                echo "<td>" . $row['RUR'] . "</td>";
                echo "<td>" . $row['RankPro'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        
    }else{
        echo "Something went wrong";
    }
} 
}
?>
<?php 
//--CLASS--
//--ABSTRACT CLASS--
//--FUNCTION--
//--INHERITENCE--
//--FINAL CLASS--
//--PUBLIC--
//--FINAL FUNCTION--
abstract class thanks
{
	public function SayMo() {
		return '<a href="https://www.cicerobook.com/userfiles/files/RankPro%202019-2020%20Americas%20TOP.pdf" style="color: white; font-size:20px">CICEROBOOK.COM</a>';
	}
	abstract public function Say1();
}

class secondthanks extends thanks
{
	public function Say1() {
		return '<a href="https://roundranking.com/ranking/world-university-rankings.html#world-2019" style="color: white; font-size:20px">ROUNDRANKING.COM</a>';
	}
}

class thirdthanks extends thanks
{
	final public function Say1() {
		return '<a href="http://www.shanghairanking.com/ARWU2019.html" style="color: white; font-size:20px">SHANGHAIRANKING.COM</a>';
	}
}
$second = new secondthanks;
$third = new thirdthanks;
echo "<br>";
echo '<h2>Information was taken from sources:</h2>';echo "<br>";echo $third->Say1(); 
echo "<br>";
echo $second->Say1();echo "<br>";
echo $second->SayMo();

?>

<?php
//--CLASS--
//--FUNCTION--
//--PUBLIC--
//--PRIVATE--
//--DESTRUCTOR--
      class Goodbye
      {
        private $texti;
       
        function __destruct()
        {
          echo "<h3>For contacting write here - </h3>{$this->texti} ";
        }

        public function set_texti($texti)
        {
          $this -> texti = $texti;
        }

      
      }
    ?>

    <?php
      $texti = new Goodbye();
      $texti -> set_texti('<a href="https://vk.com/king_jjulien" style="color: white; font-size:20px">Amirzhan Yerdossov</a>');
      
    ?>


