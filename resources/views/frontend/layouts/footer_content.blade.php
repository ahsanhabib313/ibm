<div class="container-fluid">
    <div class="row footer-content">
      <div class="col-3 mt-4 text-center">
          <ul class="text-justify">
              <li><router-link to="/"><img class="bg-white" :src="url+'/assets/images/logo/mysemia1.png'" alt=""></router-link></li>
              
          </ul>
          <ul class="social">
              <li><router-link to=""><i class="fa fa-facebook" aria-hidden="true"></i></router-link></li>
              <li><router-link to=""><i class="fa fa-twitter" aria-hidden="true"></i></router-link></li>
              <li><router-link to=""><i class="fa fa-instagram" aria-hidden="true"></i></router-link></li>
              <li><router-link to=""><i class="fa fa-youtube" aria-hidden="true"></i></router-link></li>
          </ul>
      </div>
      <div class="col-3 mt-4">
          <ul class="footer-menu mb-4 custom-color">
            <h5>__Where we are</h5>
            <li>Gazipur Sadar, Gazipur</li>
            <li>Gazipur, Bangladesh.</li>
            <li>Phone: +880 861 54545</li>
            <li>Hotline: +88019 45333</li>
              
          </ul>
      </div>
      <div class="col-3 mt-4">
          <ul class="footer-menu mb-4">
              <li><router-link to="/signup">Sign Up</router-link></li>
              <li><router-link to="/signin">Login</router-link></li>
              <li><router-link to="/">About Us</router-link></li>
              <li><router-link to="/">Contact Us</router-link></li>
          </ul>
      </div>
      <div class="col-3 mt-4">
          <ul class="footer-menu mb-4">
              <li><router-link to="/">Privacy & Policy</router-link></li>
              <li><router-link to="/">Terms & Condition</router-link></li>
              <li><router-link to="/">About resort</router-link></li>
              <li><router-link to="/">Picnic Instruction</router-link></li>
          </ul>
      </div>
      
</div>
</div>
    
<style>
    .social li{
        display:inline-block;
        list-style: none;
    }
    
    .social li a{
        font-size: 24px;
        padding:10px;
        color:#CBE;
    }
    
    .footer-menu li{
        list-style: none;
        /* font-size: 23px; */
        text-decoration: none;
    }
    
    .footer-menu li a{
        text-decoration: none;
        color: #CBE;
        font-size: 15px;
        line-height: 2;
    }
    
    .custom-color{
        color:#CBE;
    }
    </style>
