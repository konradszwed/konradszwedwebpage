<div class="outer-container portfolio-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="portfolio-content">
                    
                    <form class="form-horizontal" name="contactform" method="post" action="scripts/send_contact.php">
                        
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Konrad">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Szwed">
                        </div>
                      <div class="form-group">
                        <label for="email">Email Adress *</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="mail@gmail.com">
                      </div>
                        <div class="form-group">
                        <label for="telephone">Number Phone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="111 222 333">
                      </div>
                        <textarea class="form-control" name="comments" maxlength="1000" cols="25" rows="6"> 
                        </textarea>
                    <button type="submit" class="btn btn-default">Wyślij</button>   
                        
                    </form>
                    
                </div><!-- .portfolio-content -->
            
        </div><!-- .row -->
    </div><!-- .container-fluid -->

</div><!-- .outer-container -->