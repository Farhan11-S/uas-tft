<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    include "../../backend/main.php";
    $search = htmlspecialchars($_POST['search']);
    if ($search == "") {
        $query = "SELECT * FROM traits";
    } else {
        $query = "SELECT * FROM traits WHERE name LIKE '%$search%'";
    }

    $data = mysqli_query($conn, $query);
    if (mysqli_num_rows($data) > 0) {
        while($d = mysqli_fetch_array($data)) {
            echo "
                <tr>
                    <td>{$d['name']}</td>
                    <td><img src='{$d['image_url']}' alt=''></td>
                    <td class='action'>
                        <a href='#' data-id='{$d['id']}' data-name='{$d['name']}' data-imgurl='{$d['image_url']}' class='btn btn-edit'>Edit</a>
                    </td>
                </tr>";
        }
    } else {
        echo "
            <tr class='no-data'>
                <td colspan='3' style='text-align: center;'>No data available</td>
            </tr>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../../public/styles/traits.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <span class="title">TFT</span>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="../index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../users/usersadmin.php">
                        <span class="icon">              
                            <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m225.126 220.728c59.201 0 107.371-48.164 107.371-107.363 0-59.2-48.17-107.362-107.371-107.362-59.197 0-107.365 48.162-107.365 107.362 0 59.198 48.168 107.363 107.365 107.363zm0-198.599c50.311 0 91.236 40.929 91.236 91.235s-40.926 91.234-91.236 91.234c-50.307 0-91.233-40.928-91.233-91.234s40.926-91.235 91.233-91.235zm241.932 340.706h-15.866c-2.208-8.338-5.505-16.285-9.839-23.751l11.222-11.222c1.515-1.511 2.362-3.563 2.362-5.701 0-2.141-.848-4.19-2.362-5.701l-24.069-24.07c-3.152-3.149-8.256-3.149-11.407 0l-11.22 11.222c-7.464-4.339-15.406-7.631-23.752-9.838v-15.871c0-4.455-3.608-8.063-8.061-8.063h-34.036c-.01 0-.016.002-.018.002-24.953-15.753-53.561-24.146-83.084-24.146h-63.604c-86.27 0-156.451 70.182-156.451 156.448v54.695c0 4.453 3.609 8.064 8.065 8.064h222.102l18.547 18.545c3.028 3.03 8.385 3.021 11.406 0l11.219-11.221c7.469 4.338 15.419 7.631 23.752 9.84v15.867c0 4.455 3.607 8.063 8.066 8.063h34.035c4.452 0 8.061-3.608 8.061-8.063v-15.865c8.34-2.209 16.288-5.505 23.756-9.844l11.224 11.222c3.028 3.029 8.386 3.021 11.401 0l24.067-24.07c3.149-3.15 3.149-8.253 0-11.403l-11.222-11.221c4.334-7.464 7.631-15.414 9.839-23.75h15.866c4.458 0 8.068-3.61 8.068-8.065v-34.038c.001-4.456-3.609-8.065-8.067-8.065zm-414.056 39.309c0-77.372 62.946-140.319 140.323-140.319h63.604c26.678 0 52.537 7.639 75.035 21.989v9.957c-8.339 2.209-16.289 5.502-23.752 9.841l-11.225-11.219c-3.15-3.149-8.249-3.149-11.404 0l-24.064 24.067c-3.15 3.147-3.15 8.255 0 11.402l11.226 11.223c-4.344 7.465-7.64 15.415-9.845 23.753h-15.87c-4.455 0-8.063 3.609-8.063 8.063v34.036c0 4.455 3.607 8.065 8.063 8.065h15.869c2.205 8.343 5.501 16.291 9.837 23.752l-11.218 11.222c-.244.248-.439.528-.648.799h-207.868zm405.994-5.27h-14.229c-3.863 0-7.184 2.742-7.916 6.537-2.081 10.782-6.264 20.87-12.422 29.987-2.162 3.199-1.756 7.486.979 10.217l10.063 10.061-12.661 12.665-10.066-10.061c-2.725-2.73-7.013-3.147-10.215-.978-9.113 6.163-19.205 10.342-29.99 12.422-3.791.731-6.539 4.055-6.539 7.919v14.225h-17.908v-14.225c0-3.864-2.738-7.188-6.536-7.919-10.78-2.08-20.872-6.259-29.989-12.422-3.204-2.166-7.486-1.749-10.215.98l-10.063 10.061-12.662-12.665 10.06-10.063c2.733-2.73 3.144-7.02.977-10.219-6.157-9.104-10.339-19.192-12.423-29.987-.734-3.793-4.055-6.535-7.921-6.535h-14.222v-17.909h14.222c3.866 0 7.187-2.742 7.921-6.536 2.084-10.784 6.262-20.875 12.427-29.988 2.163-3.199 1.753-7.486-.98-10.218l-10.06-10.062 12.658-12.664 10.066 10.06c2.725 2.728 7.009 3.142 10.215.979 9.113-6.161 19.207-10.341 29.989-12.42 3.794-.734 6.536-4.056 6.536-7.919v-14.229h17.908v14.229c0 3.863 2.744 7.185 6.539 7.919 10.789 2.081 20.879 6.259 29.982 12.42 3.21 2.165 7.488 1.753 10.219-.979l10.064-10.06 12.667 12.664-10.063 10.06c-2.734 2.733-3.141 7.019-.979 10.219 6.158 9.114 10.341 19.205 12.422 29.984.732 3.797 4.053 6.539 7.916 6.539h14.229zm-101.948-66.859c-31.931 0-57.906 25.976-57.906 57.905 0 31.927 25.976 57.904 57.906 57.904 31.926 0 57.904-25.978 57.904-57.904 0-31.93-25.978-57.905-57.904-57.905zm0 99.68c-23.037 0-41.779-18.739-41.779-41.775 0-23.037 18.742-41.778 41.779-41.778 23.032 0 41.772 18.741 41.772 41.778 0 23.036-18.74 41.775-41.772 41.775z"/></svg>
                        </span>
                        <span class="title">Users Admin</span>
                    </a>
                </li>

                <li>
                    <a href="../users/usersstandard.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users Standard</span>
                    </a>
                </li>

                <li>
                    <a href="../champions/champions.php">
                        <span class="icon">
                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m397.983 123.585c-23.074-28.708-54.562-49.876-89.566-60.417l7.693-24.3c2.337-7.384-1.331-15.333-8.467-18.346l-45.809-19.341c-3.729-1.575-7.939-1.575-11.668 0l-45.809 19.341c-7.136 3.013-10.804 10.962-8.467 18.346l7.693 24.3c-34.998 10.539-66.48 31.701-89.554 60.401-25.856 32.164-40.097 72.647-40.097 113.993v228.51c0 6.581 4.29 12.394 10.579 14.333l100.265 30.927c4.549 1.403 9.495.564 13.328-2.265 3.832-2.828 6.093-7.307 6.093-12.069v-18.916h103.605v18.918c0 4.762 2.261 9.241 6.093 12.069 2.611 1.927 5.739 2.932 8.908 2.931 1.48 0 2.971-.219 4.42-.667l100.265-30.927c6.289-1.939 10.579-7.752 10.579-14.333v-228.51c.001-41.339-14.235-81.817-40.084-113.978zm-141.983-92.303 27.384 11.562-27.384 86.502-27.384-86.502zm-51.803 416.802v-58.958c0-6.581-4.29-12.394-10.579-14.333l-23.344-7.2v-95.693l35.802 8.334v47.353c0 8.284 6.716 15 15 15h69.848c8.284 0 15-6.716 15-15v-47.353l35.802-8.334v95.692l-23.344 7.2c-6.289 1.939-10.579 7.752-10.579 14.333v58.958h-103.606zm203.871 6.919-70.265 21.673v-76.479l23.344-7.2c6.289-1.939 10.579-7.752 10.579-14.333v-125.657c0-4.576-2.089-8.902-5.673-11.748s-8.276-3.9-12.728-2.862l-65.803 15.318c-6.792 1.581-11.599 7.635-11.599 14.609v44.262h-39.848v-44.262c0-6.974-4.807-13.028-11.599-14.609l-65.803-15.318c-4.453-1.038-9.142.016-12.728 2.862-3.584 2.845-5.673 7.171-5.673 11.748v125.656c0 6.582 4.29 12.394 10.579 14.333l23.344 7.2v76.479l-70.265-21.673v-217.44c0-35.035 11.576-67.953 33.479-95.196 19.377-24.103 45.837-41.836 75.228-50.591l29.06 91.799c1.974 6.235 7.761 10.473 14.301 10.473s12.327-4.238 14.301-10.473l29.06-91.799c29.397 8.757 55.861 26.494 75.239 50.604 21.895 27.241 33.468 60.155 33.468 95.184v217.44z"/></g></svg>
                        </span>
                        <span class="title">Champions</span>
                    </a>
                </li>

                <li class='active'>
                    <a href="traits.php">
                        <span class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 238.126 238.126" style="enable-background:new 0 0 238.126 238.126;" xml:space="preserve"><path d="M205.071,98.678c-1.194-2.728-3.891-4.49-6.869-4.49h-62.33l30.023-84.167c1.197-3.357-0.134-7.094-3.184-8.938c-3.052-1.845-6.979-1.287-9.395,1.333L34.411,131.355c-2.019,2.189-2.551,5.366-1.355,8.094c1.194,2.728,3.891,4.49,6.869,4.49h40.521c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5H57.043l82.365-89.315l-21.24,59.543c-0.818,2.297-0.432,4.849,0.974,6.842c1.405,1.993,3.73,3.178,6.169,3.178h55.772l-82.353,89.305l21.243-59.533c0.82-2.297,0.472-4.849-0.934-6.842s-3.691-3.179-6.13-3.179h-0.074c-3.525,0-6.455,2.432-7.25,5.709l-33.348,93.456c-1.198,3.357,0.133,7.094,3.183,8.938c1.205,0.729,2.547,1.083,3.878,1.083c2.039,0,4.055-0.831,5.517-2.416l118.899-128.938C205.734,104.582,206.266,101.406,205.071,98.678z"/></svg>
                        </span>
                        <span class="title">Traits</span>
                    </a>
                </li>

                <li>
                    <a href="../logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                    <input type="text" placeholder="Search Champion Here" id="searchInput" oninput="searchTrait()">
                    <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

            </div>

            <!-- ================ Traits List ================= -->
            <div class="details">
                <div class="traitsList"> 
                    <div class="cardHeader">
                        <h2>Traits</h2>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        
                        <tbody id="traitsTable">
                            <?php
                            include "../../backend/main.php";
                            $data = mysqli_query($conn, "select * from traits");
                            if(mysqli_num_rows($data) > 0) {
                                while($d = mysqli_fetch_array($data)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $d['name']; ?></td>
                                        <td><img src="<?php echo $d['image_url']; ?>" alt="image"></td>
                                        <td class='action'>
                                            <a href="#" data-id="<?php echo $d['id']; ?>" data-name="<?php echo $d['name']; ?>" data-imgurl="<?php echo $d['image_url']; ?>" class="btn btn-edit">Edit</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                    <tr class="no-data">
                                        <td colspan="3" style="text-align: center;">No data available</td>
                                    </tr>
                                    <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            
                <!-- Modal Edit User -->
                <div id="editUserModal" class="modal">
                    <div class="modal-content">
                        <span class="edit-close">&times;</span>
                        <h2>Edit User</h2>
                        <form id="editUserForm" method="post" action="edit.php">
                            <input type="hidden" name="id" id="traitId">
                            <table class='editTable'>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="trait_name" id="trait_name"></td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td><input type="text" name="image_url" id="image_url"></td>
                                </tr>
                                <tr>
                                    <td><button type="submit" class="btn btn-update">Update</button></td>
                                    <td></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <!-- =========== Scripts =========  -->
    <script>

        let list = document.querySelectorAll(".navigation li");

        function activeLink() {
        list.forEach((item) => {
            item.classList.remove("active");
        });
        this.classList.add("active");
        }

        list.forEach((item) => item.addEventListener("click", activeLink));

        // Menu Toggle
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        let main = document.querySelector(".main");

        toggle.onclick = function () {
            navigation.classList.toggle("active");
            main.classList.toggle("active");
        };

        // General modal handling
        function editUser(id, name, imgurl) {
            document.getElementById("traitId").value = id;
            document.getElementById("trait_name").value = name;
            document.getElementById("image_url").value = imgurl;
            var modal = document.getElementById("editUserModal"); 
            modal.style.display = "block";
        }

        function handleModal(modalId, btnSelector, closeClass) {
            var modal = document.getElementById(modalId);
            var btns = document.querySelectorAll(btnSelector);
            var span = document.getElementsByClassName(closeClass)[0];

            btns.forEach(function(btn) {
                btn.onclick = function() {
                    if(modalId === "editUserModal") {
                        var id = this.getAttribute('data-id');
                        var name = this.getAttribute('data-name');
                        var imgurl = this.getAttribute('data-imgurl');
                        editUser(id, name, imgurl);

                    }
                    modal.style.display = "block";
                }
            });
        
            span.onclick = function() {
                modal.style.display = "none";
            }
        
            window.onclick = function(event) {
                var modals = document.querySelectorAll('.modal');
                modals.forEach(function(modal) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                });
            }
        }

        handleModal("editUserModal", ".btn-edit", "edit-close");

        function searchTrait() {
            var input = document.getElementById('searchInput').value;

            // Buat request AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Update konten table dengan respons dari server
                    document.getElementById('traitsTable').innerHTML = xhr.responseText;
                    handleModal("editUserModal", ".btn-edit", "edit-close");
                }
            };
            xhr.send("search=" + encodeURIComponent(input));
        }
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>