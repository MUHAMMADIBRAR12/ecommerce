<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://monmatics.com/pro/web_assets/style.css"> -->
        <link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Monmatics</title>
    <link rel="stylesheet" href="<?php echo e(asset('/web_assets/style.css')); ?>">
    <style>
        .orange{color: #DC7210;}.blue{color:#163C69}
        .navvv{
            background: #163C69;
        }
        .loginBackground{
         background: #fff;
         height: 100%;
        }
        /* .header {
            font-size: 18px;
        } */

        .navbarFontClass {
            font-size: 18px;
            padding-left: 20px;
        }
        :root {
             --color-white: #fff;
             --color-light: #f1f5f9;
             --color-black: #121212;
             --color-night: #001632;
             --color-red: #f44336;
             --color-orange: #DC7210;
             --color-red: #f44336;
             --color-blue: #163C69;
             --color-gray: #80868b;
             --color-grayish: #dadce0;
             --shadow-normal: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
             --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
             --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }


         a, button {
             font-family: inherit;
             /* font-size: inherit; */
             line-height: inherit;
             cursor: pointer;
             border: none;
             outline: none;
             background: none;
             text-decoration: none;
         }

         .container {
             display: flex;
             justify-content: left;
             align-items: center;
             /* max-width: 80rem;
             min-height: 100vh; */
             width: 100%;
             padding: 0 2rem;
             margin: 0 auto;
         }
         .text {
             font-family: inherit;
             line-height: inherit;
             text-transform: unset;
             text-rendering: optimizeLegibility;
         }
         .text-large {
             font-size: 2rem;
             font-weight: 600;
             color: var(--color-black);
         }
         .text-normal {
             font-size: 1rem;
             font-weight: 400;
             color: var(--color-black);
         }
         .text-links {
             font-size: 1rem;
             font-weight: 400;
             color: var(--color-blue);
         }
         .text-links:hover {
             text-decoration: underline;
         }
         .main .wrapper {
             max-width: 34rem;
             width: 100%;
             margin: 2rem auto;
             margin-top: 80px;
             padding: 2rem 2.5rem;
             border: none;
             outline: none;
             border-radius: 2.25rem;
             color: var(--color-black);
             background: #668FC9;
             box-shadow: var(--shadow-large);
         }
         .main .wrapper .form {
             width: 100%;
             height: auto;
             margin-top: 2rem;
         }
         .main .wrapper .form .input-control {
             display: flex;
             align-items: center;
             justify-content: space-between;
             margin-bottom: 1.25rem;
         }
         .main .wrapper .form .input-field {
             font-family: inherit;
             font-size: 1rem;
             font-weight: 400;
             line-height: inherit;
             width: 80%;
             height: auto;
             padding: 0.75rem 1.25rem;
             border: none;
             outline: none;
             border-radius: 2rem;
             color: var(--color-black);
             background: var(--color-light);
             text-transform: unset;
             text-rendering: optimizeLegibility;
         }
         .main .wrapper .form .input-submit {
    font-family: inherit;
    font-size: 0.8rem; /* Adjust the font size as needed */
    font-weight: 500;
    line-height: inherit;
    cursor: pointer;
    width: auto; /* Remove the min-width property */
    height: auto;
    padding: 0.5rem 1rem; /* Adjust the padding as needed */
    border: none;
    outline: none;
    border-radius: 2rem;
    color: var(--color-white);
    background: var(--color-orange);
    box-shadow: var(--shadow-medium);
    text-transform: capitalize;
    text-rendering: optimizeLegibility;
    float: right; /* Add this property to align the button to the right */
}

         .main .wrapper .striped {
             display: flex;
             flex-direction: row;
             justify-content: center;
             align-items: center;
             margin: 1rem 0;
         }
         .main .wrapper .striped-line {
             flex: auto;
             flex-basis: auto;
             border: none;
             outline: none;
             height: 2px;
             background: var(--color-grayish);
         }
         .main .wrapper .striped-text {
             font-family: inherit;
             font-size: 1rem;
             font-weight: 500;
             line-height: inherit;
             color: var(--color-black);
             margin: 0 1rem;
         }
         .main .wrapper .method-control {
             margin-bottom: 1rem;
         }
         .main .wrapper .method-action {
             font-family: inherit;
             font-size:;
             font-weight: 500;
             line-height: inherit;
             display: flex;
             justify-content: center;
             align-items: center;
             width: 100%;
             height: auto;
             padding: 0.35rem 1.25rem;
             outline: none;
             border: 2px solid var(--color-grayish);
             border-radius: 2rem;
             color: var(--color-black);
             background: var(--color-white);
             text-transform: capitalize;
             text-rendering: optimizeLegibility;
             transition: all 0.35s ease;
         }
         .main .wrapper .method-action:hover {
             background: var(--color-light);
         }
         @media (max-width: 767px) {
            .hidden-mobile {
                display: none;
            }
            .container-fluid{font-size: 10px;}
            .main .wrapper .form .input-field {
             font-family: inherit;
             font-size: 10px;
             font-weight: 400;
             line-height: inherit;
             width: 80%;
             height: auto;
             padding: 0.75rem 1.25rem;
             border: none;
             outline: none;
             border-radius: 2rem;
             color: var(--color-black);
             background: var(--color-light);
             text-transform: unset;
             text-rendering: optimizeLegibility;
         }
        }


    </style>
  </head>
  <body>
  <header>
   <div class="custom-maxWidth  " >
        <nav class=" navbar-expand-lg  container-fluid   " style="height:40px">
            <div class="container-fluid" id="navmob">
                <div class="row">
                    <div class=" col-5 ">
                        <div class="   collapse navbar-collapse" >
                            <ul class="navbar-nav  ">
                                <li class="nav-item  " style="color:#B1B0B0;  margin-top:3%">
                                    <span><b>Let the platform lead the way</b></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                   <div class=" col-7  collapse navbar-collapse" id="nav2" >
                
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a href="mailto: hi@monmatics.com"  class="nav-link  UppernavbarFontClass" style="color:black;" id="nav2" href=""><b> <img src="<?php echo e(asset('public/assets/images/🦆 icon _Gmail_.svg')); ?>" alt="" ></b> : hi@monmatics.com</a>
                        </li>
                           <li class="nav-item dropdown">
                            <a href="<?php echo e(url('authentication/login')); ?>" class="nav-link mx-2 navbarFontClass  " style="color:  #023C82" id="nav2" role="button" aria-expanded="false">
                                <b>LogIn</b> 
                              </a>
                        </li>
                        
                    </ul>
                  </div>
                  
                </div>
            </div>

            <div class="container-fluid  ">
              <div class="d-block d-lg-none">
                <div class="row   mt-2  ">
                  <div class="col-6">
                    <ul class=" navbar-nav ">
                      <li class="" ><a href="" class="nav-link"  style="color: black; font-size: large;"><b>Email</b>:hi@monmatics.com</a></li>
                    </ul>
                  </div>
                  <div class="col-6 " style=" text-align: right">
                  <a href="<?php echo e(url('authentication/login')); ?>"  class="">
                    <h4 class="blue mt-2">LogIn</h4>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
          
      </div>


  <nav class="navbar navbar-expand-lg navbar-light   custom-maxWidth  border-top ">
  <a class="navbar-brand" href="/">
          <img class="" src="<?php echo e(asset('public/assets/images/Logo new 1.svg')); ?>" alt="" style="" data-pagespeed-url-hash="309413324" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
          </a>      
  <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <div class="hamburger-toggle">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </button>
    <div class="container-fluid ">
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0    ">

           <!-- feature li          -->
        
           <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Features</a>
            
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
                <div class="heading1">
                  <h2 class=""> <span style="     border-bottom: 4px solid #0C76FF;">Plan your business with monmatics</span></h2> 

                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Accept Payment-1.svg')); ?>" alt=""   >
                        <h6 class="blue mt-3 ml-2 " style="letter-spacing: 0em;text-align: left;">Accept Payment</h6>
                      </div>
                      <div class="d-flex  mt-3">
                        <img src="<?php echo e(asset('public/assets/images/Track Projects.svg')); ?>" alt="" >
                        <h6 class="blue mt-4  ml-3"   style="letter-spacing: 0em;text-align: left;">Track projects</h6>
                      </div>

                      <div class="d-flex  mt-3">
              <img src="<?php echo e(asset('public/assets/images/Reporting.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-4  ml-3"   style="letter-spacing: 0em;text-align: left;">Reporting</h6>
            </div>

            <div class="d-flex  mt-3">
              <img src="<?php echo e(asset('public/assets/images/Analytics.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-4  ml-3"   style="letter-spacing: 0em;text-align: left;">Analytics.svg</h6>
            </div>
   

                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>Card</h5> -->
                     

                <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Claim expenses-1.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3  ml-2 " >Claim expenses</h6>
            </div>
            <div class="d-flex mt-3">
              <img src="<?php echo e(asset('public/assets/images/Bank reconciliation.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-2"   style="">Bank reconciliation</h6>
            </div>

            <div class="d-flex mt-3">
              <img src="<?php echo e(asset('public/assets/images/Online invoicing.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-2"   style="letter-spacing: 0em;text-align: left;">Online invoicing</h6>
            </div>
            <div class="d-flex mt-3">
              <img src="<?php echo e(asset('public/assets/images/Sales tax.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-2"   style="letter-spacing: 0em;text-align: left;">Sales tax</h6>
            </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>About CodeHim</h5> -->

                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Bank connection.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-3 " >Bank connection</h6>
            </div>
            <div class="d-flex mt-3 ">
              <img src="<?php echo e(asset('public/assets/images/Manage contacts.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-3"  >Manage contacts</h6>
            </div>
            <div class="d-flex mt-3 ">
              <img src="<?php echo e(asset('public/assets/images/Multi currency.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-3"  >Multi currency</h6>
            </div>
            <div class="d-flex  mt-3">
              <img src="<?php echo e(asset('public/assets/images/Accounting (1).svg')); ?>" alt="" style="" >
              <h6 class="blue mt-3  ml-3"   >Accounting</h6>
            </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4">
                      <!-- <h5>Damn, so many</h5> -->
                     
                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Inventory-1.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-3 " >Inventory</h6>
            </div>
            <div class="d-flex mt-3 ">
              <img src="<?php echo e(asset('public/assets/images/Capture data.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-4  ml-3"  >Capture data</h6>
            </div>
            <div class="d-flex mt-3">
              <img src="<?php echo e(asset('public/assets/images/Purchase orders.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-4  ml-3"   >Purchase orders</h6>
            </div>
            <div class="d-flex mt-3">
              <img src="<?php echo e(asset('public/assets/images/Manage fixed assets.svg')); ?>" alt="" style="" >
              <h6 class="blue mt-4  ml-3"  >Manage fixed assets</h6>
            </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- plans your li -->
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Plans For small businesses</a>
            
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
              <h3 class="heading1"> <span style="border-bottom: 4px solid #0C76FF;">Unleash Your Business Potential with Monmatics</span></h3>                 <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <div class="d-flex ">
                        <img src="<?php echo e(asset('public/assets/images/Benefits.svg')); ?>" alt=""   >
                        <h6 class="blue mt-3 ml-2 " style="letter-spacing: 0em;text-align: left;">Benefits</h6>
                      </div>
                      
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>Card</h5> -->
                     

                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Data authentication.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2 " >Data authentication</h6>
            </div>
            

                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>About CodeHim</h5> -->

                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Business recovery.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2" >Business recovery</h6>
            </div>
           
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4">
                      <!-- <h5>Damn, so many</h5> -->
                     
                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Smart online accounting.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2 ">Smart online accounting</h6>
            </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- For accountants and bookkeepers -->
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">For accountants and bookkeepers</a>
            
            <div class="dropdown-menu shadow">
              <div class="mega-content px-2">
              <h3 class="heading1" > <span style="border-bottom: 4px solid #0C76FF;">Unleash Your Accounting Potential with Monmatics</span></h3>    
                 <div class="container">
                  <div class="row">
                   


                    <div class="col-lg-6 col-sm-6    col-md-6   py-4">
                     
    
                <div class="d-flex " >
              <img src="<?php echo e(asset('public/assets/images/Monmatics HQ.svg')); ?>" alt=""   >
              <h6 class="blue mt-3 ml-2 " >Monmatics HQ</h6>
            </div>
             
            <div class="d-flex  mt-4" >
              <img src="<?php echo e(asset('public/assets/images/Practice manager.svg')); ?>" alt=""  >
              <h6 class="blue mt-3 ml-2 " >Monmatics Practice Manager </h6>
            </div>


                    </div>

                 


                    <div class="col-lg-6 col-sm-12 col-md-6 py-4  ">
                     
                <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Monmatics Cashback.svg')); ?>" alt=""  >
              <h6 class="blue mt-3 ml-2" >Monmatics Cashback, Monamtics Ledger</h6>
            </div>
           

            <div class="d-flex mt-4 ">
              <img src="<?php echo e(asset('public/assets/images/Workpapers.svg')); ?>" alt=""  >
              <h6 class="blue mt-3 ml-2" >Monmatics Workpapers</h6>
            </div>


                   


                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- Apps -->
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Apps</a>
            
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
                
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 py-4">

                      <div class="d-flex ">
                        <img src="<?php echo e(asset('public/assets/images/Finance.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#DC7210; width:152.01px;    border-bottom: 2px solid #DC7210;">Finance</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;">Accounting  <br>  Invoicing <br> Expenses  <br> Spreadsheet <br> Documents <br> Sign</p>
                   </div>





                   <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Marketing.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#C5221F; width:152.01px;    border-bottom: 2px solid #C5221F">Marketing</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;"> Social Marketing  <br>  Email Marketing  <br> SMS Marketing  <br> Events <br>  Marketing Automation <br> Surveys</p>
                   </div>

                  
                  



              

                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>Card</h5> -->
                     

                    



                   <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Total Sales.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#B91D68; width:152.01px;    border-bottom: 2px solid #B91D68;"> Sales</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;">CRM  <br>  Sales <br> Point of sale  <br> Subscriptions <br> Rental <br> Amazon Connectorgn</p>
                   </div>


   

                   <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Services.svg')); ?>" alt=""   >
                        <p class=" mt-2 ml-2 " style="color:#293180; width:152.01px;    border-bottom: 2px solid #293180;">Services</p>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;"> Project  <br>  Time Shield <br> Filed Service  <br> Helpdesk <br> Planning <br> Appointments</p>
                   </div>

          
          
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>About CodeHim</h5> -->

                 
                    


                   <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Warehouse.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#1A6D30; width:152.01px;    border-bottom: 2px solid #1A6D30;">INVENTORY & MRP</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;">  Inventory  <br>  Manufacturing <br> PLM  <br> Purchase <br> Maintenance <br> Quality</p>
                   </div>


                   <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Brainstorm Skill.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#977000; width:152.01px;    border-bottom: 2px solid #977000;">PRODUCTIVITY</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;">   Discuss  <br>  Approvals <br> IoT  <br> VoIP <br> Knowledge</p>
                   </div>




                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4">
                      <!-- <h5>Damn, so many</h5> -->
                     
           


                      <div class="d-flex  ">
                        <img src="<?php echo e(asset('public/assets/images/Human Research Program.svg')); ?>" alt=""   >
                        <h6 class=" mt-2 ml-2 " style="color:#00295B; width:162.01px;    border-bottom: 2px solid #00295B;">HUMAN RESOURCE</h6>
                      </div>

                   <div class=""> 
                   <p class="mt-2 "  style="letter-spacing: 0em; margin-left:14%;">  Employees  <br>  Recuitment <br> Time OFF   <br> Appraisals <br> Referrals <br> Fleet</p>
                   </div>



          



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>



          <!-- Support -->
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Support</a>
            
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
              <h3 class="heading1"> <span style="border-bottom: 4px solid #0C76FF;">Get support to use monmatics</span></h3>                 <div class="container-fluid">
                  <div class="row ">




                  <div class="col-lg-2 col-sm-4 col-md-3 py-4  ">
                      <!-- <h5>Card</h5> -->
                     

                      
            

                    </div>


                
                    <div class="col-12 col-sm-4 col-md-3 py-4 ">
                      <!-- <h5>Card</h5> -->
                     

                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Get Support.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2 " >Get Support</h6>
            </div>
            

                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <!-- <h5>About CodeHim</h5> -->

                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Guide.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2" >Guide</h6>
            </div>
           
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4 ">
                      <!-- <h5>Damn, so many</h5> -->
                     
                      <div class="d-flex ">
              <img src="<?php echo e(asset('public/assets/images/Accounting glossary.svg')); ?>" alt="" style=""  >
              <h6 class="blue mt-3 ml-2 ">Accounting glossary</h6>
            </div>
            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>


        </ul>
        <div class="btn-group" style="float: inline-end;">
  <button class=" btn-sm rounded-3    " data-bs-toggle="dropdown" aria-expanded="false"  style="border:1px solid #163C69; color:#163C69 ">
  Try monmatics
  </button>
  <ul class="dropdown-menu   drop  dropdown-menu-end">
    <li class="d-flex">
    <img src="<?php echo e(asset('public/assets/images/Male User.svg')); ?>" alt="" style="margin-left:4%"  > 
    <a class="dropdown-item clr" href="<?php echo e(route('individual.login')); ?>">Individual</a></li>
    <li class="d-flex">
    <img src="<?php echo e(asset('public/assets/images/Business.svg')); ?>" alt=""  style="margin-left:4%"   > 
    <a class="dropdown-item clr" href="<?php echo e(route('business.login')); ?>">Business</a></li>
    <li class="d-flex">
    <img src="<?php echo e(asset('public/assets/images/General Ledger.svg')); ?>" alt=""  style="margin-left:4%"   > 
    <a class="dropdown-item clr" href="<?php echo e(route('bookkeeper.login')); ?>">Accountant/Bookkeeper</a></li>
  </ul>
</div>
   


      </div>
    </div>
  </nav>
</header>

        <div class="container-fluid loginBackground pb-5" >
           <div class="row">
            <div class="col-md-6">
                <img class="hidden-mobile" src="<?php echo e(asset('public/assets/web_assets/images/Background image.svg')); ?>" alt="" style="margin-top: 10px; margin-left: 70px">
            </div>
            <div class="col-md-6">
                <main class="main">
                    <div class="container">
                        <section class="wrapper">
                            <div class="heading">
                                <div class="text-center">
                                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                                        <img class="" src="<?php echo e(asset('public/assets/web_assets/images/image 1.svg')); ?>" alt="" style="height: 30px;">
                                    </a>
                                </div>
                                <h4 class="text text-center"><b>Create Your Account</b></h4>
                                
                            </div>
                            <form name="signin" class="form" action="<?php echo e(route('create_business')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="input-control form-group">
                                    <label for="bname" class="input-label">Company name</label>
                                    <input type="text" name="business_name" id="bname" class="input-field form-control" placeholder="Company name">
                                </div>
                                <div class="input-control form-group">
                                    <label for="btype" class="input-label">Business type</label>
                                    <input type="text" name="business_type" id="btype" class="input-field form-control" placeholder="Business type">
                                </div>
                                <div class="input-control form-group">
                                    <label for="no_of_users" class="input-label">Number of users</label>
                                    <input type="phone" name="number_of_users" id="no_of_users" class="input-field form-control" placeholder="Number of users">
                                </div>
                                <div class="input-control form-group">
                                    <label for="Country" class="input-label">Country</label>
                                    <select name="country" class="input-field form-control">
                                        <option value="">Select a country</option>
                                        <option value="USA">United States</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="Canada">Canada</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-control form-group">
                                            <label for="State" class="input-label">State</label>
                                            <select name="state" class="input-field form-control">
                                                <option value="">Select a State</option>
                                                <option value="USA">United States</option>
                                                <option value="UK">United Kingdom</option>
                                                <option value="Canada">Canada</option>
                                                <!-- Add more countries as needed -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-control form-group">
                                            <label for="Zip" class="input-label">Zip</label>
                                            <input type="text" name="zip" id="zip" class="input-field form-control" placeholder="Zip">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="input-submit orange" >
                                                <img src="<?php echo e(asset('public/assets/web_assets/images/home/Forward Button.svg')); ?>" style="width: 30px; height: 30px;" alt="Forward Button">
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                        <a href="<?php echo e(url('#')); ?>">Create Account</a>
                                            <p> Already have an account? <span class="orange">Log In</span></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </main>
            </div>

           </div>
            <div class="container">
                <div class="text-left">
                    <h5 class="text-dark" >© 2023 Monmatics Inc. All Rights Reserved.</p>
                </div>
            </div>
        </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\app\resources\views/web/company.blade.php ENDPATH**/ ?>