<?php
require_once('config.php');
include('asset/recaptcha/autoload.php');

class sec {
  private function reg($user,$pass,$mail) {
    global $sql;
    $pass = $sql->real_escape_string($pass);
    $user = $sql->real_escape_string($user);
    $mail = $sql->real_escape_string($mail);
    $hpass = password_hash($pass, PASSWORD_BCRYPT);
    if($sql->query("INSERT INTO `users` ('user', 'pass', 'mail') VALUES ('$user', '$hpass', '$mail')"))
      return true;
    else
      return false;
  }
  
  public function gentoken() {
    $token = rand(0,9).rand(0,9).rand(0,9).time().rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    return md5($token);
  }
  
  public function updatetoken($user, $token) {
    global $sql;
    if($sql->query("UPDATE `users` SET `token`='$token' WHERE `user`='$user'"))
      return true;
    else
      return false;
  }
  
  public function checktoken($token, $user) {
    global $sql;
    $data = $sql->query("select * from `users` where `user`='$user'");
    if($data->num_rows == 1) {
      $row = $data->fetch_object();
      if($token === $row->token)
        return true;
      else
        return false;
    }
    else
      return false;
  }
  
  public function login($user, $pass) {
    global $sql;
    $data = $sql->query("select * from `users` where `user`='$user'");
    // die("select * from `users` where `user`='$user'");
    if($data->num_rows == 1) {
      $row = $data->fetch_object();
      if(password_verify($pass, $row->pass)) {
        $data1 = $sql->query("select * from users where `user`='$user'");
        if($data1->num_rows == 1) {
            return true;
        }
        else
          return false;
      }
      else
        return false;
    }
    else
      return false;
  }
}

class site {
  public function manufacutre () {
    global $sql;
    $a = "";
    $data = $sql->query("select * from `manufacturer`");
    while($row = $data->fetch_object()) {
      $a .= "<option value='".$row->id."'>".$row->marca."</option>";
    }
    return $a;
  }
  public function model ($id) {
    global $sql;
    $a = "";
    $data = $sql->query("select * from `models` where `id`='$id'");
    while($row = $data->fetch_object()) {
      $a .= "<option value='".$row->uid."'>".$row->model."</option>";
    }
    return $a;
  }
  public function convert($num) {
    switch($num) {
      case "1":
        return "<span class='text-sunny'>YELLOW</span>";
        break;
      case "2":
        return "<span class='text-sky'>BLUE</span>";
        break;
      case "3":
        return "<span class='text-danger'>RED</span>";
        break;
      case "4":
        return "<span class='text-success'>GREEN</span>";
        break;
      case "0":
        return "<span class='text-muted'>-</span>";
        break;
    }
  }
  public function result($id) {
    global $sql;
    $data = $sql->query("select * from `models` where `uid`='$id'");
    $row = $data->fetch_object();
    $a = "
	<div class='table-responsive results-padding'>
		<table class='table table-sm result1 tabel-rezultat'>
		  <thead>
            <tr>
              <td class='text-center header-tabel' colspan='7'><b>Optimal Car Builds</b></td>
            </tr>
			<tr class='font-mic'>
			  <td class='text-center border-down-title'><i class='fas fa-angle-double-down'></i> &nbsp; Set Names &nbsp; <i class='fas fa-angle-double-down'></i></td>
			  <td class='text-center border-down-title'>Engine</td>
			  <td class='text-center border-down-title'>Force Induction</td>
			  <td class='text-center border-down-title'>Transmission</td>
			  <td class='text-center border-down-title'>Suspensions</td>
			  <td class='text-center border-down-title'>Brakes</td>
			  <td class='text-center border-down-title'>Tires</td>
			</tr>
		  </thead>
		  <tbody>
			<tr class='color-impar'>
			  <td class='text-center'>Grip Set 1</td>
			  <td class='text-center'>".$this->convert($row->engine1)."</td>
			  <td class='text-center'>".$this->convert($row->forceinduction1)."</td>
			  <td class='text-center'>".$this->convert($row->transmission1)."</td>
			  <td class='text-center'>".$this->convert($row->suspensions1)."</td>
			  <td class='text-center'>".$this->convert($row->brakes1)."</td>
			  <td class='text-center'>".$this->convert($row->tires1)."</td>
			</tr>
			<tr class='color-par'>
			  <td class='text-center'>Grip Set 2</td>
			  <td class='text-center'>".$this->convert($row->engine2)."</td>
			  <td class='text-center'>".$this->convert($row->forceinduction2)."</td>
			  <td class='text-center'>".$this->convert($row->transmission2)."</td>
			  <td class='text-center'>".$this->convert($row->suspensions2)."</td>
			  <td class='text-center'>".$this->convert($row->brakes2)."</td>
			  <td class='text-center'>".$this->convert($row->tires2)."</td>
			</tr>
			<tr class='color-impar'>
			  <td class='text-center'>Drag Racing</td>
			  <td class='text-center'>".$this->convert($row->engine1)."</td>
			  <td class='text-center'>".$this->convert($row->forceinduction1)."</td>
			  <td class='text-center'>".$this->convert($row->transmission1)."</td>
			  <td class='text-center'><span class='text-sky'>BLUE</span></td>
			  <td class='text-center'><span class='text-danger'>RED</span></td>
			  <td class='text-center'><span class='text-sky'>BLUE</span></td>
			</tr>
			<tr class='color-par'>
			  <td class='text-center bottom-border-left'>Team Escape / Pursuit</td>
			  <td class='text-center'>".$this->convert($row->engine1)."</td>
			  <td class='text-center'>".$this->convert($row->forceinduction1)."</td>
			  <td class='text-center'><span class='text-sky'>BLUE</span></td>
			  <td class='text-center'>".$this->convert($row->suspensions1)."</td>
			  <td class='text-center'>".$this->convert($row->brakes1)."</td>
			  <td class='text-center bottom-border-right'><span class='text-sky'>BLUE</span></td>
			</tr>
		  </tbody>
		</table>
	</div>";
    return $a;
  }
}