<?php

//insert.php

$connect = new PDO("mysql:host=localhost;dbname=quicksol", "root", "");
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Add Remove Dynamic HTML Fields using JQuery Plugin in PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="repeater.js" type="text/javascript"></script>
    </head>
<body>
    <div class="container">
        <br />
        <h3 align="center">Add Skills</h3>
        <br />
        <div style="width:100%; max-width: 600px; margin:0 auto;">
            <div class="panel panel-default">
                <div class="panel-heading">Add Details</div>
                    <div class="panel-body">
                        <span id="success_result"></span>
                        <form method="post" id="repeater_form">
                            <div class="form-group">
                                <label>Enter Programmer Name</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>
                            <div id="repeater">
                                <div class="repeater-heading" >
                                    <button type="button" class="btn btn-warning repeater-add-btn">Add More Skill</button>
                                </div>
                                <div class="clearfix"></div>
                                    <div class="items" data-group="programming_languages">
                                        <div class="item-content">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <label>Select Programming Skill</label>
                                                        <select data-skip-name="true" data-name="skill[]" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="PHP">PHP</option>
                                                        <option value="Mysql">Mysql</option>
                                                        <option value="JQuery">JQuery</option>
                                                        <option value="Ajax">Ajax</option>
                                                        <option value="Html">HTML</option>
                                                        <option value="Laravel">Laravel</option>
                                                        <option value="Bootstrap">Bootstrap</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3" style="margin-top:30px;" align="center">
                                                        <button id="remove-btn" onclick="$(this).parents('.items').remove()" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
                                                    </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                    <div class="form-group" align="center">
                                        <br /><br />
                                        <input type="submit" name="insert" class="btn btn-success" value="insert" />
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="displayDataTable"></div>
    </div>

    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
 
    <script>

        function displayData(){
            var displayData="true";
            $.ajax({
                url:"display.php",
                type:'post',
                data:{
                    displaySend:displayData
                },
                success:function(data,status)
                {
                    $('#displayDataTable').html(data);
                }
            });
        }
    $(document).ready(function(){

        $('#repeater').createRepeater();

        $('#repeater_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"insert.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(data)
                {
                    $('#repeater_form')[0].reset();
                    $('#repeater').createRepeater();
                    $('#success_result').html(data);
                }
            })
        });

    });
        
    </script>
    </body>
</html>
