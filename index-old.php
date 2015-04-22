<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple Contact With PHP</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="css/style.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
  <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-sm">
                <form methode="post" id="formContact">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="first_name">
                                  Firset Name</label>
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter name" />
                          </div>
                          <div class="form-group">
                              <label for="last_name">
                                  Last Name</label>
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter name" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="service">General Customer Service</option>
                                  <option value="suggestions">Suggestions</option>
                                  <option value="product">Product Support</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="message">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="12" cols="25" placeholder="Message"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </div>
  <script type="text/javascript">
  </script>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/core.js"></script>
</body>
</html>
