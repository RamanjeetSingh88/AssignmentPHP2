<?php

    require 'templates/header.php';

    require_once 'templates/header.php';
?>


     <!--Page Main-->
  <main>
  <section class="middle-content">
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
          <img src="images/Scrollimage1.jpg" style="width:840px; height: 500px;">
        </div>
        <div class="mySlides">
          <img src="images/Scrollimage2.jpg" style="width: 840px; height: 500px;">
        </div>
      
        <div class="mySlides">
          <img src="images/Scrollimage3.jpg" style="width:840px; height: 500px;">
        </div>

        <div class="mySlides">
            <img src="images/Scrollimage4.jpg" style="width:840px; height: 500px;">
          </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
      <br>
      <!-- The dots/circles -->
      <div class="circle">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <div class="grid1">
        <div class="one" style="background-image: url(images/onegrid.jpg);">
          <div class="gridtext"><a href="indexproducts.html">New Launches</a></div>
        </div>
        <div class="two" style="background-image: url(images/customerS.png);">
          <div class="gridtext"><a href="support.html">Customer Support</a></div>
        </div>
          
        <div class="three" style="background-image: url(images/review.jpg);">
          <div class="gridtext"><p>Reviews</p>
            
              Emma R:
              <br>
              "Modern Elegance! SAMEERTV TECH's latest TV is a true gem. It seamlessly combines contemporary style with cutting-edge technology."
              <br>
              Oliver G:</em>
              <br>
              "A Technological Marvel! SAMEERTV TECH's newest TV is a delightful innovation. Extremely satisfied with my purchase!"

            
          </div>
        </div>
          
        <div class="four"  style="background-image: url(images/Member.png);">
          <div class="gridtext"><a href="form.html">Become a member</a></div>
        </div>
       
        <div class="five"  style="background-image: url(images/sales.gif);" >
          <div class="gridtext"><a href="indexdeals.html">Sales & Discounts</a></div>
        </div>
      </div>
      <p class="textSection">Grab a look on our premium <strong><em>Glace Collection</em></strong> which has designated space for everything you need to adjust in a  fridge. Eat fresh and have a chilling experience indeed.</p>
    <div class="video_container">
    <video class="video-pre" width="480" height="320" controls>
      <source src="video/TVadds.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video></diV>
        <p class="textSection">SAMEERTV TECH is a global leader in cutting-edge television solutions, providing a diverse range of energy-efficient TVs for households and businesses. With a relentless focus on innovation, SAMEERTV TECH offers smart connectivity features and prioritizes environmental responsibility. Our mission is to deliver reliable,
          sustainable television products that elevate entertainment experiences worldwide.
        </p>
        
    </section>

    <!--Page Aside-->
    <aside>
      
       <h2>Frequently Asked Questions</h2> 
       <button class="accordion">1. What sets our Smart TVs apart from others in the market?</button>
<div class="panel">
  <p>Our Smart TVs stand out for their cutting-edge technology, sleek design, and exceptional performance. With advanced features and superior image quality, our TVs redefine your entertainment experience.</p>
</div>

<button class="accordion">2. Can I customize the display size or smart features of my Smart TV?</button>
<div class="panel">
  <p>Absolutely! We understand the importance of tailoring your entertainment setup. Our Smart TVs offer customization options for display sizes and smart features, allowing you to personalize your viewing experience.</p>
</div>

<button class="accordion">3. Are replacement parts available for maintenance and repairs?</button>
<div class="panel">
  <p>Yes, we ensure the availability of replacement parts for our Smart TVs, making maintenance and repairs hassle-free. Our dedicated customer service team is ready to assist you with any queries related to spare parts.</p>
</div>

<button class="accordion">4. How do I clean and care for my Smart TV?</button>
<div class="panel">
  <p>We provide comprehensive care instructions with every purchase to guide you in cleaning and maintaining your Smart TV. Following our guidelines will help preserve its sleek appearance and optimal performance.</p>
</div>

<button class="accordion">5. Do you offer international shipping for Smart TVs?</button>
<div class="panel">
  <p>Yes, we offer international shipping to make our Smart TVs accessible to customers worldwide. Contact our customer service team for shipping options and details to bring the latest in entertainment technology to your doorstep.</p>
</div>

<button class="accordion">6. Can I visit a showroom to experience the Smart TVs in person?</button>
<div class="panel">
  <p>Certainly! Explore the features of our Smart TVs firsthand by visiting one of our showrooms. Check our website for showroom locations and operating hours to make an informed decision about your next entertainment centerpiece.</p>
</div>

<button class="accordion">7. What payment methods do you accept for Smart TV purchases?</button>
<div class="panel">
  <p>We accept a variety of payment methods, including major credit cards and online payment platforms, ensuring a smooth and secure checkout process for your Smart TV purchase.</p>
</div>

     </div>
     <h3>About Us</h3>
     <p><strong>SameerTV Tech - Transforming Entertainment with Innovation and Style</strong></p>
     <p>Welcome to SameerTV Tech, where we redefine your entertainment experience with cutting-edge technology and a commitment to style. Since our establishment, we have dedicated ourselves to delivering TVs that not only showcase the latest advancements but also enhance the aesthetic appeal of your living space.</p>
     <p><strong>Modern Innovation, Timeless Style:</strong></p>
     <p>Our TVs go beyond being mere electronic devices; they are a fusion of innovation and artistry. Each SameerTV Tech product is designed with meticulous attention to detail, offering timeless style and superior craftsmanship. With sleek profiles and advanced features, our TVs seamlessly integrate into your home, becoming the centerpiece of your entertainment setup.</p>
<button class="newsletter" type="submit">Subscribe to our Newsletter!</button>
    </aside>
  </main>
    <!-- Testimonial End -->
        


<?php
    include 'templates/footer.php';
?>