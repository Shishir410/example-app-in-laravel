<!DOCTYPE html>
<html>
<title>Students List</title>

<head>
    <h1 style="text-align:center;">Students List</h1><hr>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
ul{
    list-style: none;
    height: 100px;
}
ul:nth-child(even){
}
ul>li{
    float: left;
    padding: 10px;
    border: 1px solid black;
}
</style>
</head>

<body>

<h2>Now our university students Name:</h2>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach($tomi as $item)
     <tr>
       <td>{{$item->Id}}</td>
       <td>{{$item->Name}}</td>
       <td>{{$item->Email}}</td>
       <td>
           <button><a href="student/insert/{{$item->Id}}/{{$item->Name}}/{{$item->Email}}">Insert</a></button>
           <button><a href="student/edit/{{$item->Id}}">Edit</a></button>
           <button><a href="student/delete/{{$item->Id}}">Delete</a></button>
       </td>
     </tr>
     @endforeach
    </tbody>
</table>


</body>
</html>
