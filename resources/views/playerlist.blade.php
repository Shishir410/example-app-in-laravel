<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>

    <h1 style="text-align:center;">Player_List</h1><hr>

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
</style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Player_Name</th>
            <th>Jersey_Number</th>
            <th>Team_Name</th>
            <th>Player_Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach($hot as $item)
     <tr>
       <td>{{$item->id}}</td>
       <td>{{$item->name}}</td>
       <td>{{$item->jersey_number}}</td>
       <td>{{$item->team_name}}</td>
       <td>{{$item->player_description}}</td>
       <td>
           <button><a href="player/delete/{{$item->id}}">Delete</a></button>
           <button><a href="player/edit/{{$item->id}}/{{$item->name}}/{{$item->jersey_number}}/{{$item->team_name}}/{{$item->player_description}}">Edit</a></button>
           <button><a href="player/view/addview/{{$item->id}}">View</a></button>
       </td>
     </tr>
     @endforeach
    </tbody>
</table>

</body>
</html>
