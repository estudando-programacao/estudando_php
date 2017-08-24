<?php

require_once 'http_api_tests.php';

$siteTitle = 'GERA - MailChimp API Integration<hr>';

$list = getDefaultList();

?>

    <!DOCTYPE html>

    <html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <title>
            <?php echo $siteTitle; ?>
        </title>
        
        <style type="text/css">
            a:hover {
                text-decoration: none;    
            }
        </style>

    </head>

    <body>


        <div class="container">

            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h1><?php echo $siteTitle; ?></h1>
                </div>
                
                <div class="col-md-4 card">
                    <form action="create_campaign.php" method="POST">
                        
                        <fieldset>
                            
                            <legend>CREATE NEWS</legend>
                        
                            <div class="form-group">
                                <label>campaign name</label>
                                <input type="text" class="form-control" name="mailchimp_cp_name" placeholder="enter campaign name">
                            </div>
                            
                            <div class="form-group">
                                <label>label:</label>
                                <select class="form-control" name="mailchimp_cp_label">
                                    <option value="[ STL ]">STL</option>
                                    <option value="[ STL | SHOP ]">STL | SHOP</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>from:</label>
                                <input type="text" class="form-control" name="mailchimp_cp_from" placeholder="enter from name">
                            </div>
                            
                            <div class="form-group">
                                <label>reply to:</label>
                                <input type="email" class="form-control" name="mailchimp_cp_replyto" placeholder="enter email for replies">
                            </div>
                        
                            <div class="form-group">
                                <label>campaign type:</label>
                                <select class="form-control" name="mailchimp_cp_type">
                                    <option value="regular">Normal</option>
                                    <option value="absplit">A/B Test</option>
                                    <option value="plaintext">Plain Text</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>mail list:</label>
                                <select class="form-control" name="mailchimp_cp_list">
                                    <?php echo "<option value='{$list}'>Contato</option>"; ?>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Create</button>
                        
                        </fieldset>
                    
                    </form>
                </div>
                
                <div class="col-md-4 card">
                    
                    <form action="subscribe_user.php" method="POST">
                        <fieldset>
                            
                            <legend>SUBSCRIBE USER</legend>
                        
                            <div class="form-group">
                                <label>first name:</label>
                                <input type="text" class="form-control" name="mailchimp_us_first" >
                            </div>
                            
                            <div class="form-group">
                                <label>last name:</label>
                                <input type="text" class="form-control" name="mailchimp_us_last" >
                            </div>
                            
                            <div class="form-group">
                                <label>email:</label>
                                <input type="text" class="form-control" name="mailchimp_us_email" >
                            </div>
                            
                            <div class="form-group">
                                <label>status:</label>
                                <select class="form-control" name="mailchimp_us_status">
                                    <option value="subscribed">subscribed</option>
                                    <option value="unsubscribed">unsubscribed</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label>mail list:</label>
                                <select class="form-control" name="mailchimp_us_list">
                                    <?php echo "<option value='{$list}'>Contato</option>"; ?>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        
                        </fieldset>
                    
                    </form>
                </div>
                
                <div class="col-md-4 card">
                    
                    <form action="put_news_content.php" method="POST">
                        <fieldset>
                            
                            <legend>PUT CONTENT</legend>
                        
                            <div class="form-group">
                                <label>path/URL:</label>
                                <input type="text" class="form-control" name="mailchimp_cp_put_path" >
                            </div>
                            
                            <div class="form-group">
                                <label>list campaigns:</label>
                                <select class="form-control" name="mailchimp_cp_put_name">
                                    <?php listCampaignsName(); ?>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Put</button>
                        
                        </fieldset>
                    
                    </form>
                </div>
                
                <div class="col-md-12 card">
                    
                    <h3>list campaigns</h3>
                    
                    <table class="table table-bordered table-hover table-sm text-center">
                        
                      <thead class="thead-inverse">
                        <tr>
                          <th class="text-center">ID</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Subject</th>
                          <th class="text-center">List to Send</th>
                          <th class="text-center">Sent Time</th>
                          <th class="text-center">Create Time</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                            <?php listCampaigns(); ?>
                      </tbody>
                      
                    </table>
                    
                </div>
                
                <div class="col-md-12 card">
                    
                    <h3>list users from default list (Contato)</h3>
                    
                    <table class="table table-bordered table-hover table-sm text-center">
                        
                      <thead class="thead-inverse">
                        <tr>
                          <th class="text-center">ID</th>
                          <th class="text-center">First Name</th>
                          <th class="text-center">Last Name</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Actions</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                            <?php listDefaultMembersList($list); ?>
                      </tbody>
                      
                    </table>
                    
                </div>
            </div>

        </div>
        
        <script type="text/javascript">
            
             $('#btn_delete_user').click(function() {

                 $.ajax({
                  type: "POST",
                  url: "index.php"
                }).done(function( msg ) {
                  alert( "Usuário deletado com sucesso." );
                });    
                
            });
            
        </script>

    </body>

    </html>
