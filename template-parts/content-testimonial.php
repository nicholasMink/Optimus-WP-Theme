<?php
/**
 * Template part for displaying testimonials
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package OPTIMUS
 */

?>
<?php 
  //vars
  $testimonial_1 = get_field('testimonial_1');
  $testimonial_2 = get_field('testimonial_2');
  $testimonial_3 = get_field('testimonial_3');
?>

<?php if($testimonial_1): ?>

  <div class="testimonial__wrapper">

    <div class="testimonial__block_1">
      <img src="<?php echo $testimonial_1['testimonial_image'] ?>" alt="testimonial image" style="border-radius:50%;" />
      <p><?php echo $testimonial_1['testimonial_text'] ?><br><small><i>- <?php echo $testimonial_1['testimonial_author'] ?></i></small></p>
    </div>

    <div class="testimonial__block_2">
      <img src="<?php echo $testimonial_2['testimonial_image'] ?>" alt="testimonial image" style="border-radius:50%;" />
      <p><?php echo $testimonial_2['testimonial_text'] ?><br><small><i>- <?php echo $testimonial_2['testimonial_author'] ?></i></small></p>
    </div>

    <div class="testimonial__block_3">
      <img src="<?php echo $testimonial_3['testimonial_image'] ?>" alt="testimonial image" style="border-radius:50%;" />
      <p><?php echo $testimonial_3['testimonial_text'] ?><br><small><i>- <?php echo $testimonial_3['testimonial_author'] ?></i></small></p>
    </div>

  </div>

<?php endif; ?>

<script>
  const testimonial_1 = document.querySelector('.testimonial__block_1'),
        testimonial_2 = document.querySelector('.testimonial__block_2'),
        testimonial_3 = document.querySelector('.testimonial__block_3');

  // Variables for testimonials slider
  const testimonials = [testimonial_1, testimonial_2, testimonial_3], 
        sliderTime = 4000;
  let counter = 1;

  window.setInterval(startSlider, sliderTime);
  
  // Hide all testimonials
  for(let testimonial of testimonials) {
    hideTestimonial(testimonial);
  }

  // Show first testimonial on page load
  showTestimonial(testimonial_1);

  // Main function for associate program testimonials
  function startSlider( ) {
    let theTestimonial = testimonials[counter];
    for(let testimonial of testimonials) {
      hideTestimonial(testimonial);
    }
    showTestimonial(theTestimonial);
    counter++;
    if (counter === 3) {
      counter = 0;
    }
  }

  // Display single testimonial
  function showTestimonial( testimonial = null ) {
    testimonial.style.display = 'flex';
  }
  
  // Hide single testimonial
  function hideTestimonial( testimonial = null ) {
    testimonial.style.display = 'none';
  }
  
</script>