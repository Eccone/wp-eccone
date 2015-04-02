<div class="wrap">
	<form action="options.php" method="post" name="options">
		<h2><?php echo __('Réglages')?></h2>
		<?php echo wp_nonce_field('update-options') ?>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" align="left">
 						<label for="stic_project_page"><?php echo __('Page projet');?></label>
 					</th>
 					<td>
 						<?php wp_dropdown_pages( array('name' => 'stic_project_page', 'selected' => $project_page) ); ?>
					</td>
				</tr>
			</tbody>
		</table>
		 <input type="hidden" name="action" value="update" />
		 <!-- Liste des champs enregistrés dans les options -->
		 <input type="hidden" name="page_options" value="stic_project_page" />
		 <input type="submit" name="Submit" value="<?php echo __('Enregistrer'); ?>" class="button" />
	</form>
</div>