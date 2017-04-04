@extends('layouts.metronic.app')

@section('title', 'Default Blank Page')

@section('content')
<div class="row">
   <div class="col-md-12">
      <!-- BEGIN PORTLET-->
      <div class="portlet light bordered">
         <div class="portlet-title">
             <div class="caption">
                 <i class="icon-share font-dark"></i>
                 <span class="caption-subject font-dark bold uppercase">Default</span>
             </div>
             <div class="actions">
                 <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
             </div>
         </div>
         <div class="portlet-body">
             <h4 class="block">Default Title</h4>
             <div class="alert alert-success">
                 <strong>Success!</strong> The page has been added. </div>
             <div class="alert alert-info">
                 <strong>Info!</strong> You have 198 unread messages. </div>
             <div class="alert alert-warning">
                 <strong>Warning!</strong> Your monthly traffic is reaching limit. </div>
             <div class="alert alert-danger">
                 <strong>Error!</strong> The daily cronjob has failed. </div>
             <h4 class="block">Dismissable Alerts</h4>
             <div class="alert alert-warning alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                 <strong>Warning!</strong> Something went wrong. Please check. </div>
             <h4 class="block">Links in alerts</h4>
             <div class="alert alert-success alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                 <strong>WOW!</strong> Well done and everything looks OK.
                 <a href="" class="alert-link"> Please check this one as well </a>
             </div>
         </div>
      </div>
   </div>
</div>
@endsection