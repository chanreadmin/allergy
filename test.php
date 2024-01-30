<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Textboxes</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    <form id="dynamic-form">
        <div id="textbox-container">
            <!-- Textboxes will be added here dynamically -->
        </div>
        <button type="button" id="add-textbox">Add Textbox</button>
        <button type="submit">Submit</button>
    </form>

    <script>
        $(document).ready(function () {
            // Initial loading of textboxes from PHP
            $.ajax({
                url: 'load_textboxes.php',
                type: 'GET',
                success: function (response) {
                    $('#textbox-container').html(response);
                }
            });

            // Adding a new textbox dynamically
            $('#add-textbox').on('click', function () {
                $('<input type="text" name="textbox[]">').appendTo('#textbox-container');
            });
        });
    </script>

</body>

</html>