<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="public/style.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<div class="all-box">
		
	</div>
	
	<div class="add-box">
		<input id="userId" type="number" placeholder="user">
		<input id="postTitle" type="text" placeholder="post title">
		<input id="content" type="text" placeholder="content">
		<button onclick="addPost()">Add post</button>
	</div>

	<div class="change-box">
		<input id="userIdChange" type="number" placeholder="user">
		<input id="postTitleChange" type="text" placeholder="post title">
		<input id="contentChange" type="text" placeholder="content">
		<button onclick="updatePost()">Change post</button>
	</div>

	<script src="public/main.js"></script>
</body>
</html>