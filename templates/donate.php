<?php
/**
 * Template Name: Donate
 *
 * @package Flint\Candlelight
 * @since 0.1.0
 */

$donate = false;

$donor_name    = !empty($_POST["donor_name"])    ? $_POST["donor_name"]    : null;
$donor_email   = !empty($_POST["donor_email"])   ? $_POST["donor_email"]   : null;
$donor_country = !empty($_POST["donor_country"]) ? $_POST["donor_country"] : null;
$donor_updates = !empty($_POST["donor_updates"]) ? true                    : false;
$submitted     = !empty($_POST["submitted"])     ? true                    : false;

if ($submitted) {
  if (!empty($donor_name) && !empty($donor_country)) {
    if ($donor_updates && !empty($donor_email)) {
      $donate = true;
    }
    elseif (! $donor_updates) {
      $donate = true;
    }
  }
}

if ($donate) {
  if ($donor_country == 'in') {
  }
  if ($donor_country == 'gb') {
  }
  if ($donor_country == 'us' || $donor_country == 'other') {
    $message  = '';
    $message .= 'Name: '       . $donor_name;
    $message .= 'Email: '      . $donor_email;
    $message .= 'Country: '    . $donor_country;
    $message .= 'Newsletter: ' . $donor_updates;

    mail('dev@starverte.com','Vuyiroli Donation', $message);

    header('Location: https://www.worldventure.com/give/donate.php?REFundID=6473913');
    exit;
  }
}

get_header();
flint_get_widgets('header');
?>

  <div id="primary" class="content-area container">

    <div class="row">

      <?php flint_get_widgets('left'); ?>

      <div id="content" role="main" <?php flint_content_class(); ?>>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php $type = get_post_type(); ?>

            <div class="row">
              <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>

                <?php if ( is_search() ) : ?>
                <div class="entry-summary">
                  <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
                <?php else : ?>
                <div class="entry-content">
                  <?php
                    if ($submitted) {
                      if (empty($donor_name)) {
                        echo '<div class="alert alert-danger"><strong>Name is required</strong>. If you wish to make an anonymous donation, please donate using an alternative method.</div>';
                      }
                      if (empty($donor_email)) {
                        if ($donor_updates) {
                          echo '<div class="alert alert-danger"><strong>Email is required</strong>. If you wish to receive updates, an email address must be provided.</div>';
                        }
                        else {
                          echo '<div class="alert alert-warning">Please enter your email address.</div>';
                        }
                      }
                      if (empty($donor_country)) {
                        echo '<div class="alert alert-danger"><strong>Country is required</strong>. Please enter your country of residence.</div>';
                      }
                    }
                  ?>

                  <div class="row">
                    <!-- <div class="col-xs-6"><?php flint_the_content(); ?></div> -->
                    <div class="col-xs-6">
                      <h2>Online Donations</h2>
                      <p><!--If you are within India or the United Kingdom, online donations are processed by PayPal.--> All <!--other --> online donations are processed by WorldVenture.</p>
                      <form action="<?php echo get_permalink(); ?>" method="post">
                        <div class="form-group">
                          <label for="donor_name">Name</label>
                          <input type="text" class="form-control" id="donor_name" name="donor_name" placeholder="Full Name" value="<?php echo $donor_name; ?>">
                        </div>
                        <div class="form-group">
                          <label for="donor_email">Email address</label>
                          <input type="email" class="form-control" id="donor_email" name="donor_email" placeholder="Enter email" value="<?php echo $donor_email; ?>">
                        </div>
                        <div class="form-group">
                          <label for="donor_country">Country</label>
                          <select class="form-control" id="donor_country" name="donor_country">
                            <option>Select a country</option>
                            <?php
                              $options = array(
                                //'India'          => 'in',
                                //'United Kingdom' => 'gb',
                                'United States'  => 'us',
                                'Other'          => 'other'
                              );
                              foreach ($options as $option => $value) {
                                if ($value == $donor_country) {
                                  echo '<option value="'.$value.'" selected>'.$option.'</option>';
                                }
                                else {
                                  echo '<option value="'.$value.'">'.$option.'</option>';
                                }
                              }
                            ?>
                          </select>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" id="donor_updates" name="donor_updates" value="true" checked> Sign me up to receive updates
                          </label>
                        </div>
                        <input type="hidden" name="submitted" value="<?php echo substr( md5(rand()), 0, 7); ?>">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                    </div>


                  </div><!-- .row -->

                  <?php
                  flint_link_pages( array(
                    'before' => '<ul class="pagination">',
                    'after'  => '</ul>',
                  ) ); ?>
                </div><!-- .entry-content -->
                <?php endif; ?>

              </article><!-- #page-<?php the_ID(); ?> -->
              <div class="col-lg-2 col-md-2 col-sm-2"></div>
            </div><!-- .row -->

          <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>

        <?php endwhile; ?>

      </div><!-- #content -->

      <?php flint_get_widgets('right'); ?>

    </div><!-- .row -->

  </div><!-- #primary -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>
