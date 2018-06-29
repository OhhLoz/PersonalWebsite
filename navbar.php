<style>
    ul#navbar{		<?php //setting the unordered lists for only unordered lists with id=navbar, this is to not interfere with the database metrics list ?>
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ccebff;	
    border-bottom: 1px solid #555;
    }

    li {
    float: left;
    }

    li a {		<?php //sets the list anchor properties ?>
    display: block;
    color: black;
    text-align: center;
    padding: 14px 12px;
    text-decoration: none;
    font-size: 18px;
    }

    li a:hover {	<?php //sets the hover colour to indicate a button can be pressed ?>
    background-color: #b3e0ff;
    }     
</style>

<body>
    <ul id="navbar">
        <li><a href="index.php">Home</a></li>		<?php //actual button code for the navigation bar, each of these link to the php files' tables ?>
        <li><a href="artists.php?id=">Artists</a></li>
        <li><a href="cds.php?q=">Albums</a></li>
        <li><a href="tracks.php?id=">Tracks</a></li>
    </ul>
</body>