








<h4>ADDING DATA</h4>
<hr>

<?php
	require("koneksi.php");
	if (isset ($_POST['kirim'])){
		$usernamee		= $_POST['usernamee'];
		$password  		= $_POST['password'];
		$nama			= $_POST['nama'];
		$alamat			= $_POST['alamat'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$nomor_hp		= $_POST['nomor_hp'];
		$emaill			= $_POST['emaill'];
		if (empty($usernamee) or empty ($password)){
			echo "<b style='color:red;'>USERNAME ATAU PASSWORD TIDAK BOLEH KOSONG</b><br><br>";
		}
		else {

			$querykirim="insert admin values ('$usernamee','$password','$nama','$alamat','$jenis_kelamin','$nomor_hp','$emaill')";
			$hasilkirim = mysqli_query($conn, $querykirim) or die(header("Location: admin_info_error.php"));
			echo "<b style='color:green;'>DATA BERHASIL DISIMPAN</b><br><br>";
		}
	}
?>



<form action="admin.php" method="post">
	<table border='0' style='border-collapse:collapse;' cellpadding='5' cellspacing='0'>

		<tr>
			<td style="padding: 6px 10px;" valign='center'>USERNAME : </td><td><input type="text" name="usernamee" style='width:150px;'></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>PASSWORD : </td><td><input type="text" name="password" style='width:150px;'></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>NAMA : </td><td><input type="text" name="nama" style='width:150px;'></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>ALAMAT : </td><td><input type="text" name="alamat" style='width:150px;'></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>JENIS KELAMIN : </td><td><select id="soflow"  name="jenis_kelamin">
            <option value="">-- Klik Untuk Memilih --</option>
            <option value="L">Male</option>
            <option value="P">Female</option>
            <option value="O">Other</option>
          </select></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>NOMOR HP : </td><td><input type="text" name="nomor_hp" style='width:150px;'></td>
		</tr>
		<tr>
			<td style="padding: 6px 10px;" valign='center'>EMAIL : </td><td><input type="text" name="emaill" style='width:150px;'></td>
		</tr>
	</table>
	<input type="submit" value='KIRIM' name='kirim'><input type="reset" name="reset" value="RESET">
</form>

<br><br><br>



<HR><br><br>
<h4>ADMIN INFO</h4>
<hr>

<table border="4px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NO</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">USERNAME</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PASSWORD</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NAMA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">ALAMAT</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">JENIS KELAMIN</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NOMOR HP</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">EMAIL</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">SETTING</font>
              </td>
            </tr>
            <tr>

            <?php
            $x=1;
            while($data7 = mysqli_fetch_array($hasil7)){
              echo"
                <tr>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$x</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[0]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[1]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[2]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[3]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[4]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[5]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[6]</td>
                  <td align='center' valign='center'>
						<a href='admin_info_edit.php?&edit&id=$data7[0]'>Edit</a>&nbsp;&nbsp;&nbsp;
						<a href='proses_delete_admin.php?&delete&id=$data7[0]'>Delete</a>
				</td>";
                echo"</tr>";
              $x++;
            } ?>

            </tr>
          </table>



