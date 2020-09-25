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
<style>

</style>
<body>

<div class="container">
    <?php

				//var_dump( $article_to_edit );

        if(isset($data)){
            print_r($data);
        }
    ?>

		<a href="<?php echo base_url() . 'Newspaper/add_articles' ?>" class='btn btn-primary'>Home</a>
    <div class='row'>
    <div class="col-xs-12">
        
        <!--form action="<?php echo base_url(); ?>Newspaper/edited_article" method="POST"-->
				<?php echo form_open_multipart(base_url() . 'Newspaper/edited_article');?>

            <h3>Editing an Article</h3>
            <div style='display:flex;justify-content:space-between;'>
<?php
	foreach($article_to_edit as $data):
?>        
			<div class='form-group'>
			  <label>
			    <input type='text' name='article-number' class='form-control' value='<?php echo $data->number; ?>' placeholder='Articlle Number' />
			  </label>
			</div>    

			<div class='form-group'>
			  <label>
			    <input type='hidden' name='media-id' class='form-control' value='<?php echo $data->media_id; ?>' placeholder='Media ID' />
			  </label>
			</div>    

            <div class='form-group'>
			  <label>
			    <input type='text' name='article-author' class='form-control' value='<?php echo $data->author; ?>' placeholder='Articlle Author'/>
			  </label>
			</div>    

            <div class='form-group'>
			  <label>
			    <input type='date' name='article-date' value='<?php echo $data->date; ?>' class='form-control' />
			  </label>
			</div>    

            <div class='form-group'>
			  <label>
			    <select name='article-lang' class='form-control' >
				  <option value='<?php echo $data->lang; ?>'><?php echo $data->lang; ?></option>
				  <option value='en-US'>English</option>
          <option value='fr-FR'>French</option>
				</select>
			  </label>
			</div>

            <div class='form-group'>
			  <label>
			    <select name='article-category' class='form-control' >
				  <option value='<?php echo $data->category; ?>'><?php echo $data->category; ?></option>
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
			    <input type='text' name='article-title' class='form-control' value='<?php echo $data->title; ?>' style='width:80vw;' />
			  </label>
			</div>
			<hr>
			
<?php
	if($data->img):
?>
			<img src="<?php echo base_url() . '/uploads/newspaper_images/' . $data->img;?>" width='100px' class='img img-responsive'>
<?php
	endif;
?>
			<h5>Change image</h5>		
            <div class='form-group'>
			  <label>
			    <input type="file" name='article-img' size="20" class='form-control' style='width:80vw;' />
			  </label>
			</div>
<hr>
                <h5>Article Text</h5>
                <div class='form-group'>
                    <label>
                      <textarea type="text" name="article-text" id="article-text" class='ckeditor form-control' style="margin-top: 0px; margin-bottom: 0px; height: 300px;width:80vw;"><?php echo $data->details; ?></textarea>
                      </label>
                </div>

			<input type='hidden' name='old-img' value='<?php echo $data->img;?>' >

			<input type='hidden' name='article-id' value='<?php echo $data->id; ?>' >

<?php
	endforeach;
?>
            <div class='form-group text-center'>
			  <label>
			    <input type='submit' class='btn btn-primary' name='edit-article' value='submit' >
			  </label>
			</div>



        </form>
        
        </div>
    </div>	

			
    </div>
</div>


<script src='<?php echo base_url(); ?>/assets/js/jquery.min.js' ></script>
<script src='<?php echo base_url(); ?>/assets/js/bootstrap.min.js' ></script>
<script src='<?php echo base_url(); ?>/assets/js/ckeditor.js' ></script>
</body>
</html>