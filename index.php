<!DOCTYPE html>
<html>
  <head>
    <title>Conexion Prolog con PHP</title>
    <style>
    table, td, th {
      border: 1px solid black;
      border-collapse: collapse;
    }
    </style>
  </head>
  <body>
    <div style="background-color: #DBE9EE;
            box-sizing: border-box;
            padding: 40px;
            text-align: center;
            width: 100%;
            height: 250px;
            position: relative;
            top: 50px;
            ">
      <table style="width: 100%;">
        <tr>
          <th>Hechos</th>
          <th>Reglas</th>
          <th>Significado</th>
        </tr>
        <tr>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "fact0." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "predicate0." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            Es millonario?
          </td>
        </tr>
        <tr>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "fact1." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "predicate0." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            Es millonario?
          </td>
        </tr>
        <tr>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "fact2." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            <?php 
            $output =`swipl -s corte.pl -g "predicate0." -t halt.`;
            echo $output;
            ?>
          </td>
          <td>
            Es millonario?
          </td>
        </tr>
      </table>
      <form method="GET" >
       <input type="text" name = "inputForm" id = "inputForm" class = "inputForm"/>
       <input type="submit">
      </form>
      <textarea readonly style="height: 50%">
      <?php 
      if($_GET == null){
        echo "";
      }else{
          echo $_GET["inputForm"]." Result: ";
          $var = $_GET["inputForm"];
          $output = exec('swipl -s corte.pl -g "'.$var.'" -t halt.');
          if ($output == false && $_GET != null) {
          echo "false";
        }else {
          echo $output;   
        }
     }
      ?>
      </textarea>
    </div>
  </body>
</html>
