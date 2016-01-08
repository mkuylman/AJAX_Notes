<div class="note_content">

	<h2>Title: 
<?= $title; ?></h2>

	<form action="/notes/" method="post">
		<input type="hidden" name="id" value="<?= $id; ?>" />
		<div class="note_description">
			<?= $description; ?>
			<input type="hidden" name="description" value="<?= $description; ?>" />
		</div>
		<input type="submit" value="Update Description" />
	</form>

	<form action="notes/delete" method="post">
		<input type="hidden" name="id" value="<?= $id; ?>" />
		<input type="submit" value="Delete Notes" />
	</form>
</div>
