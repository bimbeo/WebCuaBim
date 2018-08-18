<?php include "includes/header.php" ?>
<?php require_once("includes/connection.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "<h2> Chúc mừng bạn đã đăng ký thành công</h2>";
					}
	}
 
?>
	<form action="dang-ky.php" method="post">
	<fieldset>
	    <legend style="font-size: 200%;"> Đăng ký</legend>
	    	<table>
	    		<tr>
	    			<td>Username: </td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password: </td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
				<td>Họ Tên: </td>
				<td><input type="text" id="name" name="name" size="30"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" id="email" name="email" size=30></td>
			</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng ký"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
		
	</form>
<?php include "includes/footer.php" ?>
	