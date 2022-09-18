<?php 
include 'dbconnect.php';
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <title>First Project in Php</title>
 <link rel="stylesheet" href="userinterface.css">
</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<body class="p-3 m-0 border-0 bd-example">
<div class="page">
    <div class="navbar">
        <input type="search" placeholder="Search">
    </div>
    <div class="navbar2">
    <ul class="nav-links">
        <li><a href="#">Dashboard</a></li>
        <li class="upward"><a href="#">My Profile</a></li>
    <li class="center"><a href="#">Explore</a></li>
    <li class="forward"><a href="#">Feedback</a></li>
</div>
        <div class="font">
            <h1><i>Create a blog without limit<i></h1>
        </div>
  </ul>
</div>
<!-- Modal -->

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        
        <form action="   " method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="desc">Note Description</label>
              <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div> 
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>



  <div class="collapse" id="navbarToggleExternalContent" style="">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Are You ready To Change Your Self. </h5>
      <span style="color:white">Write down Your daily Gols..</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="contaner ">
    <div class="my-2 p-2">
      <h2> <label for="exampleFormControlInput1" class="form-label">Add a Note</label></h2>
      <form action="firstproject.php" method="post">
        <label for="fornote">Type Note Here</label>
        <input type="text" name="typehere" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="my-2 p-2">
      <h3> <label for="exampleFormControlTextarea1" class="form-label">Note Descreption</label>
      </h3>
      <textarea class="form-control" name="notehere" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="button p-2">
      <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
  </div>
  </form>
  <div class="table p-2">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>S.No</th>
          <th scope="col">note</th>
          <th scope="col">Descreption</th>
          <th scope="col">Action</th>

        </tr>
      </thead>


      <?php 
                
                    $sql = "SELECT * FROM `notepad` ";
                    $result = mysqli_query($conn , $sql);
                    $num = 1;
                    while ($row = mysqli_fetch_assoc($result)) 
                    {    
                        //echo '<pre>';print_r($row);die;  ?>
      <tr>
        <td>
          <?php echo $num ?>
        </td>
      <td>
          <?php echo $row['typehere'] ?>
      </td>
      <td>
          <?php echo $row['notehere'] ?>
        </td>
        <td> <button class='edit btn btn-sm btn-primary' id=".$row['typehere'].">Edit</button>
        <td> <button class='delete btn btn-sm btn-primary' id=".$row['notehere'].">Delete</button> </td>
      </tr>
      <?php $num++;  } ?>

    </table>
  </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();

  });
</script>
<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {
      console.log("edit ");
      tr = e.target.parentNode.parentNode;
      title = tr.getElementsByTagName("td")[0].innerText;
      description = tr.getElementsByTagName("td")[1].innerText;
      console.log(title, description);
      titleEdit.value = title;
      descriptionEdit.value = description;
      snoEdit.value = e.target.id;
      console.log(e.target.id)
      $('#editModal').modal('toggle');
    })
  })

  deletes = document.getElementsByClassName('delete');
  Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {
      console.log("edit ");
      sno = e.target.id.substr(1);

      if (confirm("Are you sure you want to delete this note!")) {
        console.log("yes");
       
      }
      else {
        console.log("no");
      }
    })
  })
</script>
    <div class="page">
    <div class="navbar">
        <input type="search" placeholder="Search">
    </div>
    <div class="navbar2">
    <ul class="nav-links">
        <li><a href="#">Dashboard</a></li>
        <li class="upward"><a href="#">My Profile</a></li>
    <li class="center"><a href="#">Explore</a></li>
    <li class="forward"><a href="#">Feedback</a></li>
</div>
        <div class="font">
            <h1><i>Create a blog without limit<i></h1>
        </div>
  </ul>
</div>

</body>
</html>




















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>