<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI-NEWS</title>

	<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/bootstrap.min.css' >
</head>
<style>
    .date-edition{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .article-img img{
        width: 100%;
        border: 2px solid green;
    }
</style>
<body>

<div class="container">
	<h1 class='text-center'><?php echo ($name[0]->name); ?></h1>

    <div class='row'>
<?php
	foreach($newspaper as $row):
?>
        <div class='col-sm-12'>
            <div class='title' ><h3 class='text-center'><?php echo $row->title; ?></h3></div>
            <div class='article-img' ><img class='img img-responsive img-thumbnail' src='<?php echo base_url(); ?>/uploads/newspaper_images/<?php echo $row->img; ?>'></div>
            <div class='date-edition' >
                <div class='date'><?php echo $row->date; ?></div>
                <div class='edition'>No: <?php echo $row->number; ?></div>
            </div>
            <div class='details' ><?php echo ($row->details); ?></div>
                
        
            <br>
            
        </div>

<?php
	endforeach;
?>
    </div>	

			

</div>

</body>
</html>