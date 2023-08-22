<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Project Request</title>
    <style>
       table, tr,th,td{
            border: 1px solid;
            text-align: left;
            border-collapse: collapse;
        }
        td,th{
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Job ID</th>
            <th>PO</th>
            <th>Customer</th>
            <th>Budget</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>{{$data['job_id']}}</td>
            <td>{{$data['po_number']}}</td>
            <td>{{$data['customer']}}</td>
            <td>{{$data['budget']}}</td>
            <td>{{$data['title']}}</td>
            <td>{{$data['info']}}</td>
        </tr>
    </table>
</body>
</html>