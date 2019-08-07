<form method="POST">
    <label for="awesome_text">Awesome Text</label>
    <input type="text" name="awesome_text" id="awesome_text" value="<?php echo $value; ?>">
    <?php settings_fields( 'rw_options_group' ); ?>
    <table>
      <tr valign="top">
        <th scope="row">
          <label for="rw_option_name">Label</label>
        </th>
        <td>
          <input type="text" id="rw_option_name" name="rw_option_name" value="<?php echo get_option('rw_option_name'); ?>" />
        </td>
      </tr>
    </table>
    <input type="submit" value="Save" class="button button-primary button-large">
</form>
