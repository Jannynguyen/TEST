** start of index.html **

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Card</title>
    <link href="styles.css" rel="stylesheet"/>
</head>
<body>
<div class="blog-post-card">
    <img class="post-img" src="https://cdn.freecodecamp.org/curriculum/labs/cover-photo.jpg" alt="post-img"></img>
    <div class="post-content">
        <h2 class="post-title">Why learn to code while AI could do it better than you</h2>
        <p class="post-excerpt">Something big is happening in the world of software development. In 2025, the way we write, read, and think about software has undergone a significant shift, and it’s not subtle. At the center of this shift is artificial intelligence</p>
        <a class="read-more">Read More</a>
    </div>
</div>
</body>
</html>

** end of index.html **

** start of styles.css **

body {
  background-color: gray;
  font-family: Arial,sans-serif;
  padding: 20px;
}
p {
margin-top:5px;
margin-bottom:5px;
}
.blog-post-card{
  background-color:white;
  width :400px;
  padding: 20px;
  margin-top:100px;
  text-align: center;
  font-size:16px;
  margin-left:auto;
  margin-right:auto;
  border-radius: 5%;

}
.post-img{
  max-width:100%;
  border-bottom: 2px dashed;
}
.post-content{
  padding: 20px;
}
.post-title {
 color: black;
 text-align: center;
}
.post-excerpt{
color: black;
text-align: center;
}

.read-more{
  color:white;
  background-color: gray;
  display: inline-block;
  margin: 10px;
  padding: 10px;
  border: 2px ;
  border-radius: 10%;
}
.read-more:hover {
  background-color: blue;
}
a {
  text-decoration: none;
}


h2 {
  font-family: sans-serif;
  font-size: 20px;
}

** end of styles.css **

