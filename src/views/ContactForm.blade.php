<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <table>
        <form action="addContact" method="POST">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>Message</td>
                <td>
                    <textarea name="message"></textarea>
                </td>
            </tr>
            <tr>                
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>