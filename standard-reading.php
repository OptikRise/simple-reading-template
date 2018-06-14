<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<title><?php the_title(); ?></title>

	<?php wp_head(); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url(__FILE__); ?>assets/rdg-w-header.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <style>
		@font-face {
		    font-family: roboto;
		    src: url(<?php echo plugin_dir_url(__FILE__); ?>assets/typography/Roboto-Regular.ttf);
		}
        
        #to-top {
            margin-top: 5em;
        }

        h2, h3 {
            color: #004C65;
        }

        h3 {
        	font-size: 1.5rem;
        }
        
    </style>
    
</head>

<body <?php body_class(); ?>>
        
		<div id="rdg-header">
			<h1><?php the_title(); ?></h1>
			<img id="header-logo" src="<?php echo plugin_dir_url(__FILE__); ?>assets/bannerlogo-grey.gif"></img>
			<hr>
        </div>
    
		<!-- END HEADER -->
    
    
        <!--START OF CONTENT-->
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
        <div id="rdg-content">
		
			<?php the_content(); ?>

        </div>
    <?php endwhile; endif; ?>
        <!-- REFERENCES -->
<!--
		<div id="references">
			<h2>References</h2>
			<p><a href="" target="blank"></a></p>
		</div>
-->
    
    <!--END OF CONTENT-->
    
    <div id="to-top">
        <p><a href="#rdg-content">Back to Top</a></p>
	</div>
    
    <div id="rdg-footer">
        <p>Copyright &copy; <span><script type="text/javascript">
			var currDate = new Date();
			document.write(currDate.getFullYear());
		</script></span>Current Employer</p>
	</div>
    
    <?php wp_footer(); ?> 
</body>
</html>