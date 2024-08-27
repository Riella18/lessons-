<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
    <style>
        /* Adding borders to the table cells */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        /* Adding some padding for better readability */
        th, td {
            padding: 10px;
        }

        /* Aligning the buttons */
        .button-container {
            display: flex;
            justify-content: space-between; /* This pushes the buttons to opposite sides */
            margin-bottom: 10px; /* Adds space below the buttons */
        }

        .btn-success {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <center><h1>Todo list</h1></center>
            <div class="col-md-10 col-md-offset-1"></div>
            
            <!-- Button container with flexbox for alignment -->
            <div class="button-container">
                <button type="button" class="btn btn-success">Add Task</button> <!-- Add Task button -->
                <button type="button" class="btn btn-default">Print</button> <!-- Print button moved to the end -->
            </div>
            
            <table class="table">
                <hr>
                <thead>
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">Task</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><button type="button" class="btn btn-success">Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
