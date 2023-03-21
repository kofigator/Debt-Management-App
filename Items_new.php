<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="#">
    <title>Items Page</title>
    <style>
    *{
    padding: 0%;
    margin: 0%;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover, .dropdown:hover .dropbtn {
      background-color: rgb(236, 195, 195);
    }

    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {background-color: #f1f1f1;}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    table {
    border-collapse: collapse;
    min-width: max-content;
    }

    td {
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    thead tr th {
        padding: 5px 10px;
        text-decoration: none;
    }

    th {
        background-color: #4CAF50;
        color: #fff;
        position: sticky; 
    }

    tbody tr td {
        text-decoration: none;
        padding: 5px 0px 0px 5px;
        
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #editBtn, #deleteBtn {
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    #item_header{
        margin: 10px 80px;
        color: #fff;
        font-size: xx-large;
    }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn"><img src="drop.jpg" alt="" width="30px" height="30px"></a>
              <div class="dropdown-content">
                <a href="add_item.html">Add New Items</a>
              </div>
            </li>
            <li id="item_header">ITEMS</li>
        </ul>
    </nav>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Unit Price</th> 
                </tr>
            </thead>
            <tbody id="tableBody">
              <?php 
                include 'retrieve_items.php'; 
              ?>
            </tbody>
        </table>
    </div>
</body>
</html>