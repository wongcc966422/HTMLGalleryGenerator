<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./semantic-ui/semantic.min.css">
	<title><?hgg title Index?>(<?hgg num?>)</title>
	<!--[if gte IE 9]>
	  <style type="text/css">
		.gradient {
		   filter: none;
		}
	  </style>
	<![endif]-->
	<script src="./semantic-ui/semantic.min.js"></script>
</head>

<body style="margin: 0px">
<div class="ui fixed inverted main menu" style="top: 0px">
	<div class="container">
		<div class="ui breadcrumb item">
			<?hgg for path start?>
			<a class="section" href="<?hgg var href?>" style="position: relative"><?hgg var title Index?>(<?hgg var num?>)</a>
			<?hgg if isLast==False start?><i class="right white chevron icon divider"></i><?hgg if end?>
			<?hgg for path end?>
		</div>
	</div>
</div>

<br><br><br><br> <!--the <br>'s make the content lower than the title bar. Not a very good solution, but works.-->
<div class="ui cards">
	<?hgg for files start?>
	<div class="ui card" style="max-width: 40%">
		<a href="<?hgg var href?>" class="image">
			<img src="<?hgg var thumbnail data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D?>">
		</a>
		<div class="content" style="max-height:50px; white-space:nowrap">
			<a href="<?hgg var href?>">
			<?hgg if isDir start?><i class="file folder outline icon"></i><?hgg if end?>
			<?hgg if isImage start?><i class="file image outline icon"></i><?hgg if end?>
			<?hgg if isVideo start?><i class="video play outline icon"></i><?hgg if end?>
			<?hgg if isMusic start?><i class="music icon"></i><?hgg if end?>
			<?hgg if isMisc start?><i class="file text outline icon"></i><?hgg if end?>
			<?hgg var title?><?hgg if isDir start?>(<?hgg var num?>)<?hgg if end?><?hgg if isVideo start?>(<?hgg var length?>)<?hgg if end?>
			</a>
		</div>
		<!--<div class="extra content">
		<a class="created"><?hgg var mtime?></a>
		</div>-->
	</div>
	<?hgg for files end?>
</div>

Last update: <?php echo date("F d Y H:i:s", getlastmod());?>
</html>
