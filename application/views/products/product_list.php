<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="contentheadflex content-header"  id="contentheid">
          <div class="row">
             <div class="col-sm-12">
                 <div class="contenttitle">
                     <h3>
                        Manage Products
                      </h3>
                      <?php echo $this->session->flashdata('message');  ?>
                 </div>
             </div>
         </div>
         <!--end row -->
    </section>

          
                <div class="settingstablebody box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    
                    
                     <colgroup>
                          <col width="100">
                          <col>
                          <col>
                      </colgroup>
                      
                      <tr class="catmanageheader">
                          <th>ID</th>    
                          <th>Title</th>    
                          <th>Category</th>    
                          <th>Price</th>    
                          <th>Description</th>    
                          <th>Action</th>    
                      </tr>
                    
                         <!-- start tr -->
            <?php foreach($result as $row) { ?>
                        <tr>
                          <td><?=$row['id']?></td>
                          <td>
                              <div class="settingsinf">
                                  <?=$row['title']?>
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['category_id']?>
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['price']?>
                              </div>
                          </td>

                          <td>
                              <div class="settingsinf">
                                  <?=$row['description']?>
                              </div>
                          </td>

                          <td>
                              <div class="settinginfdetails">
                                  <p><a href="<?=base_url()?>Manage_products/edit_products/<?=$row['id']?>" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a> &nbsp |  &nbsp

                                  <a href="<?=base_url()?>Manage_products/delete_products/<?=$row['id']?>" data-toggle="modal" data-tooltip="tooltip"><span class="glyphicon glyphicon-trash"></span></a></p>
                              </div>
                          </td>
                        </tr> 
                        <!--end tr --> 
                        
                     <?php }?>

                      </tbody>
                    </table>
                    
                    <!-- start pagination -->
                    <div class="paginationtables">
                        <ul style="list-style: none;">
                            <center><li><?php
                    
                     echo $this->pagination->create_links(); ?></li></center>
                           
                        </ul>
                    </div>
                    <!--end paginatioin -->
                    
                    
                    
                </div><!-- box header -->

            </form>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box --> 
        </div>  
          
          
      </div>
      <!-- /.row -->
      <!-- Main row -->


    </section>
    <!-- /.content -->
  </div>