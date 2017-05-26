<?php get_header(); ?>
<!-- SMAKEN-->
    <!-- filter
    <div class="filter">
            <div class="sluiten">
                <i>X</i>
            </div>
            <form action="" class="filter-form">
                <label for="smaak">Smaak naam:</label><br>
                <input type="text" name="smaak" id="smaak"><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="checkbox" name="1" value="0">
                <label for="1">filter item 1</label><br>
                <input type="submit" value="filter" id="filter">

            </form>
        </div>
    -->
    <div class="container">
        
        <section class="smaken">
        <div class="vergrootglas">
            <i class="fa fa-search"></i>
        </div>
        
            <?php 
                $itemcount = 0;
                while(have_posts()):the_post();
                    $itemcount++;
                    if($itemcount%3==1){
                    echo '<div class="flex-container">';
                    }
             ?>
                    <div class="smaak-div flex-item flex-item-same">
                        <a href="<?php echo get_post_field('post_name', get_post());?>" class="smaken-smaak">
                            <div class="smaak-image">
                            <?php the_post_thumbnail(array(225,300)); ?>
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <p>
                                <?php 
                                    echo get_post_meta(get_the_ID(), '_smaakbeschrijving', true);
                                    
                                    
                                ?>
                            </p>
                        </a>
                    </div>
                    <?php if($itemcount%3==0){
                        echo "</div>";
                    }
                endwhile;
                if($itemcount%3==1){
                    echo "<div class='flex-item flex-item-same'> </div>";
                    echo "<div class='flex-item flex-item-same'> </div>";
                }else if($itemcount%3==2){
                    echo "<div class='flex-item flex-item-same'> </div>";
                }

                ?>
                


           
            
        </section>
    </div>
    <!-- END SMAKEN -->

<?php get_footer(); ?>