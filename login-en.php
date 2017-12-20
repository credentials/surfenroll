<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<title><?= PROVIDER_NAME ?> attributes</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
				<h2>Load attributes from <?= PROVIDER_NAME ?></h2>

<?php if (PROVIDER == 'surfnet') { ?>
				<p>
					Attributes from your educational institute can be added to your IRMA
					app via SURFconext.
				</p>

				<p>
					In order to load these attributes, you first have to log into your own
					institute. With your permission, the Privacy by Design foundation then
					receives your attributes. Subsequently, they can be loaded into your IRMA app.
				</p>

<?php } else if (PROVIDER == 'facebook') { ?>
				<p>
					Attributes from Facebook can now be loaded into your IRMA app.
					To load these attributes it is necessary that you give IRMA access
					to your basic profile data. We use this data only during attribute laoding.
				</p>

				<p>
					After you have given this permission on Facebook the attributes can be
					loaded into your IRMA app.
				</p>

<?php } else if (PROVIDER == 'linkedin') { ?>
				<p>
					Attributes from LinkedIn can now be loaded into your IRMA app.
					To load these attributes it is necessary that you log in on LinkedIn,
					and give IRMA access to your basic profile data. We use this data only
					during attribute loading.
				</p>

				<p>
					After you have given this permission on LinkedIn the attributes can be
					loaded into your IRMA app.
				</p>

<?php } else if (PROVIDER == 'twitter') { ?>
				<p>
					Attributes from Twitter can now be loaded into your IRMA app.
					To load these attributes it is necessary that you log in on Twitter,
					and give IRMA access to your basic profile data. We use this data only
					during attribute loading.
				</p>

				<p>
					Twitter also gives us access to more information than neccessary, such
					as your tweets and follows, that we do not use. Unfortunately it is
					impossible for us to disable this. However, we do not download or use
					thisthe data in any way.
				</p>

				<p>
					After you have given this permission on Twitter the attributes can be
					loaded into your IRMA app.
				</p>

<?php } ?>

				<a href="?action=login" class="btn btn-primary">Log in to load attributes</a>
			</div>
		</div>
	</div>
</body>
</html>