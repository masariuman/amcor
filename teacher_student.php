<h4>STUDENTS INFO</h4>
<hr>

<table border="4px" BORDERCOLOR="#852222">
            <tr>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NO</font>
              </td>
              <!-- <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">USERNAME</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">PASSWORD</font>
              </td> -->
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NAMA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">ALAMAT TETAP</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">ALAMAT SEKARANG</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">TEMPAT LAHIR</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">TANGGAL LAHIR</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">JENIS KELAMIN</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">AGAMA</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">NOMOR HP</font>
              </td>
              <td style="padding: 6px 10px;" valign='center' align='center' bgcolor="#d559a8">
                <font color="white">EMAIL</font>
              </td>
            </tr>
            <tr>

            <?php
            $x=1;
            while($data7 = mysqli_fetch_array($hasil7)){
              echo"
                <tr>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$x</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[2]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[3]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[4]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[5]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[6]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[7]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[8]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[9]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[10]</td>";
                echo"</tr>";
              $x++;
            } ?>
            <!-- <td align='center' style='padding: 6px 10px;' valign='center'>$data7[0]</td>
                  <td align='center' style='padding: 6px 10px;' valign='center'>$data7[1]</td> -->

            </tr>
          </table>