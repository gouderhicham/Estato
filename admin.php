<!DOCTYPE html>


<html lang="en">
<?php include "fetch.php"; ?>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, 
				initial-scale=1.0"
    />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="admin-responsive.css" />
    <title>Estato</title>
  </head>

  <body>
    <!-- for header part -->
    <header>
      <div class="logosec">
        <div class="logo">Estato</div>
        <img
          src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
          class="icn menuicn"
          id="menuicn"
          alt="menu-icon"
        />
      </div>

      <div class="message">
        <div class="dp">
          <img
            src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
            class="dpicn"
            alt="dp"
          />
        </div>
      </div>
    </header>

    <div class="main-container">
      <div class="navcontainer">
        <nav class="nav">
          <div class="nav-upper-options">
            <div class="nav-option option1">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                class="nav-img"
                alt="dashboard"
              />
              <h3>Dashboard</h3>
            </div>

            <div class="nav-option option3">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                class="nav-img"
                alt="report"
              />
              <h3>Report</h3>
            </div>

            <div class="nav-option option4">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                class="nav-img"
                alt="institution"
              />
              <h3>Institution</h3>
            </div>

            <div class="nav-option option5">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                class="nav-img"
                alt="blog"
              />
              <h3>Profile</h3>
            </div>

            <div class="nav-option option6">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                class="nav-img"
                alt="settings"
              />
              <h3>Settings</h3>
            </div>

            <div class="nav-option logout">
              <img
                src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                class="nav-img"
                alt="logout"
              />
              <h3>Logout</h3>
            </div>
          </div>
        </nav>
      </div>
      <div class="main">
        <div class="searchbar2">
          <input type="text" name="" id="" placeholder="Search" />
          <div class="searchbtn">
            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
              class="icn srchicn"
              alt="search-button"
            />
          </div>
        </div>

        <div class="box-container">
          <div class="box box1">
            <div class="text">
              <h2 class="topic-heading">60.5k</h2>
              <h2 class="topic">Visitors</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
              alt="Views"
            />
          </div>

          <div class="box box2">
            <div class="text">
              <h2 class="topic-heading">150</h2>
              <h2 class="topic">Users</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
              alt="likes"
            />
          </div>

          <div class="box box3">
            <div class="text">
              <h2 class="topic-heading">320</h2>
              <h2 class="topic">Sellers</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
              alt="comments"
            />
          </div>

          <div class="box box4">
            <div class="text">
              <h2 class="topic-heading">320</h2>
              <h2 class="topic">Posts</h2>
            </div>

            <img
              src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
              alt="comments"
            />
          </div>
        </div>

        <div style="overflow-x: auto ; margin-top :3rem; ">
          <table>
            <tr>
              <th>id</th>
              <th>Usernamea</th>
              <th>Role</th>
              <th>Email</th>
              <th>Password</th>
              <th>Actions</th>
            </tr>
            
            <?php foreach ($data as $row): ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['username']; ?></td>
              <td><?php echo $row['role']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['password']; ?></td>
              <td class="action-buttons">
                <button class="update-button">Update</button>
                <button class="delete-btn">Delete</button>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </table>
        </div>
      </div>
    </div>

    <script>
      let menuicn = document.querySelector(".menuicn");
      let nav = document.querySelector(".navcontainer");

      menuicn.addEventListener("click", () => {
        nav.classList.toggle("navclose");
      });
      let rows = document.querySelectorAll(".update-button");
      rows.forEach((row) => {
        row.addEventListener("click", (e) => {
    let status = row.parentElement.parentElement.children[0].isContentEditable;

    if (!status) {
        row.classList.add("editing");
    } else {
        row.classList.remove("editing");
        updateUserData(
            row.parentElement.parentElement.children[0].textContent,
            row.parentElement.parentElement.children[1].textContent,
            row.parentElement.parentElement.children[2].textContent,
            row.parentElement.parentElement.children[3].textContent,
            row.parentElement.parentElement.children[4].textContent
        );
    }

    row.parentElement.parentElement.children[0].contentEditable = !status;
    row.parentElement.parentElement.children[1].contentEditable = !status;
    row.parentElement.parentElement.children[2].contentEditable = !status;
    row.parentElement.parentElement.children[3].contentEditable = !status;
    row.parentElement.parentElement.children[4].contentEditable = !status;
});
      });
      function updateUserData(id, username, role, email, password) {
        console.log(id , username);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "update_data.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    xhr.send(`userId=${id}&username=${username}&role=${role}&email=${email}&password=${password}`);
}

    </script>
  </body>
</html>