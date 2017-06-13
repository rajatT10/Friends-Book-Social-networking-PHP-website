<table width="30%" border="1">
  <tr>
    <td width="35%" rowspan="5" valign="top"><img src='<?php echo "users/$uid.jpg";?>' width=100 height=120/></td>
    <td width="32%"><strong>Uid</strong></td>
    <td width="33%"><?php echo $uid;?></td>
  </tr>
  <tr>
    <td><strong>Uname</strong></td>
    <td><?php echo $uname;?></td>
  </tr>
  <tr>
    <td><strong>Age</strong></td>
    <td><?php echo $age;?></td>
  </tr>
  <tr>
    <td><strong>Gender</strong></td>
    <td><?php echo $gen;?></td>
  </tr>
  <tr>
    <td><strong>City</strong></td>
    <td><?php echo $city;?></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><a href="home.php?rid=<?php echo $uid;?>">Add Friend</a> <a href="#">Cancel</a></div></td>
  </tr>
</table>






