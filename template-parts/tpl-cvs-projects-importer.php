<?php /* Template Name: CVS projects importer */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-work-done.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-work-done clear-both">
<?php
if ( isset( $_POST["lsp_project_date"] ) && isset( $_FILES["lsp_file"] ) )
{
	echo $_POST["lsp_project_date"];
	echo "<br>";
	var_dump( $_FILES['lsp_file']['tmp_name'] );

	// run the import on the file
	importCVSasProjects();
} else {
	echo "nothing recieved!";
}

function importCVSasProjects()
{
	$row = 1;
	if (($handle = fopen( $_FILES['lsp_file']['tmp_name'] , "r")) !== FALSE) 
	{
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		{
			// $data[0] = name of the Project, $data[1] = LHP/LHO, $data[2] = 0
			$postarr = array(
				"post_date" => $_POST["lsp_project_date"],
				"post_title" => $data[0],
				"post_status" => "publish",
				"post_type" => "project",
				"meta_input" => array(
					"project-name" => $data[0],
					"project-type" => $data[1]
				),
			);
			$newPostID = wp_insert_post( $postarr );
			// "project-importance" => $data[2]

			if ( isset( $data[2] ) )
			{
				update_post_meta( $newPostID, 'project-importance', sanitize_text_field( $data[2] ) );
			} else {
				echo "couldn't upload meta data -> meta data is missing.";
			}

			echo "posted project with name: ".$data[0]." ,type: ".$data[1]." ,importance: ".$data[2]."<br>";
		}
	fclose($handle);
	}
}

?>

<h1>Importer</h1>
<form method="POST" enctype="multipart/form-data">
	Project's date: <input type="date" name="lsp_project_date" required>
	<br>
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	File: <input type="file" name="lsp_file" required>
	<br>
	<input type="submit" value="send POST data">
</form>
</div>

<?php get_footer();?>
