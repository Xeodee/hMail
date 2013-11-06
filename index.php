<html>
<head>
    <title>Xeo's gonna get hannah to college.</title>
    <link rel="stylesheet" href="css/content.css" media="all"/>
    <link rel="stylesheet" href="css/grids.css" media="all"/>
    <link rel="stylesheet" href="css/mod.css" media="all"/>
    <link rel="stylesheet" href="css/template.css" media="all"/>
</head>
<body>
<div class="body">
    <div class="page">
        <div class="main">

            <form action="xeo.php">
                <p>lol wut?</p>
                <button type="submit" autofocus="true">GAS PEDAL!!!</button>
            </form>
            <br>
            <h1>Add Your Targets</h1>

            <div class="line">

            <div class="unit size1of5">
                <form action="" id="newCollegeForm">
                <ul>
                    <li><label for="cName">Coach Name</label></li>
                    <li class="error name nomatch"><p class="red">Can only contain letters</p></li>
                    <li class="error name empty"><p class="red">This field is empty</p></li>
                    <li><input type="text" id="cName"/></li>
                    <li><label for="cEmail">Coach e-Mail</label></li>
                    <li class="error coachEmail nomatch"><p class="red">Invalid e-mail format</p></li>
                    <li class="error coachEmail empty"><p class="red">This field is empty</p></li>
                    <li><input type="text" id="cEmail"/></li>
                    <li><label for="college">College</label></li>
                    <li class="error collegeName nomatch"><p class="red">Can only contain letters</p></li>
                    <li class="error collegeName empty"><p class="red">This field is empty</p></li>
                    <li><input type="text" id="college"/></li>
                    <li><label for="mascot">Mascot</label></li>
                    <li class="error mascotName nomatch"><p class="red">Can only contain letters</p></li>
                    <li class="error mascotName empty"><p class="red">This field is empty</p></li>
                    <li><input type="text" id="mascot"/></li>
                    <li>&nbsp;</li>
                    <li><input type="submit" value="Add Item" id="addCollege"/></li>
                </ul>
                </form>
            </div>

             <div class="unit size2of5">
                 <p>test size</p>
             </div>
                <div class="lastUnit size2of5">
                    <p>CONSOLE</p>
                </div>

            </div>
        </div>
    </div>
    <script src="scripts/jQuery.1.10.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function(){
               $('#cName, #cEmail, #college, #mascot').focusin(function(){
                   var currentVal = $(this).val();
                   $(this).on().change(function(){
                       console.log($(this).val());
                   });
               });
            });
    </script>
</body>


</html>

<!--<schools>
    <schoolData>
        <name>Dick Van Dyke</name>
        <schoolName>Cal Barkley</schoolName>
        <email>dvandyke@berkley.edu</email>
        <mascot>California Bears</mascot>
    </schoolData>-->


<!--<section class="unit size1of2">
                    <p>stuff</p>
                </section>

                <section class="lastUnit size1of2">
                    <h3></h3>
                    <div>
                        <label for="recruiterSchoolDataName">Coaches Name: <input id="recruiterSchoolDataName" type="text"/></label>
                        <label for="recruiterSchoolName">College: <input type="text"/></label>
                        <label for="recruiterEmail">Recruiter Email: <input type="text"/></label>
                        <label for="recruiterMascot">Mascot: <input type="text"/></label>
                    </div>

                </section>-->