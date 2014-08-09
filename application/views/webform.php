
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Design Questionnaire">
    <meta name="author" content="Cloud Wales">
    <link rel="icon" href="../../favicon.ico">

    <title>Web Development From</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <h2 class="text-muted text-center">Web Development Questionnaire</h2>
        <p><?php echo $this->session->flashdata('message'); ?></p>
        <?php if (isset($message)) {echo $message;} ?>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
        <p><span class="text-danger">* required</span></p>
        <h3>Contact Information</h3>

        
        <?php
            echo form_open('webform/send');

            // Name
            echo '<br/><label for="name">Name <span class="text-danger">*</span></label>';
            $name = array(
              'name'        => 'name',
              'id'          => 'name',
              'placeholder' => 'name',
              'class'       => 'form-control',
              'type'        => 'text',
              'value'       => set_value('name')
            );
            echo form_input($name);
            echo form_error('name');

            // Address
            echo '<br/><label for="address">Address</label>';
            $address = array(
              'name'        => 'address',
              'id'          => 'address',
              'placeholder' => 'address',
              'class'       => 'form-control',
              'type'        => 'text',
              'value'       => set_value('address')

            );
            echo form_input($address);
            echo form_error('address');

            // Email
            echo '<br/><label for="email">Email <span class="text-danger">*</span></label>';
            $email = array(
              'name'        => 'email',
              'id'          => 'email',
              'placeholder' => 'email',
              'class'       => 'form-control',
              'type'        => 'email',
              'value'       => set_value('email')

            );
            echo form_input($email);
            echo form_error('email');

            // Phone
            echo '<br/><label for="phone">Phone Numeber <span class="text-danger">*</span></label>';
            $phone = array(
              'name'        => 'phone',
              'id'          => 'phone',
              'placeholder' => 'phone',
              'class'       => 'form-control',
              'type'        => 'text',
              'value'       => set_value('phone')

            );
            echo form_input($phone);
            echo form_error('phone');
        ?>


            <br/>
        <hr/>
            <h3>Services</h3>
        </div>
            <div class="col-lg-6">
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'webdesign',
                            'id'          => 'webdesign',
                            'value'       => 'webdesign',
                            );

                        echo '<label>' . form_checkbox($data) . ' Web Design &amp; Development</label>';
                    ?>
                </div>
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'website_repair',
                            'id'          => 'website_repair',
                            'value'       => 'website_repair',
                            );

                        echo '<label>' . form_checkbox($data) . ' Website Repair</label>';
                    ?>
                </div>
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'redesign',
                            'id'          => 'redesign',
                            'value'       => 'redesign',
                            );

                        echo '<label>' . form_checkbox($data) . ' Website Re-Design</label>';
                    ?>
                </div>    
            </div>

            <div class="col-lg-6">
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'e_commerce',
                            'id'          => 'e_commerce',
                            'value'       => 'e_commerce',
                            );

                        echo '<label>' . form_checkbox($data) . ' E-Commerce Site</label>';
                    ?>
                </div>
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'cms_design',
                            'id'          => 'cms_design',
                            'value'       => 'cms_design',
                            );

                        echo '<label>' . form_checkbox($data) . ' CMS Site</label>';
                    ?>
                </div>
                <div class="checkbox">
                    <?php
                        $data = array(
                            'name'        => 'logo_design',
                            'id'          => 'logo_design',
                            'value'       => 'logo_design',
                            );

                        echo '<label>' . form_checkbox($data) . ' Logo Design</label>';
                    ?>
                </div>
            </div>   
            
            <div class="col-lg-12">      
            <hr/>

            <h3>Important information</h3>
            <?php
                // Domain
                echo '<br/><label for="domain">Domain Name <span class="text-danger">*</span></label>';
                $domain = array(
                  'name'        => 'domain',
                  'id'          => 'domain',
                  'placeholder' => 'domain name',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('domain')
                );
                echo form_input($domain);
                echo form_error('domain');

                // Project Deadline
                echo '<br/><label for="domain">Project Deadline</label>';
                $deadline = array(
                  'name'        => 'deadline',
                  'id'          => 'deadline',
                  'placeholder' => 'Is there a deadline?',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('deadline')
                );
                echo form_input($deadline);
                echo form_error('deadline');

                
                // Broken to phases
                $options = array(
                  'no'  => 'No',
                  'yes'    => 'Yes',
                );
                echo '<br/><label>Is the project to be broken down into phazes? ' . form_dropdown('phases', $options) . '</label>';

                
                // Use existing Content
                $existing_content = array(
                  'no'  => 'No',
                  'yes'    => 'Yes',
                );
                echo '<br/><br/><label>Will we be using existing content? ' . form_dropdown('existing_content', $existing_content). '</label>'; 

               
                // Existing Content
                echo '<br/><br/><label for="content_is">If so where is the content</label>';
                $content_is = array(
                  'name'        => 'content_is',
                  'id'          => 'content_is',
                  'placeholder' => 'where is the content',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('content_is')
                );
                echo form_input($content_is); 
                echo form_error('content_is'); 

                echo '<hr/><h3>Background</h3>';

                // Company Nature
                echo '<br/><label for="company_nature">What is the nature of the business <span class="text-danger">*</span></label>';
                $company_nature = array(
                  'name'        => 'company_nature',
                  'id'          => 'company_nature',
                  'placeholder' => 'nature of the business',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('company_nature')
                );
                echo form_input($company_nature); 
                echo form_error('company_nature'); 

                // Company services
                echo '<br/><label for="company_services">What are the services that the company provides? <span class="text-danger">*</span></label>';
                $company_services = array(
                  'name'        => 'company_services',
                  'id'          => 'company_services',
                  'placeholder' => 'company services',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('company_services')
                );
                echo form_input($company_services); 
                echo form_error('company_services');

                // How many pages
                echo '<br/><label for="no_pages">How many pages do you anticipate the site having?</label>';
                $no_pages = array(
                  'name'        => 'no_pages',
                  'id'          => 'no_pages',
                  'placeholder' => 'how many pages roughly',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('no_pages')
                );
                echo form_input($no_pages); 
                echo form_error('no_pages');

                // Target Audience
                echo '<br/><label for="target_aud">Who is the target audience?</label>';
                $target_aud = array(
                  'name'        => 'target_aud',
                  'id'          => 'target_aud',
                  'placeholder' => 'target audience',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('target_aud')
                );
                echo form_input($target_aud); 
                echo form_error('target_aud');

                // Any marketing materials
                echo '<br/><label for="marketing_materials">Do you currently have any marketing materrials?</label>';
                $marketing_materials = array(
                  'name'        => 'marketing_materials',
                  'id'          => 'marketing_materials',
                  'placeholder' => 'marketing materials',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('marketing_materials')
                );
                echo form_input($marketing_materials);
                echo form_error('marketing_materials'); 


                echo '<hr/><h3>Goals, Message</h3>';

                // Company Message
                echo '<br/><label for="company_message">What is primary message you wish to convey?</label>';
                $company_message = array(
                  'name'        => 'company_message',
                  'id'          => 'company_message',
                  'placeholder' => 'company message',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('company_message')
                );
                echo form_input($company_message); 
                echo form_error('company_message');

                // Design elements
                echo '<br/><label for="design_elements">Do you have any design elements in mind?</label>';
                $design_elements = array(
                  'name'        => 'design_elements',
                  'id'          => 'design_elements',
                  'placeholder' => 'design_elements message',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('design_elements')
                );
                echo form_input($design_elements); 
                echo form_error('design_elements');

                // Interactivity
                echo '<br/><label for="interactivity">What kind of interactivity will your site need?</label>';
                $interactivity = array(
                  'name'        => 'interactivity',
                  'id'          => 'interactivity',
                  'placeholder' => 'interactivity message',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('interactivity')
                );
                echo form_input($interactivity); 
                echo form_error('interactivity');


                echo '<hr/><h3>Style, Design Message, Theme</h3>';

                // Site Look and feel
                echo '<br/><label for="look_feel">What image do you want the site to project, what should be "the look and feel"? <span class="text-danger">*</span></label>';
                $look_feel = array(
                  'name'        => 'look_feel',
                  'id'          => 'look_feel',
                  'placeholder' => 'site look and feel',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('look_feel')
                );
                echo form_input($look_feel); 
                echo form_error('look_feel');

                // Sites you like look of
                echo '<br/><label for="liked_sites">List some sites you like the look of <span class="text-danger">*</span></label>';
                $liked_sites = array(
                  'name'        => 'liked_sites',
                  'id'          => 'liked_sites',
                  'placeholder' => 'sites you like',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('liked_sites')
                );
                echo form_input($liked_sites); 
                echo form_error('liked_sites');

                // Site you like the navigation
                echo '<br/><label for="like_navigation">List some sites you like the look of the navigation</label>';
                $like_navigation = array(
                  'name'        => 'like_navigation',
                  'id'          => 'like_navigation',
                  'placeholder' => 'sites you like the navigation',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('like_navigation')
                );
                echo form_input($like_navigation); 
                echo form_error('like_navigation');

                // Site you like colours
                echo '<br/><label for="liked_colours">List some sites you like the colours of</label>';
                $liked_colours = array(
                  'name'        => 'liked_colours',
                  'id'          => 'liked_colours',
                  'placeholder' => 'sites you like the colour',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('liked_colours')
                );
                echo form_input($liked_colours);
                echo form_error('liked_colours'); 

                // Site you like layout
                echo '<br/><label for="site_layout">List some sites you like the layout of</label>';
                $site_layout = array(
                  'name'        => 'site_layout',
                  'id'          => 'site_layout',
                  'placeholder' => 'sites you like the layout',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('site_layout')
                );
                echo form_input($site_layout);
                echo form_error('site_layout');

                // Competitor sites
                echo '<br/><label for="competitor_sites">List some competitor sites</label>';
                $competitor_sites = array(
                  'name'        => 'competitor_sites',
                  'id'          => 'competitor_sites',
                  'placeholder' => 'competitor sites',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('competitor_sites')
                );
                echo form_input($competitor_sites); 
                echo form_error('competitor_sites');

                
                echo '<hr/><h3>Logo and Corporate Identiity</h3>';

                // Logo 
                $options = array(
                  'no'  => 'No',
                  'yes'    => 'Yes',
                );
                echo '<br/><label>Do you have a company logo? ' . form_dropdown('logo', $options) . '</label>';
                

                // Slogan
                echo '<br/><br/><label for="your_slogan">Do you have a slogan or mission statment?</label>';
                $your_slogan = array(
                  'name'        => 'your_slogan',
                  'id'          => 'your_slogan',
                  'placeholder' => 'your slogan',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('your_slogan')
                );
                echo form_input($your_slogan);
                echo form_error('your_slogan');

                // Slogan
                echo '<br/><label for="colours">What are your company colours?</label>';
                $colours = array(
                  'name'        => 'colours',
                  'id'          => 'colours',
                  'placeholder' => 'your colours',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('colours')
                );
                echo form_input($colours);
                echo form_error('colours');


                echo '<hr/><h3>Maintinance</h3>';

                // Needed 
                $options = array(
                  'myself'    =>  'Myself',
                  'us'    =>  'You',
                  'friend'=>  'A Friend',
                  'other' =>  'Other'
                );
                echo '<br/><label>Who will be maintaining the site? ' . form_dropdown('maintinance', $options) . '</label>';

                // Frequent 
                $options = array(
                  'daily'     =>  'Daily',
                  'weekly'    =>  'Weekly',
                  'monthly'   =>  'Monthly',
                  'not_sure'  =>  'Not Sure'
                );
                echo '<br/><br/><label>How often will the site be updated? ' . form_dropdown('updates', $options) . '</label>';


                echo '<hr/><h3>Additional Notes/Comments</h3>';
                // Other Info
                
                $notes = array(
                  'name'        => 'notes',
                  'id'          => 'notes',
                  'class'       => 'form-control',
                  'type'        => 'text',
                  'value'       => set_value('notes')
                );
                echo form_textarea($notes);
                echo form_error('notes');


            ?>

            </div>



            <div class="col-lg-12"><br/><br/><hr/><button type="submit" class="btn btn-success btn-lg btn-block">Submit</button></div>
        </form>

      </div>

      <div class="footer">
        <p>&copy; Cloud Wales 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
