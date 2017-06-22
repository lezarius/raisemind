<!DOCTYPE HTML>

<html>
	<head>
		<title>Nous contactez !</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

    <!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="http://dev.infra-rm.xyz/" class="logo">RaiseMind</a>
				<?php include 'nav.php'; ?>
				</div>
			</header>

      <section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Nous contactez</h2>
						<p>Téléphone ? Mail ? Formulaire ?</p>
						<p>faite votre choix est contactez nous.</p>
					</header>

      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="well well-sm">
                      <form>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      Name</label>
                                  <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                              </div>
                              <div class="form-group">
                                  <label for="email">
                                      Email Address</label>
                                  <div class="input-group">
                                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                      </span>
                                      <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                              </div>
                              <div class="form-group">
                                  <label for="subject">
                                      Subject</label>
                                  <select id="subject" name="subject" class="form-control" required="required">
                                      <option value="na" selected="">Choose One:</option>
                                      <option value="service">General Customer Service</option>
                                      <option value="suggestions">Suggestions</option>
                                      <option value="product">Product Support</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      Message</label>
                                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Message"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                  Send Message</button>
                          </div>
                      </div>
                      </form>
                  </div>
              </div>
              <div class="col-md-4">
              <img src="images/logo200.png" alt=""></img>
              </div>
              <div class="col-md-4">
                  <form>
                  <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                  <address>
                      <strong>Twitter, Inc.</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      <abbr title="Phone">
                          P:</abbr>
                      (123) 456-7890
                  </address>
                  <address>
                      <strong>Full Name</strong><br>
                      <a href="mailto:#">first.last@example.com</a>
                  </address>
                  </form>
              </div>
          </div>
      </div>


<?php include "footer.php";?>
	</body>
</html>
