<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>

    <h1 style="text-align:center;">Customer List</h1><hr>

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
            <th>List</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Order_Code</th>
            <th>Date</th>
            <th>Order_TK</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach($bd as $item)
     <tr>
       <td>{{$item->list}}</td>
       <td>{{$item->first_name}}</td>
       <td>{{$item->last_name}}</td>
       <td>{{$item->order_code}}</td>
       <td>{{$item->date}}</td>
       <td>{{$item->order_tk}}</td>
       <td>
           <button><a href="customers/delete/{{$item->list}}">Delete</a></button>
       </td>
     </tr>
     @endforeach
    </tbody>
</table>

</body>
</html>
