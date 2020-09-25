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
    .date-number{
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
        font-style: italic;
    }
    .details{
/*        border: 1px solid gray;
        border-radius: 10px;
*/        padding: 5px 0;
    }
    .title{
        font-weight: bolder;
        font-size: 1.25em;
    }
    .newspaper-block{
        border-bottom: 1px solid gray;
        margin: 10px 0;
    }
</style>
<body>

<div class="container">
	<h1 class='text-center'><?php echo $data[0]->name; ?></h1>

    <div class='row'>
<?php
//    var_dump($newspapers);
	foreach($newspapers as $row):
?>
        <div class='col-sm-12 col-md-4 newspaper-block'>
            <div class='img' >
			  <?php if($row->img): ?>
				<img class='img img-responsive img-thumbnail' src='<?php echo base_url(); ?>/uploads/newspaper_images/<?php echo $row->img; ?>'>
			  <?php else: ?>
				<img class='img img-responsive img-thumbnail' src='<?php echo base_url(); ?>/uploads/newspaper_images/the-horizon.jpg'>
			  <?php endif; ?>
			</div>
            <div class='title' ><?php echo $row->title; ?></div>
            <div class='details' ><?php echo substr($row->details, 0, 100); ?> ... <a href="<?php echo base_url(); ?>Newspaper/edition/<?php echo $row->id; ?>"><button class='btn btn-sm btn-success'>Read More</button></a></div>
            <div class='date-number' >
                <div class='date'><?php echo $row->date; ?></div>
                <div class='number'>No: <?php echo $row->number; ?></div>
                <!--a href="< ?php echo base_url(); ?>Newspaper/edition/< ?php echo $row->id; ?>"><button class='btn btn-sm btn-success'>Read More</button></a-->
            </div>    
        
            <br>
            
        </div>

<?php
	endforeach;
?>
    </div>	

			

</div>

</body>
</html>