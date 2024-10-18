<!DOCTYPE html>
<html>
<head>
    <style>
        /* Style for the dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the button that triggers the dropdown */
        .dropdown-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Style for the dropdown items */
        .dropdown-item {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        /* Change the color of items when hovered over */
        .dropdown-item:hover {
            background-color: #ddd;
        }

        /* Show the dropdown content when the button is hovered over */
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="dropdown">
    <button class="dropdown-button">Dropdown</button>
    <div class="dropdown-content">
        <a class="dropdown-item" href="#">Item 1</a>
        <a class="dropdown-item" href="#">Item 2</a>
        <a class="dropdown-item" href="#">Item 3</a>
    </div>
</div>

</body>
</html>

<style>


<li> <a href="#"><i class="bi bi-card-list"></i> Experiments</a>
          <div class="submenu1">
            <ul>
              <li class="hoverme" style="background-color: #EDEDED;"><a
                  href="Process_Scheduling\ProcessScheduling.html" target="_blank">Process Scheduling
                  <i class="bi bi-caret-right-fill"></i> </a>
                <div class="submenu2">
                  <ul>
                    <div style="background-color: #D8D9CF;">
                      <li>
