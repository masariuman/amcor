<?php  
	
	if ($user === $data['username']) {
    	$nama = $data[2]; 
    	$alamat_tetap = $data[3];
    	$alamat_sekarang = $data[4];
    	$tempat_lahir = $data[5];
    	$tanggal_lahir = $data[6];
    	$jenis_kelamin = $data[7];
    	$agama = $data[8];
    	$no_hp = $data[9];
    	$email = $data[10];
	}

?>

<h4>BIODATA</h4>
<hr>

<table class="ui-widget-content ui-priority-primary ui-corner-all" border="0" cellpadding="0" cellspacing="8" align="center"><tbody><tr>
					<td></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">NAMA</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input type="text" value='<?php echo"$nama"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">ALAMAT TETAP</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><textarea rows='5' name='pesan' style='width:255px;' disabled><?php echo"$alamat_tetap"; ?></textarea></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">ALAMAT SEKARANG</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><textarea rows='5' name='pesan' style='width:255px;' disabled><?php echo"$alamat_sekarang"; ?></textarea></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">TEMPAT LAHIR</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input type="text" value='<?php echo"$tempat_lahir"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">TANGGAL LAHIR</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input type="text" value='<?php echo"$tanggal_lahir"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">JENIS KELAMIN</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input type="text" value='<?php echo"$jenis_kelamin"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">AGAMA</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input value='<?php echo"$agama"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">NO. TELEPON/HP</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input value='<?php echo"$no_hp"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr><tr>
					<td style="width:150px padding: 6px 10px;">EMAIL</td>
					<td style="width:15px padding: 6px 10px;">: </td>
					<td style="width:280px padding: 6px 10px;"><input value='<?php echo"$email"; ?>' style="padding: 6px 10px; width: 255px; text-align: left;" disabled></td>
				</tr></tbody></table>