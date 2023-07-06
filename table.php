<?php include('assets/include/header.php');?>
     <!-- Book table -->
     <div class="container">
     	<div class="container-fluid book-table-section">

            <div class="row">
                
                 <div class="col-lg-6 col-md-12 table-rule" >
                     
                 </div>
                 <div class="col-lg-6 col-md-12 table-form" style="padding:40px 40px;" >
                    <h1>BOOK A TABLE</h1>
                    <form>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control me1" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating form-loating-text">
                                        <input type="email" class="form-control me1" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control me1 datetimepicker-input" id="datetime" placeholder="Date &amp; Time" data-target="#date3" data-toggle="datetimepicker">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <label for="select1">No of People</label>
                                        <select class="form-select" id="select1">
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                        </select>
                                        
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control me1" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12  book-button" >
                                    <button class="btn  w-100 py-3" type="submit"> <span class="book-button">BOOK NOW</span></button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
     </div>
        
     <?php include('assets/include/footer.php');?>