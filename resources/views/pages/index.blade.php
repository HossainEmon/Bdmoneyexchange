@extends('layouts.app')
@section('content')
    
    <!--   News Start Here   -->
    <div class="section">
        <div class="row">
           
                <div class="col-sm-12 col-md-12 col-lg-12">
                   
                    <ul class="list-group">
                            
                          <li class="list-group-item">
                              <a href="#" > 
                                  <marquee behavior="" direction=""><h5 class="d-inline">NEWS UPDATE : </h5>This is news!</marquee>
                              </a>
                          </li>
                      </ul>
                    
                </div>
            
        </div>
    </div>
    
    <!--   News End Here   -->
    
    
    <!--   Main Start Here   -->
    <section class="main_section">
       <div class="container">
           <div class="row">
               <div class="col-sm-8 col-md-8 col-lg-8">
                   
                   <!--Main Left Going here-->
                    <div class="main_left_side mt-2">
                       <!--Card Going here-->
                       <div class="card">
                           <div class="card-body">
                               <h2 class="text-center"><i class="fab fa-gg-circle"></i> Exchange</h2>
                               <hr>
                              
                              <div class="row">
                                  <div class="col-sm-5 col-md-5 col-lg-5">
                                      <div class="send_method">
                                          <select class="input-group p-2">
                                             <option class="input-group-item p-2">Select Method</option>
                                              <option class="input-group-item p-2">
                                              <img src="{{asset('public/frontend/img/bkash.jpg')}}" alt="fd">
                                              Bkash
                                              
                                              </option>
                                          </select>
                                      </div>
                                  </div>
                                  
                                  <div class="col-sm-2 col-md-2 col-lg-2">
                                      <div class="exchange m-auto text-success text-center pt-1">
                                          <i class="fas fa-arrows-alt-h "></i>
                                      </div>
                                  </div>
                                  
                                  
                                  <div class="col-sm-5 col-md-5 col-lg-5">
                                      <div class="receive_method">
                                          <select class="input-group p-2">
                                             <option class="input-group-item p-2">Select Method</option>
                                              <option class="input-group-item p-2">
                                              <img src="{{asset('public/frontend/img/bkash.jpg')}}" alt="fd">
                                              Bkash
                                              
                                              </option>
                                          </select>
                                      </div>
                                  </div>                                  
                                                                
                              </div><!--Row End here-->
                              
                              <hr>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-6 offset-md-3">
                                           <div class="exchange_btn text-center">
                                              <button type="button" class="btn btn-light"><h4>  Next <i class="fas fa-chevron-right"></i> </h4></button>
                                          </div>
                                      </div><!--Col-md-6 End here-->
                                  </div><!--Row End here-->
                              </div><!--Container End here-->
                             
                               
                              
                           </div><!--Card Body End here-->
                           
                       </div><!--Card End here-->
                  
                        <div class="row mt-2">
                           <div class="col-sm-12 col-md-12 col-lg-12">

                              <div class="card">
                                  <div class="card-body">
                                      <div class="from_admin">
                                           <h5>আসসালামু আলাইকুম, OurexBD সকল ইউজার কে শুভেচ্ছা ও স্বাগতম। আমাদের OurexBD সাইট আপডেট করা হয়েছে আপনাদের সুভিধার জন্য। OurexBD সকল ইউজারদেরকে Dollar Buy Sell করার আগে নতুন করে একটা ACCOUNT করে নিতে হবে। সততার সাথে কাজ করে চলছে OurexBD। যে কনো প্রয়োজন এ আমাদের Support Number কল করুন। আমাদের ওয়েবসাইট ছারা অন্ন কনো মাধ্যমে লেনদেন করিনা। ধন্যবাদ আমাদের সাথে থাকার জন্য।</h5>
                                       </div><!--From admin End here-->
                                  </div><!--Card Body End here-->
                              </div><!--Card End here-->


                           </div>
                       </div>
                      
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="card mt-2">
                                   <div class="card-body">
                                      <div class="exchange_head text-center">
                                          <h2> <i class="far fa-clock"></i> Latest Exchange</h2>
                                      </div>
                                      
                                      <div class="latest_exchange">
                                          <table class="table table-responsive table-hover">
                                              <thead class="thead-light">
                                                <tr>
                                                  <th scope="col">SL</th>     
                                                  <th scope="col">Send</th>
                                                  <th scope="col">Received</th>
                                                  <th scope="col">User</th>
                                                  <th scope="col">Date And Time</th>
                                                  <th scope="col">Status</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-success">Success</span>
                                                    
                                                  </td>
                                                </tr>
                                                
                                                 <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>                                                  
                                                    <span class="badge badge-danger">Cancelled</span>
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-primary">Proccessing</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                 <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-warning">Waiting for payment</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-warning">Waiting for payment</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-warning">Waiting for payment</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-warning">Waiting for payment</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash<br>TK. 98.00</td>
                                                  <td><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash <br> USD 1.00</td>
                                                  <td>Al-amin</td>
                                                  <td>28/08/2020 8:30pm</td>
                                                  <td>
                                                    
                                                    <span class="badge badge-warning">Waiting for payment</span>
                                                   
                                                  </td>
                                                </tr>
                                                
                                                
                                                
                                              </tbody>
                                            </table>
                                      </div>
                                      
                                       
                                   </div>
                               </div>
                               
                               
                               
                           </div>
                       </div>
                       
                       
                    </div> <!--Main Left End-->
                    
                   
               </div>
               
               <div class="col-sm-4 col-md-4 col-lg-4">
                   <div class="main_right_side mt-2">
                       <div class="card">
                           <div class="card-body">
                               <h4 class="text-center"> <i class="fas fa-coins"></i> Our Reserved</h4>
                               <hr>
                               
                               <table class="table text-center  w-100">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">Method</th>
                                      <th scope="col">Amount</th>                                      
                                    </tr>
                                  </thead>
                                  
                                  <tbody>
                                   
                                    <tr>
                                      <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                      <td>TK 888</td>
                                     
                                    </tr>
                                    
                                    <tr>
                                      <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                      <td>TK 888</td>
                                     
                                    </tr>
                                    
                                    <tr>
                                      <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                      <td>TK 888</td>
                                     
                                    </tr>
                                    
                                    <tr>
                                      <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                      <td>TK 888</td>
                                     
                                    </tr>
                                      
                                      
                                      <tr>
                                      <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                      <td>TK 888</td>
                                     
                                    </tr>
                                    
                                    
                                   
                                  </tbody>
                                  
                                </table>
                           </div>
                       </div>
                       
                    <!-- Rate Table going here-->
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="card mt-2">
                                   <div class="card-body">
                                       <div class="rate text-center text-success">
                                           <h4> <i class="fas fa-signal"></i> Exchange Rate</h4>
                                       </div>
                                       
                                       <div class="rate_table">
                                           
                                           <table class="table text-center">
                                              <thead class="thead-dark">
                                                <tr>
                                                  <th scope="col">USD</th>
                                                  <th scope="col">We Buy</th>                                   
                                                  <th scope="col">We Sell</th>                                      
                                                </tr>
                                              </thead>

                                              <tbody>

                                                <tr>
                                                  <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                                  <td>TK 90</td>
                                                  <td>TK 98</td>

                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                                  <td>TK 90</td>
                                                  <td>TK 98</td>

                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                                  <td>TK 90</td>
                                                  <td>TK 98</td>

                                                </tr>
                                                
                                                <tr>
                                                  <th scope="row"><img src="{{asset('public/frontend/img/bkash.jpg')}}" width="30" height="30" alt="">Bkash</th>
                                                  <td>TK 90</td>
                                                  <td>TK 98</td>

                                                </tr>
                                                
                                               </tbody>
                                      
                                           </table>
                                       </div><!--Rate table End here-->
                                       
                                       
                                   </div><!--Card body End here-->
                               </div><!--Card End here-->
                           </div><!--Col End here-->
                       </div><!--Row End here-->
                       
                       <div class="row">
                           <div class="col-sm-12 col-md-12 col-lg-12">
                               <div class="card mt-2">
                                   <div class="card-body">
                                       <div class="rate text-center text-success">
                                           <h4> <i class="fas fa-smile-beam"></i> Our Review</h4>
                                       </div>
                                       
                                       <div class="review">
                                           <div class="parent-box owl-carousel">
                                                
                                                   <div class="item">
                                                        <div class="card">

                                                          <div class="card-body">
                                                            <h5 class="card-title"><img src="{{asset('public/frontend/img/avatar.jpg')}}" width="30" height="150" alt="">Here Name</h5>
                                                            <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                          </div>
                                                        </div>

                                                    </div>
                                                    
                                                     <div class="item">
                                                        <div class="card">

                                                          <div class="card-body">
                                                            <h5 class="card-title"><img src="{{asset('public/frotend/img/avatar.jpg')}}" width="30" height="150" alt="">Here Name</h5>
                                                            <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                          </div>
                                                        </div>

                                                    </div>
                                                    
                                                     <div class="item">
                                                        <div class="card">

                                                          <div class="card-body">
                                                            <h5 class="card-title"><img src="{{asset('public/frontend/img/avatar.jpg')}}" width="30" height="150" alt="">Here Name</h5>
                                                            <p class="card-text">
                                                            Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                                          </div>
                                                        </div>

                                                    </div>
                                            </div>
                                           
                                           
                                       </div><!--Review End here-->   
                                   </div><!--Card body End here-->
                               </div><!--Card End here-->
                           </div><!--Col End here-->
                       </div><!--Row End here-->
                    i  
                   </div> <!--Right side End here-->
                     
               </div><!--Col End here-->
           </div><!--Row End here-->
                 @include('layouts.review')
       </div><!--Container End here-->
        
    </section>   <!--   News Main End Here   -->
@endsection

