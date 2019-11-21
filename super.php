<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Hello World</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet"  href="css/super.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
      <script type="text/javascript">
         $(function () {
           $('.navbar-toggle-sidebar').click(function () {
             $('.navbar-nav').toggleClass('slide-in');
             $('.side-body').toggleClass('body-slide-in');
             $('#search').removeClass('in').addClass('collapse').slideUp(200);
           });
         
           $('#search-trigger').click(function () {
             $('.navbar-nav').removeClass('slide-in');
             $('.side-body').removeClass('body-slide-in');
             $('.search-input').focus();
           });
         });
         
         $(document).ready(function() {
           $('#example').DataTable( {
               dom: 'Bfrtip',
               buttons: [
                   'copy', 'csv', 'excel', 'pdf', 'print'
               ]
           } );
         } );
      </script>
      <style type="text/css"></style>
   </head>
   <body>
      <nav class="navbar navbar-default navbar-static-top">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
               MENU
               </button>
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">
               Administrator
               </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <form class="navbar-form navbar-left" method="GET" role="search">
                  <div class="form-group">
                     <input type="text" name="q" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
               </form>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
                  <li class="dropdown ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     Account
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">SETTINGS</li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class=""><a href="#">Other Link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <div class="container-fluid main-container">
      <div class="col-md-2 sidebar">
         <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
               <nav class="navbar navbar-default" role="navigation">
                  <!-- Main Menu -->
                  <div class="side-menu-container">
                     <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li>
                        <!-- Dropdown-->
                        <li class="panel panel-default" id="dropdown">
                           <a data-toggle="collapse" href="#dropdown-lvl1">
                           <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                           </a>
                           <!-- Dropdown level 1 -->
                           <div id="dropdown-lvl1" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <ul class="nav navbar-nav">
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <li><a href="#">Link</a></li>
                                    <!-- Dropdown level 2 -->
                                    <li class="panel panel-default" id="dropdown">
                                       <a data-toggle="collapse" href="#dropdown-lvl2">
                                       <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                       </a>
                                       <div id="dropdown-lvl2" class="panel-collapse collapse">
                                          <div class="panel-body">
                                             <ul class="nav navbar-nav">
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                                <li><a href="#">Link</a></li>
                                             </ul>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
               </nav>
            </div>
         </div>
      </div>
      <div class="col-md-10 content">
         <div class="panel panel-default">
            <div class="panel-heading">
               Workshops
            </div>
            <div class="panel-body">
<?php

 ?>     <br>
               <form action="excel_uploader.php" enctype="multipart/form-data"  method="post" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
     <select name="cat" class="form-control">
  <option value="WORKSHOP">WORKSHOP</option>
  <option value="ACHIEVEMENT">ACHIEVEMENT</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 control-label">Choose Excel File</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputPassword" name="file" placeholder="Password">
    </div>
  </div>
    <div class="form-group">
    <input class="form-control small"  type="submit" >
  </div>
</form>
            </div>
          </div>
            <div class="panel panel-default">
               <div class="panel-heading">
                  Dashboard
               </div>
               <div class="panel-body">
                  <table id="example" class="display" style="width:100%">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                           <th>Salary</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>$320,800</td>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                        </tr>
                        <tr>
                           <td>Garrett Winters</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>63</td>
                           <td>2011/07/25</td>
                           <td>$170,750</td>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Ashton Cox</td>
                           <td>Junior Technical Author</td>
                           <td>San Francisco</td>
                           <td>66</td>
                           <td>2009/01/12</td>
                           <td>$86,000</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Cedric Kelly</td>
                           <td>Senior Javascript Developer</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2012/03/29</td>
                           <td>$433,060</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Airi Satou</td>
                           <td>Accountant</td>
                           <td>Tokyo</td>
                           <td>33</td>
                           <td>2008/11/28</td>
                           <td>$162,700</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Brielle Williamson</td>
                           <td>Integration Specialist</td>
                           <td>New York</td>
                           <td>61</td>
                           <td>2012/12/02</td>
                           <td>$372,000</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Herrod Chandler</td>
                           <td>Sales Assistant</td>
                           <td>San Francisco</td>
                           <td>59</td>
                           <td>2012/08/06</td>
                           <td>$137,500</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Rhona Davidson</td>
                           <td>Integration Specialist</td>
                           <td>Tokyo</td>
                           <td>55</td>
                           <td>2010/10/14</td>
                           <td>$327,900</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Colleen Hurst</td>
                           <td>Javascript Developer</td>
                           <td>San Francisco</td>
                           <td>39</td>
                           <td>2009/09/15</td>
                           <td>$205,500</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Sonya Frost</td>
                           <td>Software Engineer</td>
                           <td>Edinburgh</td>
                           <td>23</td>
                           <td>2008/12/13</td>
                           <td>$103,600</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Jena Gaines</td>
                           <td>Office Manager</td>
                           <td>London</td>
                           <td>30</td>
                           <td>2008/12/19</td>
                           <td>$90,560</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Quinn Flynn</td>
                           <td>Support Lead</td>
                           <td>Edinburgh</td>
                           <td>22</td>
                           <td>2013/03/03</td>
                           <td>$342,000</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Charde Marshall</td>
                           <td>Regional Director</td>
                           <td>San Francisco</td>
                           <td>36</td>
                           <td>2008/10/16</td>
                           <td>$470,600</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Haley Kennedy</td>
                           <td>Senior Marketing Designer</td>
                           <td>London</td>
                           <td>43</td>
                           <td>2012/12/18</td>
                           <td>$313,500</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Tatyana Fitzpatrick</td>
                           <td>Regional Director</td>
                           <td>London</td>
                           <td>19</td>
                           <td>2010/03/17</td>
                           <td>$385,750</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Michael Silva</td>
                           <td>Marketing Designer</td>
                           <td>London</td>
                           <td>66</td>
                           <td>2012/11/27</td>
                           <td>$198,500</td>
                        </tr>
                        <tr>
                           <td>Tiger Nixon</td>
                           <td>System Architect</td>
                           <td>Edinburgh</td>
                           <td>61</td>
                           <td>2011/04/25</td>
                           <td>Paul Byrd</td>
                           <td>Chief Financial Officer (CFO)</td>
                           <td>New York</td>
                           <td>64</td>
                           <td>2010/06/09</td>
                           <td>$725,000</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Name</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                           <th>Position</th>
                           <th>Office</th>
                           <th>Age</th>
                           <th>Start date</th>
                           <th>Salary</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
            </div>
         </div>
         <footer class="pull-left footer">
            <p class="col-md-12">
            <hr class="divider">
            Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
            </p>
         </footer>
      </div>
   </body>
</html>