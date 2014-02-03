<!DOCTYPE html>
<!-- -->
<html lang="en">
    <head>
        <link href="../css/bootstrap.css" rel="stylesheet">

        <title>Librarian - Add Book to Catalog</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <a href="addbook.html">Add Book</a><br>
                    <a href="editbook.html">Edit Book Information</a><br>
                    <a href="deletebook.html">Remove Book</a><br>
                    <a href="librarian.html">Search Book</a><br>
                    <a href="managereqs.html">Manage Requests</a><br>
                    <a href="lendbook.html">Lend Book</a><br>
                    <a href="returnbook.html">Return Book</a><br>
                    <a href="viewreqs.html">View Requests</a><br>
                </div>
            
                <div class="col-md-5">
                    <p></p>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Author</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Call No.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputcallno">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ISBN/ISSN</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputisbn">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputsubject">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputdesc">
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Add Book</button>
                        </div>
                      </div>
                    </form>

                </div>
           </div>
        </div>
    </body>
</html>
