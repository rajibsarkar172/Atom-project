<table width="350" style="border: 1px solid gray;">
    <tr style="border: 1px solid gray;">
        <th colspan="2" style="background-color: gray; padding: 12px 0 0; color: white;"><h3><u>New Password</u></h3></th>
    </tr>
    <tr style="border: 1px solid gray;">
        <th align="left" width="115">Email Address: </th>
        <td width="250"><?php echo $email?></td>
    </tr>
    <tr>
        <th align="left">New Password: </th>
        <td><?php echo $new_password?></td>
        <th align="left">Re type Password: </th>
        <td><?php echo $new_password?></td>
    </tr>
    <tr>
        <th align="left"></th>
        <td><a href="<?php echo base_url();?>login">Login</a></td>
    </tr>
</table>