<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CI-NEWS</title>

	<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/bootstrap.min.css' >
</head>

<body>

<div class="container">
    <?php

				if(isset($status)){
					var_dump( $status, $message );
				}
				

        if(isset($data)){
            print_r($data);
        }
    ?>
		
		<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="<?php echo base_url() . 'Newspaper/logout'; ?>" class='btn btn-danger'>Logout</a>
					</div>
				</div>
		</div>

    <div class='row'>
    <div class="col-xs-12">
        
		<!--?php echo $error;?-->
        <!--form action="< ?php echo base_url(); ?>Newspaper/add_article" method="POST" enctype='multipart/form-data' -->
				
				<?php echo form_open_multipart(base_url() . 'Newspaper/add_article');?>

            <h3>Add an Article</h3>
            <div style='display:flex;justify-content:space-between;'>
        
			<div class='form-group'>
			  <label>
			    <input type='text' name='article-number' class='form-control' placeholder='Article number' />
			  </label>
			</div>    

			    <input type='hidden' name='media-id' class='form-control' value="<?php echo $media_id;?>" />
			  

            <div class='form-group'>
			  <label>
			    <input type='text' name='article-author' class='form-control' value='<?php echo $media_name;?>' placeholder='Article author' />
			  </label>
			</div>    

            <div class='form-group'>
			  <label>
			    <input type='date' name='article-date' class='form-control' />
			  </label>
			</div>    

            <div class='form-group'>
			  <label>
			    <select name='article-lang' class='form-control' >
				  <option value='<?php echo $media_lang;?>'><?php echo $media_lang;?></option>
				  <option value='en-US'>English</option>
          <option value='fr-FR'>French</option>
				</select>
			  </label>
			</div>

            <div class='form-group'>
			  <label>
			    <select name='article-category' class='form-control' >
				  <option value=''>select a category</option>
					<option value='Environment'>Environment</option>
					<option value='Education'>Education</option>
				  <option value='Health'>Health</option>
					<option value='Nutrition'>Nutrition</option>
									<option value='Politics'>Politics</option>
                  <option value='Religion'>Religion</option>
					<option value='Society'>Society</option>
                  <option value='Sports'>Sports</option>
									
				</select>
			  </label>
			</div>

            </div>

            	<h5>Article Title</h5>		
            <div class='form-group'>
			  <label>
			    <input type='text' name='article-title' class='form-control' placeholder='Article title' style='width:80vw;' />
			  </label>
			</div>

<h5>Article image</h5>		
            <div class='form-group'>
			  <label>
			    <input type="file" name='article-img' size="20" class='form-control' style='width:80vw;' />
			  </label>
			</div>

			<hr>
                <h5>Article Text</h5>
                <div class='form-group'>
                    <label>
                      <textarea type="text" name="article-text" id="article-text" class='ckeditor form-control' style="margin-top: 0px; margin-bottom: 0px; height: 300px;width:80vw;"></textarea>
                      </label>
                </div>

            <div class='form-group text-center'>
			  <label>
			    <input type='submit' class='btn btn-primary' name='add-article' value='submit' >
			  </label>
			</div>



        </form>
        
        </div>
    </div>	

			
    </div>


<div class="container">
	<div class="row">

<div style='display:flex;justify-content:flex-end;'>
	<span>
	<?php
		echo ($this->pagination->create_links());
	?>
	</span>
</div>
				<div class="col-xs-12">



				<table class='table table-fluid table-stripped table-bordered '>
					<thead>
						<tr>
						<th>Title</th>
						<th>Image</th>
						<th>Language</th>
						<th>Category</th>
						<th>Author</th>
						<th>Edit</th>
							
						</tr>
					</thead>
					<tbody>
<?php
	//var_dump($articles);
	foreach($articles as $row):
?>					
						<tr>
						<td><?php echo $row->title;?></td>
<?php 
	if($row->img): 
?>
						<td><img src="<?php echo base_url() . '/uploads/newspaper_images/' . $row->img;?>" width='200px' class='img img-thumbnail img-responsive center-block'></td>
<?php
	else:
?>
						<td class='text-center'>NO IMG</td>
<?php
	endif;
?>
						<td><?php echo $row->lang;?></td>
						<td><?php echo $row->category;?></td>
						<td><?php echo $row->author;?></td>
						<td><a class='btn btn-info' href="<?php echo base_url(); ?>Newspaper/edit_article/<?php echo $row->id;?>">Edit</a></td>

						</tr>
<?php
	endforeach;
?>
					</tbody>
				</table>


				</div>
	</div>
</div>
<script src='<?php echo base_url(); ?>/assets/js/jquery.min.js' ></script>
<script src='<?php echo base_url(); ?>/assets/js/bootstrap.min.js' ></script>
<script src='<?php echo base_url(); ?>/assets/js/ckeditor.js' ></script>
</body>
</html>