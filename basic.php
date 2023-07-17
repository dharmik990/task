<!DOCTYPE html>
<html>
    <head>
        <title>Enable and Disable Click Event in jQuery</title>
    </head>
    <body>
        <input type="checkbox" id="chkbox" />Disable Click
        <button id="submit">Click Me</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script type="text/javascript">
        $('document').ready(function() {
            $('#chkbox').on('change', function(){
                if($(this).prop('checked'))
                    $('#submit').off('click');
                else
                    $('#submit').on('click', clickButton);
            });
            
            $('#submit').on('click', clickButton);
            
            function clickButton() {
                alert('Button clicked!');
            }
        });
        </script>
    </body>
</html>