<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="css/auth.css">
   <link rel="stylesheet" href="css/navbar.css" />
   <link rel="stylesheet" href="css/footer.css" />

   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <title>Responsive login and registration form - Bedimcode</title>
</head>

<body>
   <!-- Header  Section-->
   <?php include 'components/user_header.php'; ?>

   <div>
      <!--=============== LOGIN IMAGE ===============-->
      <svg class="login__blob" viewBox="0 0 566 840" xmlns="http://www.w3.org/2000/svg">
         <mask id="mask0" mask-type="alpha">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />
         </mask>

         <g mask="url(#mask0)">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />

            <!-- Insert your image (recommended size: 1000 x 1200) -->
            <image class="login__img" href="images/bg-img.jpg" />
         </g>
      </svg>

      <div class="login container grid" id="loginAccessRegister">
         <!--===== LOGIN REGISTER =====-->
         <div class="login__register">
            <h1 class="login__title">Create new account.</h1>

            <div class="login__area">
               <form action="" class="login__form">
                  <div class="login__content grid">
                     <div class="login__group grid">
                        <div class="login__box">
                           <input type="text" id="names" required placeholder=" " class="login__input">
                           <label for="names" class="login__label">Names</label>

                           <i class="ri-id-card-fill login__icon"></i>
                        </div>

                        <div class="login__box">
                           <input type="text" id="surnames" required placeholder=" " class="login__input">
                           <label for="surnames" class="login__label">Surnames</label>

                           <i class="ri-id-card-fill login__icon"></i>
                        </div>
                     </div>

                     <div class="login__box">
                        <input type="email" id="emailCreate" required placeholder=" " class="login__input">
                        <label for="emailCreate" class="login__label">Email</label>

                        <i class="ri-mail-fill login__icon"></i>
                     </div>

                     <div class="login__box">
                        <input type="password" id="passwordCreate" required placeholder=" " class="login__input">
                        <label for="passwordCreate" class="login__label">Password</label>

                        <i class="ri-eye-off-fill login__icon login__password" id="loginPasswordCreate"></i>
                     </div>
                  </div>

                  <button type="submit" class="login__button">Create account</button>
               </form>

               <p class="login__switch">
                  Already have an account?
                  <button id="loginButtonAccess">Log In</button>
               </p>
            </div>
         </div>
      </div>
   </div>

   <!-- Footer  Section-->
   <?php include 'components/footer.php'; ?>

   <!--=============== MAIN JS ===============-->
   <script src="js/main.js"></script>
</body>

</html>