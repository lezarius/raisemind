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
                                      Nom</label>
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
                                      Sujet</label>
                                  <select id="subject" name="subject" class="form-control" required="required">
                                      <option value="na" selected="">En choisire une:</option>
                                      <option value="service">Service</option>
                                      <option value="suggestions">Devis</option>
                                      <option value="product">Autre (datalove, suggestion, etc)</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="name">
                                      Méssage</label>
                                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="C'est un monde avec des licorne, Oh heureusement que se texte doit être remplacée."></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                  envoyée le méssage</button>
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
                  <address>
                      <strong>RaiseMind</strong><br>
                      Bordeaux, 33000<br>
                      <abbr title="Phone">
                          P:</abbr>
                      +337 53 34 54 77
                  </address>
                  <address>
                      <strong>Ronce Mazanraud</strong><br>
                      <a href="mailto:pro@raisemind.pw">pro@raisemind.pw</a>
                  </address>
                  </form>
              </div>
          </div>
      </div>


<?php include "footer.php";?>
	</body>
</html>
