
<style>
 

.container {
    display: grid;
    grid-template-columns: repeat(7, 1fr); /* Fixed 6 columns */
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding-top: 0%;
}

 .box {
   text-align: center;
   width: 125px; /* Adjust the width as needed */
   height: 100px; /* Adjust the height as needed */
   padding: 10px; /* Adjust the padding as needed */
   background-color: rgba(48, 151, 177, 0.9);
   border-radius: 15px;
   box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
   transition: transform 0.3s ease-in-out;
   margin-top: 100px;
}
.box:hover {
transform: translateY(-5px);
}
 .box a {
     text-decoration: none;
     color: black;
     transition: color 0.3s ease-in-out;
 }

 .box:hover a {
     color: black; /* Adjust link color on hover */
 }

 .box img {
     width: 120px;
     height: 100px;
     margin-bottom: 15px; /* Adjust margin */
   
     border: 3px solid transparent;
     transition: border-color 0.3s ease-in-out;
 }

 .box:hover img {
     border-color:green; /* Adjust border color on hover */
 }

 .box span {
   display: block;
   font-weight: bold;
   font-size: 15px; /* Adjust the font size as needed */
   line-height: 16px; /* Adjust the line height as needed */
   overflow: hidden; /* Prevent text overflow */
   
   text-overflow: ellipsis; /* Show ellipsis (...) for overflowed text */
}

 .pagination {
     display: flex;
     justify-content: center;
     margin-top: 63px;
 }

 .pagination a {
     color: #fff;
     background-color: #007bff;
     border-radius: 5px;
     padding: 8px 14px; /* Adjust padding */
     margin: 0 5px;
     text-decoration: none;
     transition: background-color 0.3s ease-in-out;
 }

 .pagination a:hover {
     background-color: #0056b3;
 }

 .pagination .active {
     background-color: #0056b3;
 }
 header h1 {
   font-size: 24px; /* Adjust font size */
   margin: 0; /* Remove margin */
   padding: 10px; /* Add padding */
}

</style>
<style>
body {
    margin: 0;
    background-image: url("img/backgrounder1.png");
    background-repeat: no-repeat;
    background-size: cover;
}



h1 {
font-family: 'Lato', sans-serif;
font-weight:300;
letter-spacing: 2px;
font-size:48px;
}
p {
font-family: 'Lato', sans-serif;
letter-spacing: 1px;
font-size:14px;
color: #333333;
}

.header {
    position:relative;
    text-align:center;
    background: transparent; /* Change the background color to transparent */
    color:rgb(255, 255, 255);
}
.logo {
width:50px;
fill:white;
padding-right:15px;
display:inline-block;
vertical-align: middle;
}

.inner-header {
height:10vh;
width:100%;
margin: 0;
padding: 0;
}

.flex { /*Flexbox for containers*/
display: flex;
justify-content: center;
align-items: center;
text-align: center;
}

.waves {
position:relative;
width: 100%;
height:25vh;
margin-bottom:-7px; /*Fix for safari gap*/
min-height:100px;
max-height:150px;
}

.content {
position:relative;
height:30vh;
text-align:center;
background-color: white;
}

/* Animation */

/* .parallax > use {
animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}  */
.parallax > use:nth-child(1) {
animation-delay: -2s;
animation-duration: 7s;
}
.parallax > use:nth-child(2) {
animation-delay: -3s;
animation-duration: 10s;
}
.parallax > use:nth-child(3) {
animation-delay: -4s;
animation-duration: 13s;
}
.parallax > use:nth-child(4) {
animation-delay: -5s;
animation-duration: 20s;
}
@keyframes move-forever {
0% {
transform: translate3d(-90px,0,0);
}
100% { 
transform: translate3d(85px,0,0);
}
}
/*Shrinking for mobile*/
@media (max-width: 768px) {
.waves {
height:1px;
min-height:1px;
}
.content {
height:30vh;
}
h1 {
font-size:24px;
}
}
</style>
