<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>
   <!-- Content Row -->
   <div class="row">
      

         <?php
            if(!empty($category_id))
            {
                ?>
            <div class=" col-sm-12 mb-4">
                 <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                       <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                             <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <?php

                                    $inc = 1;
                                        foreach ($category_id as $key => $value) 
                                        {
                                          if($inc ==1)
                                                {
                                                    $tab_active = "   active ";
                                                      $inc++;

                                                }else
                                                {
                                                    $tab_active = " ";
                                                }
                                              
                                            ?>
                                                <li class="nav-item">
                                                  <a class="nav-link <?php echo $tab_active;?>" id="home-tab<?php echo $value->category_id;?>" data-toggle="tab" href="#home<?php echo $value->category_id;?>" role="tab" aria-controls="home<?php echo $value->category_id;?>" aria-selected="true"><?php echo $get_category_list[$value->category_id];?></a>
                                               </li>
                                            <?php 
                                        }
                                    ?>
                                </ul>
                             </div>
                             <div class="row no-gutters align-items-center">
                                <div class="col-sm-4">
                                   <div class="h5 mb-0 font-weight-bold text-gray-800">
                                      <div class="tab-content" id="myTabContent">
                                         <?php
                                              
                                           foreach ($category_id as  $key => $values) {
                                             if($inc ==2)
                                                {
                                                    $show_action = " show active ";
                                                    $inc ++;
                                                }else
                                                {
                                                    $show_action = " ";
                                                }
                                                
                                            /* echo "<pre>";
                                              print_r($key );
                                               print_r($list_dtl[$key]); 
                                              echo "</pre>"; 
                                             echo "<br>"; */ 

                                             ?>
                                                     <div class="tab-pane fade <?php echo $show_action;?>" id="home<?php echo $values->category_id;?>" role="tabpanel" aria-labelledby="home-tab<?php echo $values->category_id;?>">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                          <?php

                                             $list_dtl_data = ($list_dtl[$key]);
                                               foreach ($list_dtl_data as $key => $value) {
                                                  
                                                              

                                                           
                                                              if(  $inc  ==3)
                                                              {
                                                                  $actives = "   active ";
                                                                   $inc ++;
                                                              }else
                                                              {
                                                                  $actives  = " ";
                                                              }
                                                              

                                                              ?>
                                                                 <a class="nav-link ttb <?php echo  $actives ;?> " id="v-pills-home-tab<?php echo $value->id;?>" data-toggle="pill" href="#v-pills-home<?php echo $value->id;?>" role="tab" aria-controls="v-pills-home<?php echo $value->id;?>" aria-selected="true"><?php echo $value->name;?></a>
                                                              <?php
                                                            
                                                        
                                               }

                                                 ?>
                                                        </div>
                                                     </div>
                                                <?php 
                                            

                                           }



                                             
                                         ?>
                                       </div>
                                   </div>
                                </div>
                                <div class="col-sm-8 ">

                                  <div class="card mb-4 py-3 border-left-success">
                                <div class="card-body">
                                      <div class="tab-content" id="v-pills-tabContent">
                                      <?php
                                        foreach ($list_dtl as $key => $valuez)
                                        {
                                            

                                              foreach ($valuez as $key => $valn)
                                               {
                                                if(  $inc  ==4)
                                                {
                                                    $sshow_actives = " show active ";
                                                     $inc ++;
                                                }else
                                                {
                                                    $sshow_actives  = " ";
                                              }
                                                  ?>
                                                  <div class="tab-pane fade <?php echo $sshow_actives;?>" id="v-pills-home<?php echo $valn->id;?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php echo base64_decode($valn->description);?></div>
                                              <?php
                                               }

                                              

                                             
                                        }
                                      ?>
                                    
                                       
                                   </div>
                                </div>
                            </div>
                                  
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div> 
                <?php
            }
         ?>
      
   </div>
</div>




<!-- /.container-fluid -->