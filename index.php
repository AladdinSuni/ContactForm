<?php require_once('library/Contact.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <mera charset="utf-8" />
  <meta name="viewport" contact="width=device-width" />
  <title>Simple Contact Form With PHP</title>
  <link rel="stylesheet" type="text/css" href="css/foundation.min.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/core.css" />
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>
  <form method="post" id="formContact" class="large-8 large-centered columns custom">
    <fieldset>
      <legend>Simple Contact Form with PHP</legend>
      <div class="large-6 columns">
        <label for="first_name">First name: *</label>
        <input type="text" name="first_name" id="first_name" placeholder="your first name" />
      </div>
      <div class="large-6 columns">
        <label for="last_name">Last name: *</label>
        <input type="text" name="last_name" id="last_name" placeholder="your last name" />
      </div>
      <div class="large-6 columns">
        <label for="email">Email address: *</label>
        <input type="email" name="email" id="email" placeholder="your email address" />
      </div>
      <div class="large-6 columns">
        <label for="type">Enquiry type: *</label>
        <select name="type" id="type">
            <option value="">Select one</option>
            <?php 
            if (!empty(Contact::$types)) { 
              foreach(Contact::$types as $id => $type) { ?> 
                <option value="<?php echo $id; ?>"><?php echo $type; ?></option>
            <?php 
              }
            } 
            ?>
        </select>
      </div>
      <div class="large-12 columns">
        <label for="enquiry">Enquiry: *</label>
        <textarea name="enquiry" id="enquiry" placeholder="Yor message"></textarea>
      </div>
       <div class="large-12 columns">
        <button class="button small"><i class="icon-envelope"></i> Send message</button>
      </div>
    </fieldset> 
  </form>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alert.js"></script>
  <script src="js/core.js"></script>
</body>
</html>