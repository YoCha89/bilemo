Project Name : Bilemo <br/>

Bilemo is an API developped for the client of the same name that allows him to manage the restricted access of its products catalog. The API offers endpoints that allows its clients to manage their own API's list of users, those users can access a list of cellphone products.<br/>

<ul>
    <li>Bilemo's clients can add, remove and see the details of their users</li>
    <li> The users can access the Bilemo cellphone list and get the spec details of one specific cellphone</li>
</ul>

prerequisite :<br/>

<ul>
    <li> PHP : 8.1.7</li>
    <li> Apache : 2.4.47 </li>
    <li> SQL : 5.7.33 </li>
    <li> Developped with Laragon </li>
</ul>

Installing the app and make work as an API service:<br/>

<ol>    
    <li>Download the code files in your projects folder</li>
    <li>Throught your CLI, run "composer install" to get the needed dependances</li>
    <li>Create a database named : bilemo</li>
    <li>Back throught your CLI, run "php bin/console make:migration"</li>
    <li>Once the migration is generated, run "php bin/console doctrine:migrations:migrate" to build your database according to the entities schemes</li>
    <li>Execute the bilemo.sql file included with the project file to populate the database</li>
    <li>Generate you environment's JWT pair of safety token by running the CLI command : php bin/console lexik:jwt:generate-keypair.</li>
    <li>Open the CLI associated with your dev environment and run the following command : symfony server:start.</li>
    <li>You can now access the swagger interface of the API by adding /api to your url for this project</li>
</ol>

© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About