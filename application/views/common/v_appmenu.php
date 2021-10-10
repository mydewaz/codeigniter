<?php
echo anchor(site_url(),"Home","Back to the frontpage");
echo " | ".anchor("c_login","Login","Login form");
echo " | ".anchor("c_dbarcrud/showallrecord","Daftar Teman","List Of Teman");
echo " | ".anchor_popup("http://codeigniter.com/","Home of CodeIgniter","title='Popup to CodeIgniter Home'");
?>
<hr />