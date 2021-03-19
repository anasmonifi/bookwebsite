<?php
 require 'connect.php';
function admin_import() {

  if (isset($_REQUEST['upload'])) {
    $ok = true;
    $file = $_FILES['csv_file']['tmp_name'];
    $handle = fopen($file, "r");
    if ($file == NULL) {
      error(_('Please select a file to import'));
      redirect(page_link_to('admin_export'));
    }
    else {
       
      while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
        {
         $Id = $filesop[0];
          $nameB = $filesop[1];
          $description = $filesop[2];
         $isNew = $filesop[3];
          $agaddedDate = $filesop[4];
          $price = $filesop[5];
         $UserId = $filesop[6];
          $NameFT = $filesop[7];
          $img = $filesop[8];
           
// example error handling. We can add more as required for the database.

        if ( strlen($isNew) && preg_match("/^[a-z0-9._+-]{1,64}@(?:[a-z0-9-]{1,63}\.){1,125}[a-z]{2,63}$/", $mail) > 0) {
          if (! check_email($isNew)) {
            $ok = false;
            $msg .= error(_("E-mail address is not correct."), true);
          }
        }
// error handling for password        
        if (strlen($password) >= MIN_PASSWORD_LENGTH) {
            $ok = true;
          } else {
            $ok = false;
            $msg .= error(sprintf(_("Your password is too short (please use at least %s characters)."), MIN_PASSWORD_LENGTH), true);
        }
          
        
          
 // If the tests pass we can insert it into the database.       
        if ($ok) {
          $sql = sql_query("
            INSERT INTO `books` SET
            `Id`='" . sql_escape($Id) . "',
            `nameB`='" . sql_escape($nameB) . "',
            `description`='" . sql_escape($description) . "',
            `isNew`='" . sql_escape($isNew) . "',
            `addedDate`='" . sql_escape($agaddedDate) . "',
            `price`='" . sql_escape($price) . "',
            `UserId`='" . sql_escape($UserId) . "',
             `NameFT`='" . sql_escape($NameFT) . "',
             `img`='" . sql_escape($img) . "',");
        }
      }

      if ($sql) {
        success(_("You database has imported successfully!"));
        redirect(page_link_to('admin_export'));
      } else {
        error(_('Sorry! There is some problem in the import file.'));
        redirect(page_link_to('admin_export'));
        }
    }
  }
//form_submit($name, $label) Renders the submit button of a form
//form_file($name, $label) Renders a form file box

 return page_with_title("Import Data", array(
   msg(),
  div('row', array(
          div('col-md-12', array(
              form(array(
                form_file('csv_file', _("Import user data from a csv file")),
                form_submit('upload', _("Import"))
              ))
          ))
      ))
  ));
}
?>