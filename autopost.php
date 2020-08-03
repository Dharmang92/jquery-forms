<html>

<head>
    <title>
        Dharmang Gajjar
    </title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
    <form id="target">
        <input type="text" value="something" name="val" />
        <img style="display: none;" id="spinner" src="spinner.gif" width="50px" height="50px" alt="spinner">
    </form>

    <div id="result"></div>


    <!-- This script should be below the result and target form else it won't be able to find it. -->
    <script>
        $("#target").change(function(event) {
            $("#spinner").show();
            var form = $("#target");
            var txt = form.find('input[name="val"]').val();
            console.log(txt);
            window.console && console.log("Sending POST");
            // post to, post data, function that gets called when the post returns.
            $.post("autoecho.php", {
                "val": txt,
                "status": "recieved"
            }, function(data) { // response
                console.log(data);
                $("#spinner").hide();
                // post response = data.
                $("#result").empty().append(data); // empty() the data as 2nd time it will have something.
            });
            // getting error -> error is not a function.
            /*error(function() {
                            console.log("error");
                        });*/
            // supression of default behaviour.
        });
    </script>

</body>

</html>