<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `owners` WHERE CONCAT(`id`, `fname`, `lname`, `contact`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}
 function filterTable($query)
{
    $connect = mysqli_connect('localhost', 'root', '',"waterbill");
    $result = mysqli_query($connect, $query);
    return $result;
}
?>