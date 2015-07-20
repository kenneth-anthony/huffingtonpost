<!DOCTYPE html>
<head xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
	<meta charset="utf-8">
	<Link rel="stylesheet" type="text/css" href="huffStyle.css">
	<link href='http://fonts.googleapis.com/css?family=Gravitas+One' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="background">
		<div class="container">
			<header>
				<h1>Huffington Post</h1>
				<p>Data Design Project</p>
			</header>
	</div>

	<main>
		<div class="persona">
			<h3>A PERSONA OF FATE</h3>
			<p>The persona for Huffington Post is a educated, liberal, 18-42,
				65% female, 35% male audience. The typical Huffington Post user
				is tech savvy and views HP on a mobile device. The end user wants to
				read politics, business, entertainment, tech, media, worldpost, healthy,
				and occasionally enjoys comedy.
				To read further demographic information click the link.
				<a href="http://www.nielsen.com/us/en/insights/news/2011/aol-huffington-post.html">
					Huffington Post Demographics.	</a>
			</p>
			<img id="richard" src="images/donaldbw.jpg" width="730" height="551" alt="Richard Trump">
		</div>
			<div class="usecase">
				<h3> Use Case</h3>
				<p> A signed in user of Huffington Post adds a comment on a article by accessing the the sight,
					scrolling to the bottom of the artle, clicking a on the add a comment link,
					writing a comment submit the comment and share with facebook.
				</p>
			</div>
				<div id="relationshipmap">
					<img src="images/relationshipmap.png"alt="relationship map">
				</div>
	</main>

		<p>
			CREATE TABLE profile (
				profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
				email VARCHAR(128) NOT NULL,
				atHandle VARCHAR(32),
				UNIQUE(username),
				UNIQUE(email),
				PRIMARY KEY(profileId)
				);

			CREATE TABLE comment (
				username INT UNSIGNED AUTO_INCREMENT NOT NULL,
				profileId INT UNSIGNED NOT NULL,
				comment content VARCHAR(140) NOT NULL,
				comment dateTime DATETIME NOT NULL,
				INDEX(profileId),
				FOREIGN KEY(profileId) REFERENCES profile(profileId),
				PRIMARY KEY(tweetId)
				);

			CREATE TABLE shared articles (
				profileId INT UNSIGNED NOT NULL,
				username INT UNSIGNED NOT NULL,
				favoriteDate DATETIME NOT NULL,
				INDEX(profileId),
				INDEX(tweetId),
				FOREIGN KEY(profileId) REFERENCES profile(profileId),
				FOREIGN KEY(tweetId) REFERENCES tweet(tweetId)
			);
		</p>

</body>
