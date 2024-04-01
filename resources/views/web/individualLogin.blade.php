<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://monmatics.com/pro/web_assets/style.css"> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@20.3.0/build/css/intlTelInput.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@20.3.0/build/js/intlTelInput.min.js"></script>

    <title>indvidiual</title>

       


<style>
    .bgc{
  background-image:url('{{asset('public/assets/images/Background.svg')}}');
  background-repeat:100% 100%;
  
}
.bg{
    background: linear-gradient(180deg, #C6D5E8 0%, rgba(255, 255, 255, 0) 100%);
    border: 1px solid #D9D9D9;
    border-radius:10px;
}


.wrapper {

max-width:32rem;
width: 100%;
margin: 2rem auto;
margin-top: 80px;
padding: 2rem 2.5rem;
border: 2px solid #000;
outline: none;
border-radius: 2.25rem;
color:black;
background: #f2f5f8;
}

.form {
/* width:300px; */
/* height: 520px; */
width: 100%;
height:450px;
margin-top: 2rem
}

.input-control-sirname {
display: flex;
align-items: center;
margin-bottom: 1.25rem
}

.input-sirname{
font-family: inherit;
font-size: 1rem;
font-weight: 400;
line-height: inherit;
width:40%;
height: auto;
padding: .3rem 1.25rem;
border: none;
outline: none;
border-radius: 2rem;
color:black;
/* border-bottom: 1px solid #ccc; */
background:white;
background: linear-gradient(180deg, #C6D5E8 0%, rgba(255, 255, 255, 0) 100%);
border: 1px solid #D9D9D9;
border-radius:10px;

}
.input-control {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 1.25rem
}


.input-field {
font-family: inherit;
font-size: 1rem;
font-weight: 400;
line-height: inherit;
width: 80%;
height: auto;
padding: .3rem 1.25rem;
border: none;
outline: none;
border-radius: 2rem;
color:black;
/* border-bottom: 1px solid #ccc; */
background:white;
background: linear-gradient(180deg, #C6D5E8 0%, rgba(255, 255, 255, 0) 100%);
border: 1px solid #D9D9D9;
border-radius:10px;
}
.input-fieldd{
font-family: inherit;
font-size: 1rem;
font-weight: 400;
line-height: inherit;
width: 80%;
height: 27px;;
padding: .3rem 1.25rem;
border: none;
outline: none;
/* border-radius: 2rem; */
color:black;
border-bottom: 1px solid #ccc;
/* border: 1px solid #000; */
background:#F2F5F8;
}
.input-state{
font-family: inherit;
font-size: 1rem;
font-weight: 400;
line-height: inherit;
width:70%;
height: auto;
padding: .3rem 1.15rem;
border: none;
outline: none;
border-radius: 2rem;
color:black;
margin-left:17%;
/* border-bottom: 1px solid #ccc; */
background:white;
background: linear-gradient(180deg, #C6D5E8 0%, rgba(255, 255, 255, 0) 100%);
border: 1px solid #D9D9D9;
border-radius:10px;
}
.input-submit {
font-family: inherit;
font-size: 1rem;
font-weight: 500;
line-height: inherit;
cursor: pointer;
min-width: 40%;
height: auto;
padding: .65rem 1.25rem;
border: none;
outline: none;
border-radius: 2rem;
color:white;
background:orange;
}
.btn-login{
color:orange;
}
a{
text-decoration: none;
}
</style>
</head>
<body>
 



<div class="bgc">
        <img src="" alt="">
    <div class="container-fluid loginBackground pb-5">

        <main class="main">
            <div class="container">
            <section class="wrapper">
                            <div class="">
                                <div class="text-center">
                                    <a class="navbar-brand" href="">
                                        <img class="" src="{{ asset('public/assets/images/image 1 (1).png')}}" alt="" >
                                    </a>
                                </div>

                                <h4 class="text text-center "><b>Create Your Account</b></h4>
                                <h6  class="text-center">Already have an account? <a href="{{url('authentication/login')}}">

                                <span class="btn-login">Log In</span>

                                </a> </h6>

                            </div>
                            <form name=""  method="" class="form">

                                <div class="input-control  position-relative ">
                                    <label for="Sir Name" class=" "><b>Sir Name:</b></label>
                                    <select name="sir_name" class="input-sirname position-absolute  form-control" style="left:20%">
                                        <option value="">Select</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                </div>

                                <div class="input-control ">
                                    <label for="fname" class="fw-bold">First Name:</label>
                                    <input type="text" name="first_name" id="fname" class="input-fieldd"
                                        placeholder="">
                                </div>
                                <div class="input-control form-group">
                                    <label for="lname" class="fw-bold">Last Name:</label>
                                    <input type="text" name="last_name" id="lname" class="input-fieldd form-control"
                                        placeholder="">
                                </div>
                                <div class="input-control form-group">
                                    <label for="Phone" class="fw-bold">Phone:</label>
                                    <input type="phone" name="phone" id="phone" class="input-fieldd form-control"
                                        placeholder="">
                                </div>
                                <script>
                                    const input = document.querySelector("#phone");
                                    window.intlTelInput(input, {
                                        initialCountry: "us",
                                        strictMode: true,
                                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@20.3.0/build/js/utils.js",
                                    });
                                </script>
                                <div class="input-control form-group">
                                    <label for="email" class="fw-bold">Email:</label>
                                    <input type="email" name="email" id="email" class="input-fieldd form-control"
                                        placeholder="">
                                </div>

                                <div class="input-control form-group">
                                    <label for="Country" class="input-label "><b>Country:</b></label>
                                    <select name="country" class="input-field form-control ">
                                        <option value="">Select a country</option>
                                        <option value="USA">United States</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="Canada">Canada</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="input-control form-group">
                                            <label for="State" class=" "><b>State:</b></label>
                                            <select name="state" class="input-state  form-control ">
                                                <option value="">Select a State</option>
                                                <option value="USA">United States</option>
                                                <option value="UK">United Kingdom</option>
                                                <option value="Canada">Canada</option>
                                                <!-- Add more countries as needed -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-control form-group">
                                            <label for="Zip" class=" fw-bold">Zip:</label>
                                            <input type="text" name="zip" id="zip" class="input-fieldd "
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="input-control text-center" >
                                        <input type="submit" class="input-submit orange" value="Create Account" style="    margin: auto;">
                                    </div>
                                </div>
                            </form>
                        </section>

            </div>
        </main>

        <div class="text-center">
            <h5 class="text-white">© 2024 Monmatics Inc. All Rights Reserved.<p></p>
            </h5>
        </div>

    </div>
    </div>

   


</body>
</html>