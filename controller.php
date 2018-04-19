<?php
require('function.php');
$site = new site();
$recaptcha = new \ReCaptcha\ReCaptcha("6LeEXlMUAAAAAOz-RWhv-tbFOohwOsPdTS8sPHex");
$action = $_REQUEST["action"];
switch($action) {
  case "first":
    $id = $_POST["manufacutre"];
    echo '<script type="text/javascript">
  $(document).ready(function() {
    $(".datas").on("submit",function (e)
    {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax(
        {
            type:"post",
            url:"controller.php",
            data:formData,
            success:function(result)
            {
              $("#main").html(result);
            }
        });
    });
  });
</script>';
    echo "
    <h2 class='text-center green-color header-mijloc'><b>Please Select The Model</b></h2>
	<div class='mijloc-model'>
		<form class='datas' action='' method='POST'>
		  <div class='form-group'>
            <p class='text-left green-color'>Click on the text below to select the model</p>
            <p></p>
			<select class='form-control fundal-lista' name='modelid'>
			  ".$site->model($id)."
			</select>
		  </div>
		  <div class='text-center'>
			<input type='hidden' name='action' value='result' />
			<button type='submit' class='btn btn-primary btn-raised btn-lg'>Show Build</button>
		  </div>
		</form>
	</div>
    ";
  break;
  case "result":
  $modelid = $_POST["modelid"];
    echo $site->result($modelid)."
    <div class='results-padding'>
        <table class='table table-sm result2 tabel-informatii'>
          <thead>
            <tr>
              <td class='text-center header-tabel-informatii' colspan='6'><b>Part Manufacturers</b></td>
            </tr>
            <tr class='font-mic-informatii'>
              <td class='text-center border-down-title-informatii'  colspan='2'><i class='fas fa-angle-double-down'></i> &nbsp; Rairity &nbsp; <i class='fas fa-angle-double-down'></i></td>
              <td class='text-center border-down-title-informatii'  colspan='4'><i class='fas fa-angle-double-down'></i> &nbsp; Colors For Each Manufacturer &nbsp; <i class='fas fa-angle-double-down'></i></td>
            </tr>
          </thead>
          <tbody>
            <tr class='color-impar-informatii'>
              <td class='text-center'>Street</td>
              <td class='text-center'><i class='fas fa-star text-sunny'></i></td>
              <td class='text-center text-sunny'>Amerikon Speedsystems</td>
              <td class='text-center text-sky'>Dawndraft</td>
              <td class='text-center text-danger'>Nova-T</td>
              <td class='text-center text-success'>Omnia Racegruppe</td>
            </tr>
            <tr class='color-par-informatii'>
              <td class='text-center'>Race</td>
              <td class='text-center'><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i></td>
              <td class='text-center text-sunny'>Gromlen</td>
              <td class='text-center text-sky'>Kestrel</td>
              <td class='text-center text-danger'>Richter</td>
              <td class='text-center text-success'>Norset</td>
            </tr>
            <tr class='color-impar-informatii'>
              <td class='text-center'>Pro</td>
              <td class='text-center'><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i></td>
              <td class='text-center text-sunny'>Medion</td>
              <td class='text-center text-sky'>Velocicom</td>
              <td class='text-center text-danger'>Ventura</td>
              <td class='text-center text-success'>Ursa Motorsport</td>
            </tr>
            <tr class='color-par-informatii'>
              <td class='text-center'>Ultra</td>
              <td class='text-center'><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i></td>
              <td class='text-center text-sunny'>Transtek</td>
              <td class='text-center text-sky'>Zero Tuning Mods</td>
              <td class='text-center text-danger'>Attack Motorsport</td>
              <td class='text-center text-success'>Speedsciens</td>
            </tr>
            <tr class='color-impar-informatii'>
              <td class='text-center'>Elite</td>
              <td class='text-center'><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i><i class='fas fa-star text-sunny'></i></td>
              <td class='text-center text-sunny'>Quartz Speed Packages</td>
              <td class='text-center text-sky'>Stick Motorsport</td>
              <td class='text-center text-danger'>Tear</td>
              <td class='text-center text-success'>Dynamo Aftermarket Kits</td>
            </tr>
          </tbody>
        </table>
    </div>
      ";
  break;
  case "login":
    $resp = $recaptcha->verify(@$_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if($resp->isSuccess()) {
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $sec = new sec();
      if($sec->login($user, $pass) == true) {
        $token = $sec->gentoken();
        $sec->updatetoken($user, $token);
        setcookie("user", $user, time()+(86400 * 99), "/");
        setcookie("token", $token, time()+(86400 * 99), "/");
        exit(header("Location: admin.php?stats=success&msg=".urlencode("Bine ai venit $user!")));
      }
      else
        exit(header("Location: index.php?stats=error&msg=".urlencode("Invalid Login")));
    }
    else
      exit(header("Location: index.php?stats=error&msg=".urlencode("Google Captcha Invalid")));
    break;
  default:
    echo "ERROR";
    exit();
    break;
}
?>