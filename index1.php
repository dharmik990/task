<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>

<body>
    <div class="container">
        <div class="ablock" id="block">
            <button type="submit" name="A" class=" btn btn-primary a" value="A" id="a" onclick=" adda()">A</button>
        </div>
        <div class="bclas " id="block">
            <button type="submit" name="B" class="btn btn-primary b align-itrms-center" onclick="addb()" value="B" id="b"
                disabled>b</button>
        </div>
        <div class="cblock" id="block">
            <button type="submit" name="C" class="btn btn-primary c" id="c" value="C" onclick="addc()"
                disabled>C</button>
        </div>
        <div class="dblock" id="block">
            <button type="submit" name="D" class="btn btn-primary d" id="d" value="D" onclick="addd()"
                disabled>D</button>
        </div>
        <div id="box" class="box">

            <p id="res" class="text-align"></p>
        </div>
        <p id="clicks"></p>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    count = 0

     $("#a").click(function(){       
        count++
        if(count >= 3){
            $('#a').removeAttr('onclick')
            $('#a').off('click')
            $('#a').attr('disabled')
            console.log(count)
        }

    })
    function adda() {
        $('#a').prop('disabled', true)
        $('#b').prop('disabled', false)
    }
    
    function addb() {
        $('#b').prop('disabled', true)
        $('#c').prop('disabled', false)
    }
    
    function addc() {
        $('#c').prop('disabled', true)
        $('#d').prop('disabled', false)
    }

    
    function addd() {
        $('#d').prop('disabled', true)
       $('#a').prop('disabled', false)
    }
  

    $(document).ready(function() {
        $('container').ready(function() {
            $("button").click(function() {
                var button = this.value;
                $.ajax({
                    url: 'fetch.php',
                    type: 'GET',
                    data: {
                        id: button
                    },
                    success: function(data) {
                        $('#res').html(data).show().fadeOut(3000);

                    }
                })
            })
        })


    })
    </script>
</body>

</html>