<?php
    echo form_open_multipart('image_control/index');
    echo form_input('a_name','Animal Name');
    echo form_input('a_info','Animal Information');
    echo form_upload('userfile');
    echo form_submit('upload','Upload');
    echo form_close();
?>

<?php foreach ($images as $image){?>
<h1><?php echo $image['a_name'];?></h1>
<h1><?php echo $image['a_details'];?></h1>
<?php echo '<img src ="'. base_url().'images1/'.$image['a_photo'].'" >';}?>