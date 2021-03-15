<?php
       $args = array(
       'post_type'                     => 'Event',
       'child_of'                 => 0,
       'parent'                   => '',
       'orderby'                  => 'name',
       'order'                    => 'ASC',
       'hide_empty'               => false,
       'pad_counts'               => false );
       $categories = get_categories($args);
       echo '<ul>';

       foreach ($categories as $category) {
         $url = get_term_link($category);?>
          <li><a href="<?php echo $url;?>"><?php echo $category->name; ?></a></li>
         <?php
       }
       echo '</ul>';
   ?>


