
<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-inbox bg-c-blue"></i>
<div class="d-inline">
<h5>Gallery Section</h5>
<!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
    
<!-- <li class="breadcrumb-item">
<a href="index-2.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Advanced Initialization</a>
</li> -->

<a href="<?php base_url(); ?>add_gallary">
<li class="breadcrumb-item"><input type="submit" style="border-radius:20px;" class="btn btn-primary" value="Add Image" name="">
</li>
</a>

</ul>

</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">

<div class="card">
<div class="card-header">
<h5>All Records</h5>

</div>
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>
<tbody>
	<?php  
           if($fetch_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "./uploads/gallary/";
                    $image = $row->image;
           ?> 
<tr>
<td><?php echo $t; ?></td>
<td><?php echo $row->name;; ?></td>
<td><img src="<?php echo $imgURL.$image; ?>" style="height: 60px; width: 100px;" ></td>
<!-- <td><?php echo nl2br($row->generated_at); ?></td> -->
 <td>

<!-- <a href="<?php base_url(); ?>edit_services/<?php $uid = $row->id; echo $uid; ?>">
 <input type="button" style="border-radius:30px;" value="Update" class="btn btn-success">
</a> -->




    <?=anchor("gallary/delete_data/".$row->id,"<i class='fa fa-trash' style='font-size:25px; color:red;'></i>",array('onclick' => "return confirm('Do you want to really delete this record??')"))?>





</td>


</tr>
<?php } } ?>
</tfoot>
</table>
</div>
 
</div>
</div>







</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?php echo base_url(); ?>files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function delete(id){
       var r=confirm("Do you want to delete this?")
        if (r==true)
          window.location = url+"about/delete_data/"+id;
        else
          return false;
        } 
</script>


<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery/js/jquery.min.js"></script>
<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/popper.js/js/popper.min.js"></script>
<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>files/assets/pages/waves/js/waves.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>

<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/modernizr/js/modernizr.js"></script>
<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?php echo base_url(); ?>files/assets/pages/waves/js/waves.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>

<script src="<?php echo base_url(); ?>files/bower_components/datatables.net/js/jquery.dataTables.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/pages/data-table/js/jszip.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/pages/data-table/js/pdfmake.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/pages/data-table/js/vfs_fonts.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>

<script src="<?php echo base_url(); ?>files/assets/pages/data-table/js/data-table-custom.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/pcoded.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/vertical/vertical-layout.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script src="<?php echo base_url(); ?>files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>
<script type="1b71cb6ea64902a44dc8b7cc-text/javascript" src="<?php echo base_url(); ?>files/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="1b71cb6ea64902a44dc8b7cc-text/javascript"></script>

<script src="files/assets/js/rocket-loader.min.js" data-cf-settings="1b71cb6ea64902a44dc8b7cc-|49" defer=""></script></body>

</html>
