<?php
//connect to database
$connect = mysqli_connect("localhost", "root", "pwdpwd", "pet_shop");

//determine which page number vistor is  currently on
if (!isset($_GET['page'])) {$page = 1;} else { $page = $_GET['page'];}

//define how many results you want per page
$results_per_page = 5;

//find out the number of results stored in databases
$res = mysqli_query($connect, "SELECT*FROM GROOMING");

$numer_of_results = mysqli_num_rows($res);

//determine number of total pages available
$number_of_pages = ceil($numer_of_results/$results_per_page);

//determine the sql LIMIT starting number for the results on the dispalying page
$this_page_first_result = ($page-1)*$results_per_page;

//retrieve selected results from database and display them on page
$sql = "SELECT * FROM GROOMING LIMIT $this_page_first_result,$results_per_page";

$res = mysqli_query($connect, $sql);

$rows = array();
//display the links to the pages
while ($row = mysqli_fetch_assoc($res)) {$rows[] = $row;}

//determine previous and next page

$next = $page+1;

$prev = $page-1;

if ($prev <= 1) {$prev = 1;}

if ($next >= $number_of_pages) {$next = $number_of_pages;}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>admin login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="index">





<nav class="nav">

<ul class="nav-ul">
  <li><a href="../index.php">StoreHome</a></li>
  <li><a href="../grooming.php">Add</a></li>
  <li><a href="logout.php">Logu Out</a></li>
</ul>
</nav>



<div class="table-responsive">
<table id="editable_table" class="table table-bordered table-striped">
<tr>
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Phone</th>
<th>Email</th>
<th>Pet type</th>
<th>Breed</th>
<th>Pet Name</th>
<th>Pet Age</th>
<th>date</th>



</tr>

<?foreach ($rows as $k => $v):?>
<form action="index.php" method="post">
<tr>
<td><?php echo $v['id'];?></td>
<td><?php echo $v['fname'];?></td>
<td><?php echo $v['lname'];?></td>
<td><?php echo $v['address'];?></td>
<td><?php echo $v['city'];?></td>
<td><?php echo $v['state'];?></td>
<td><?php echo $v['zip'];?></td>
<td><?php echo $v['phone'];?></td>
<td><?php echo $v['email'];?></td>
<td><?php echo $v['pettype'];?></td>
<td><?php echo $v['breed'];?></td>
<td><?php echo $v['pname'];?></td>
<td><?php echo $v['age'];?></td>
<td><?php echo $v['date'];?></td>

</tr>
</form>
<?endforeach;?>
</table>

<?php
for ($page = 1; $page <= $number_of_pages; $page++) {echo '<a class="btn btn-default" href="index.php?page='.$page.'">'.$page.'</a>';}
?>

      <ul class="pager">

        <li class="previous"><a href="index.php?page=1">&larr; First</a></li>



        <li><a href="index.php?page=<?php echo $prev;?>">Previous</a></li>


        <li><a href="index.php?page=<?php echo $next;?>">Next</a></li>


        <li class="next"><a href="index.php?page=<?php echo $number_of_pages;?>">Last &rarr;
</a></li>
      </ul>

</div>



</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery.tabledit.min.js"></script>

<script>
$(document).ready(function(){
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'fname'], [2, 'lname'], [3, 'address'], [4, 'city'], [5, 'state'],
        [6, 'zip'], [7, 'phone'], [8, 'email'], [9, 'pettype'], [10, 'breed'], [11, 'pname'], [12, 'age'], [13, 'date']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });

});

 </script>

