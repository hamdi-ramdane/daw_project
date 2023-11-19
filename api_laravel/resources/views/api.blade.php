<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/api.css">
    <title>API routes</title>
</head>
<body>
    <div class="grid">
    <table>
        <tr>
            <td>Route</td>
            <td>{{ $_SERVER["HTTP_HOST"] }}/api/{table}</td>
        </tr>
        <tr>
            <td>Method</td>
            <td>GET</td>
        </tr>
        <tr>
            <td>Required Data</td>
            <td>NONE</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Route</td>
            <td>{{ $_SERVER["HTTP_HOST"] }}/api/register</td>
        </tr>
        <tr>
            <td>Method</td>
            <td>POST</td>
        </tr>
        <tr>
            <td>Required Data</td>
            <td>
                <h4>firstName</h4>
                <h4>lastName</h4>
                <h4>username</h4>
                <h4>email</h4>
                <h4>password</h4>
                <h4>gender</h4>
                <h4>dateOfBirth</h4>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Route</td>
            <td>{{ $_SERVER["HTTP_HOST"] }}/api/login</td>
        </tr>
        <tr>
            <td>Method</td>
            <td>POST</td>
        </tr>
        <tr>
            <td>Required Data</td>
            <td>
                <h4>email</h4>
                <h4>password</h4>
            </td>
        </tr>
    </table>
    </div>
</body>
</html>