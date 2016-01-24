<?php
    require_once "../includes/engine.php";

    if(!session::has('username')){
        header('Location:/?noSession');
    }

    $localvars->set('user', htmlSanitize(session::get('username')));

    templates::display('header');
?>
<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="picture database">
                <img src="/includes/img/databasedesign.png" alt="computer stuff" />
            </div>
            <div class="intro">
                <h2> Databases! </h2>
                <p> Databases are key in the storage of data within web applications.  Most of the time your application is going to have a need to store data and use it somewhere else.  In many applications this is done with a database.  Databases often have CRUD aspects to them, which makes them responsible for CREATE, READ, UPDATE, AND DELETING data. Both Meteor and EngineAPI can do handle this in different ways. </p>

                <h3> Jump To </h3>
                <a href="#lessons" class="btn-primary"> Lessons </a>
                <a href="#survey" class="btn-primary"> Survey  </a>
            </div>
        </div>
    </div>
</section>
<section class="wrapper section">
    <div class="container">
        <div class="row">
            <div class="databaseExample">
                <h2> Example Employee Data </h2>
                <p> The table to the right is an example of information we might collection on our employees and have stored into a database.  This example is the example we are going to use in the demonstrations in each framework.  Imagine each employee at our company having a table of information that correlates to the columns we specified.
                </p>

                <p>
                    In our examples we are going to learn how to create, read, update, and delete information from our databases.  All of the common CRUD opperations that take place in the application.
                </p>
            </div>

            <div class="databaseExample">
                <table>
                    <thead><tr><th>Employees</th></tr></thead>
                    <tbody>
                        <tr>
                            <td>EmployeeID</td>
                        </tr>
                        <tr>
                            <td>Birthday</td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                        </tr>
                        <tr>
                            <td>Hire Date</td>
                        </tr>
                        <tr>
                            <td>Salary </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div id="lessons" class="row">
            <div class="meteor">
                <div class="imgHeader">
                    <img class="meteorLogo" src="/includes/img/meteor.png" />
                </div>

                <h3 class="element-invisible"> Meteor JS </h3>

                <p>
                   Databases in Meteor run off of MongoDB, a JavaScript library that is known for fast transactions and NoSQL interfaces.  This is important because many databases before this ran on SQL or Structured Query Langauge.  Understanding that Mongo is JavaScript it understands JSON or JavaScript Object Notation.  This is the same concept as associative arrays in PHP.
                </p>

                <div class="code-sample">
                    <h4> Creating New Databases </h4>
                    <p> The database creation in Meteor relies on creating collections of data or collections of JSON Objects.  </p>

                    <?php recurseInsert('codeSnippets/collections.php','php') ?>

                    <h4> Reading from database </h4>

                    <p> There are multiple ways to read information from a meteor database.  The important part is to find the one that suits your needs.  Lets say your looking for a paricular peice of information.  The <strong> findOne() </strong> method looks for the first peice of data in the database that matches the object your searching for, also it will return as a null object if there is nothing that matches.  The <strong> find() </strong> method can pull all items, or a group of specific items from a database.  Below are examples of how to get this information from the database. <br><br><em> Note:: This will not get display the data, this is just reading it. </em>
                    </p>

                    <?php recurseInsert('codeSnippets/readMongo.php','php') ?>

                    <h4> Creating and Updating </h4>

                    <p> Similar to reading, except this inserts a JSON Object back into the database.  The Object should be similar to the others in the database, but may be different and will not cause errors.  The problem comes then when calling the object later and trying to read fields that may or may not exsist.  </p>

                    <?php recurseInsert('codeSnippets/insertUpdateMongo.php') ?>

                    <h4> Delete </h4>

                    <p> The delete method works in similar ways as the others.  The only caveat is that it can not be sent from the client side using Mini-Mongo unless you're deleting the record by its ID.  This is something that people who are used to using SQL.</p>

                    <?php recurseInsert('codeSnippets/deleteMongo.php') ?>
                </div>

                <h4> Meteor Databases Examples </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/1fyyhcKgLJo?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW" frameborder="0" allowfullscreen></iframe>
                </div>

                <h4> NoSQL Schema Creation Example </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/EfT1ICPI5uQ?list=PLTBgNwvH0GyzKwaOMM6elwTvZnQ2fXahW" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="engine">
                <div class="imgHeader">
                    <img class="engineLogo" src="/includes/img/engine.png" />
                </div>
                <h3 class="element-invisible"> EngineAPI </h3>

                <p>
                  Databases in EngineAPI run on MySQL, which uses SQL(Structured Query Langauge) to do the basic crud tasks associated with databases.  The databases are structured meaning they need to be designed to very specific tasks and given very specific types of information.  You'll have to be able to understand and read SQL and PHP inorder to use databases in this stack.
                </p>

                <div class="code-sample">
                    <h4> Creating New Databases </h4>
                    <p> In EngineAPI, we need to define the information to create in the database and how specfically we plan on structuring our information.  Learning SQL is easy, but remembering certain tasks can be difficult, use w3Schools <a href="http://www.w3schools.com/sql/default.asp" target="_blank" style="target-new: tab;"> SQL Tutorial</a> as a good reference.</p>

                    <?php recurseInsert('codeSnippets/createDB.php','php') ?>

                    <h4> Reading from database </h4>

                    <p> For different data and different types of calls you can use a number of types of statements and what are called joins for joining different tables.  This is going to be a very simple example that allows us to look at the syntax of reading a database specifically from PHP.  So our calls will be in SQL, but we will be writing them from engineAPI using PHP.
                    </p>

                    <?php recurseInsert('codeSnippets/readSQL.php','php') ?>

                    <h4> Creating </h4>

                    <p> Inserting databases works much in the same way as the reading, except that the SQL statement is different and there is an expectation of an array of data to go into the database. </p>

                    <?php recurseInsert('codeSnippets/insertSQL.php') ?>

                    <h4> Delete </h4>
                    <p> The delete statement works in similar ways as the others.</p>

                    <?php recurseInsert('codeSnippets/deleteSQL.php') ?>

                </div>

                <h4> Setting up SQL in EngineAPI Tutorial </h4>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/hOB19Km-eg0?list=PLTBgNwvH0GyxEgi9_BOOa-38ZSGqoAaaS" frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="survey" class="survey wrapper">
    <div class="container">
             <?php recurseInsert('survey/index.php','php') ?>
    </div>
</section>

<?php
    templates::display('footer');
?>