<?php
// Fetch the data from the API
$response = wp_remote_get('https://jsonplaceholder.typicode.com/posts');
if (is_wp_error($response)) {
    echo 'Error fetching data.';
    exit;
}

$posts = json_decode(wp_remote_retrieve_body($response), true);
if (empty($posts)) {
    echo 'No data found.';
    exit;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>API Data List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .wrap {
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color:#FF7D29;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        table thead tr{
            background-color: #f2f2f2;
            border: #ffffff;
        }
        table th, table td {
            padding: 12px 15px;
        }
        table th {
            background-color: #FF7D29;
            color: #ffffff;
            text-transform: uppercase;
            
        }
        table tr {
            border-bottom: 1px solid black;
        }
        table tr:nth-of-type(even) {
            background-color: #f9f9f9;
        }
        table tr:hover {
            background-color: #f1f1f1;
        }
        table td {
            border-right: 1px solid black;;
            background-color: #FEFFD2;
        }
        table td:last-child {
            border-right: none;
        }
        .container {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>API Data List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <td><?php echo esc_html($post['id']); ?></td>
                        <td><?php echo esc_html($post['title']); ?></td>
                        <td><?php echo esc_html($post['body']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php

