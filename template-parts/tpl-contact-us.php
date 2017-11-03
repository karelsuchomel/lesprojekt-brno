<?php /* Template Name: Napište nám */ ?>

<?php
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }

  //response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Prosím, vyplňte všechna pole.";
	$email_invalid   = "Emailová adresa nemá správný formát.";
	$message_unsent  = "Zpráva nebyla odeslána. Zkuste to znovu, nebo nám zavolejte :).";
	$message_sent    = "Odesláno.";
	 
	//user posted variables
	$name = isset($_POST['message_name']) ? $_POST['message_name'] : "";
	$email = isset($_POST['message_email']) ? $_POST['message_email'] : "";
	$message = isset($_POST['message_text']) ? $_POST['message_text'] : "";
	$human = isset($_POST['message_human']) ? $_POST['message_human'] : "";
	$submitted = isset($_POST['submitted']) ? $_POST['submitted'] : "";
	 
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Z webového formuláře lesprojekt-brno.cz - " . $name;
	$headers = 'From: '. $email . "\r\n" .
	  'Reply-To: ' . $email . "\r\n";

	if(!$human == 0){
		if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
		else {

			//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				my_contact_form_generate_response("error", $email_invalid);
			else //email is valid
			{
				//validate presence of name and message
				if(empty($name) || empty($message)){
					my_contact_form_generate_response("error", $missing_content);
				}
				else //ready to go!
				{
					$sent = wp_mail($to, $subject, strip_tags($message), $headers);
					if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
					else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
				}
			}
		}
	}
	else if ($submitted) my_contact_form_generate_response("error", $missing_content);
?>

<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-work-done.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div id="page-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-header-image"
<?php if ( has_post_thumbnail() ) : ?>
	<?php
		$postID = get_post();
		$postThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
	?>

	style="background-image: url(<?php echo $postThumbURI ?>);"

<?php endif; ?>
></div>
<div class="page-content clear-both">
	<div class="page-heading-container">
		<div class="heading-blurred-bg" <?php echo "style='background-image: url(" . $postThumbURI . ");'"; ?>></div>
		<div class="heaeding-bg-tint"></div>
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="content-wrap">
		<div class="content-text clear-both">

		<style type="text/css">
			.error{
				padding: 5px 9px;
				border: 1px solid red;
				color: red;
				border-radius: 3px;
			}
			.success{
				padding: 5px 9px;
				border: 1px solid green;
				color: green;
				border-radius: 3px;
			}
			form span{
				color: red;
			}
		</style>
		<div id="respond">
		<?php echo $response; ?>
			<form action="<?php the_permalink(); ?>" method="post">
				<p><label for="name">Vaše jméno: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($name); ?>"></label></p>
				<p><label for="message_email">Váš email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($email); ?>"></label></p>
				<p><label for="message_text">Zpráva: <span>*</span> <br><textarea rows="8" cols="50" type="text" name="message_text"><?php echo esc_textarea($message); ?></textarea></label></p>
				<p><label for="message_human">Antispam ověření (do pole vyplňte dvojku): <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
				<input type="hidden" name="submitted" value="1">
			<p><input type="submit" value="Odeslat zprávu"></p>
			</form>
		</div>

		</div>
	</div>
</div>

<?php endwhile; ?>

<?php else : ?>
<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
</div>


<?php get_footer();?>
