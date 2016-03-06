

<?php get_header(); ?>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	
<script type="text/javascript" src="wp-content\themes\Projekat 1\slick\slick.min.js"></script> 


	<script type="text/javascript" src="wp-content\themes\Projekat 1\selectivity\selectivity-full.js"></script>
<div class="slider">
		<div><img src="wp-content\themes\Projekat 1\img\rotator_slika.jpg"/></div>
		<div><img src="wp-content\themes\Projekat 1\img\rotator_slika.jpg"/></div>
	</div>

	

	
	 <div class="blackPar">
        <div class="colCenter">
	 	<div class="civil">
	 		<div class="lijevo verticalAlign">
                    <input type="search" placeholder="Pronadji instituciju"/>
                    <select id="single-select-box" class="selectivity-input" data-placeholder="Kategorija institucije" name="traditional[single]" single>
            <option>Kategorija institucije</option>
            <option>Drustvene institucije</option>
            <option>Institucije Evropse unije</option>
            <option>Institucije Crne Gore</option>
            <option>Institucije vlasti</option> 
        </select>
             
                     <select id="multiple-select-box" class="selectivity-input" data-placeholder="Type to search cities" name="traditional[multiple]" multiple>
                         <optgroup label="Montenegro">
                    <option value="80" data-timezone="+00:00">Podgorica</option>
                    <option value="81" data-timezone="+00:00">Cetinje</option>
                    <option value="82" data-timezone="+00:00">Niksic</option>
                    <option value="83" data-timezone="+00:00">Budva</option>
                </optgroup>
                <optgroup label="Austria">
                    <option value="54" data-timezone="+01:00">Vienna</option>
                </optgroup>
                <optgroup label="Croatia">
                    <option value="58" data-timezone="+01:00">Zagreb</option>
                </optgroup>
                <optgroup label="Czech Republic">
                    <option value="42" data-timezone="+01:00">Prague</option>
                </optgroup>
                <optgroup label="Denmark">
                    <option value="13" data-timezone="+01:00">Copenhagen</option>
                </optgroup>
                <optgroup label="England">
                    <option value="6" data-timezone="+00:00">Birmingham</option>
                    <option value="7" data-timezone="+00:00">Bradford</option>
                    <option value="26" data-timezone="+00:00">Leeds</option>
                    <option value="30" data-timezone="+00:00">London</option>
                </optgroup>
                <optgroup label="Finland">
                    <option value="25" data-timezone="+02:00">Helsinki</option>
                </optgroup>
                <optgroup label="France">
                    <option value="35" data-timezone="+01:00">Marseille</option>
                    <option value="40" data-timezone="+01:00">Paris</option>
                </optgroup>
                <optgroup label="Italy">
                    <option value="20" data-timezone="+01:00">Genoa</option>
                    <option value="36" data-timezone="+01:00">Milan</option>
                    <option value="38" data-timezone="+01:00">Naples</option>
                    <option value="39" data-timezone="+01:00">Palermo</option>
                </optgroup>
                <optgroup label="Latvia">
                    <option value="43" data-timezone="+02:00">Riga</option>
                </optgroup>
                <optgroup label="Lithuania">
                    <option value="55" data-timezone="+02:00">Vilnius</option>
                </optgroup>
                <optgroup label="Netherlands">
                    <option value="1" data-timezone="+01:00">Amsterdam</option>
                    <option value="45" data-timezone="+01:00">Rotterdam</option>
                    <option value="51" data-timezone="+01:00">The Hague</option>
                </optgroup>
                <optgroup label="Poland">
                    <option value="29" data-timezone="+01:00">Łódź</option>
                    <option value="31" data-timezone="+01:00">Kraków</option>
                    <option value="41" data-timezone="+01:00">Poznań</option>
                </optgroup>
                <optgroup label="Sweden">
                    <option value="22" data-timezone="+01:00">Gothenburg</option>
                    <option value="49" data-timezone="+01:00">Stockholm</option>
                </optgroup>
            </select>
            


                    <input type="submit" value="Search"/>
               


                </div>

	 		<img src="wp-content\themes\Projekat 1\img\smallCivil.png" alt="slika civil"/></div></div>
	 	<div class="contain"></div>
    </div>

    <div class="colCenter">
    	
    	<div style="bottom: 300px;">
    		<p class="paragraf1">I civilno drustvo</p>
    		<p class="paragraf2">odlucuje!</p>
    	</div>
    	
    </div>

    <div>
        <div class="containerWhole">
            <div class="back">
            <h1>Nesto o <span>bazi</span></h1>
            <p>Lorem ipsum dolor sit amet, iisque qualisque in sit. Mutat viris adipisci eos ut, mel et alii quidam disputando. </p>
            <img src="wp-content\themes\Projekat 1\img\paragraf_prvi.jpg" alt="slika paragraf 1"/>
        </div>
         <div class="back goDo">
            <h1>Kontaktirajte <span>nas</span></h1>
            <p>Lorem ipsum dolor sit amet, iisque qualisque in sit. Mutat viris adipisci eos ut. </p>
            <img src="wp-content\themes\Projekat 1\img\paragraf_drugi.jpg" alt="slika paragraf 2"/>
        </div>

        <div class="backer">
            <h1>Zadnje <span>Aktuelnosti</span></h1>
            <ul>
                <li><a>I civilno drustvo odlucuje! Moras znati da se ti pitas i sam odlucujes !</a></li>
                <li class="active"><a>Lorem ipsum dolor sit amet, iisque qualisque in sit. Mutat viris adipisci eos ut.</a></li>
            </ul>
            <div class="input">Pogledaj sve aktuelnosti
                <img src="wp-content\themes\Projekat 1\img\array.jpg" alt="slicica"/></div>
        </div>
        </div>
    </div>

    <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="colCenter">
  <div id="post-<?php the_ID(); ?>" <?php post_class('article'); ?> style="background-color: white; padding: 20px; width: 49%; float:left !important;">
    <div class="post-header">
       <div class="date"><?php the_time( 'M j / 20y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author" style="font-weight: bold;">Author:&nbsp;<?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
</div>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<script type="text/javascript" src="wp-content\themes\Projekat 1\js\slick.js"></script>
<script type="text/javascript" src="wp-content\themes\Projekat 1\js\selectivity.js"></script>

<?php get_footer(); ?>
