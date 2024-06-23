<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../styles/traits.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">TFT</span>
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
                    <a href="../users/users.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
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
                        
                        <tbody>
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
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>