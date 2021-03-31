<?php get_header();?>
<main>
  <div class="main-container">
    <form id="order-form">
        <label for="name">Имя:*</label>
        <input type="text" id="name" name="firstName">

        <label for="email">Email:*</label>
        <input type="email" id="email" name="lastName">

        <label for="tel-number">Телефон:*</label>
        <input type="text" id="tel-number" name="tel-number">

        <label for="name-company">Название компании:</label>
        <input type="text" id="name-company" name="firstName">

        <label for="state">Штат:*</label>
        <select name="state" id="state"></select>

        <label for="consultants">Консультант:*</label>
        <select name="consultants" id="consultants">
          <option value="consultant1">Консультант 1</option>
          <option value="consultant2">Консультант 2</option>
          <option value="consultant3">Консультант 3</option>
        </select>

        <button type="submit" id="submi">Оплатить</button>
    </form>
    <div class="calendly-inline-widget" data-url="https://calendly.com/bekker_kostya/60min?hide_event_type_details=1" style="min-width:320px;height:630px;"></div>
  </div>

  <?php
  

    while ( have_posts() ) {
      the_post();
      
      the_title();
      the_content();
    }

  ?>
</main>

<?php get_footer();