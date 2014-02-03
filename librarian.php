<!DOCTYPE html>
<!-- -->
<html lang="en">
    <head>
        <title></title>

        <style>
            .container {
                margin-top: 50px;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .container:before,
            .container:after {
              display: table;
              content: " ";
            }

            .container:after {
              clear: both;
            }

            .container:before,
            .container:after {
              display: table;
              content: " ";
            }

            .container:after {
              clear: both;
            }

            @media (min-width: 768px) {
              .container {
                width: 750px;
              }
            }

            @media (min-width: 992px) {
              .container {
                width: 970px;
              }
            }

            @media (min-width: 1200px) {
              .container {
                width: 1170px;
              }
            }

            .row {
              margin-right: -15px;
              margin-left: -15px;
            }

            .row:before,
            .row:after {
              display: table;
              content: " ";
            }

            .row:after {
              clear: both;
            }

            .row:before,
            .row:after {
              display: table;
              content: " ";
            }

            .row:after {
              clear: both;
            }

            .col-xs-1,      
            .col-sm-1,
            .col-md-1,
            .col-lg-1,
            .col-xs-2,
            .col-sm-2,
            .col-md-2,
            .col-lg-2,
            .col-xs-3,
            .col-sm-3,
            .col-md-3,
            .col-lg-3,
            .col-xs-4,
            .col-sm-4,
            .col-md-4,
            .col-lg-4,
            .col-xs-5,
            .col-sm-5,
            .col-md-5,
            .col-lg-5,
            .col-xs-6,
            .col-sm-6,
            .col-md-6,
            .col-lg-6,
            .col-xs-7,
            .col-sm-7,
            .col-md-7,
            .col-lg-7,
            .col-xs-8,
            .col-sm-8,
            .col-md-8,
            .col-lg-8,
            .col-xs-9,
            .col-sm-9,
            .col-md-9,
            .col-lg-9,
            .col-xs-10,
            .col-sm-10,
            .col-md-10,
            .col-lg-10,
            .col-xs-11,
            .col-sm-11,
            .col-md-11,
            .col-lg-11,
            .col-xs-12,
            .col-sm-12,
            .col-md-12,
            .col-lg-12 {
              position: relative;
              min-height: 1px;
              padding-right: 15px;
              padding-left: 15px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                   <a href="#">Add Book</a><br>
                    <a>Edit Book Information</a><br>
                    <a>Remove Book</a><br>
                    <a>Search Book</a><br>
                    <a>Manage Request</a><br>
                    <a>Lend Book</a><br>
                    <a>Return Book</a><br>
                    <a>View Request</a><br>
                </div>
            
                <div class="col-md-5">
                    <h2>Basic Search</h2>
                    <table class="table table-condensed">
                        <tr><td>
                        <form action="">
                            <select name="bookattribute">
                                <option value="title" selected>Title</option>
                                <option value="author">Author</option>
                                <option value="callno">Call No.</option>
                                <option value="isbn">ISBN/ISSN</option>
                                <option value="subject">Subject</option>
                                <option value="anyfield">Any Field</option>
                            </select>
                        </form>
                        </td>
                        <td>
                            <form name="input">
                                <input type="text" name="searchit">
                                <input type="submit" value="Submit">
                            </form> 
                        </td>
                        </tr>
                    </table>
                </div>
           </div>
        </div>
    </body>
</html>
