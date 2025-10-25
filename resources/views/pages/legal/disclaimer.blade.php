@extends('layouts.web')
@section('title', 'Disclaimer')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container mx-auto" style="min-height:250px">
   <div class="mx-4"> 
    <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl">
       
       
        <ul style="list-style-type: disc;"  class="mx-4">
            <li class="my-2"><p>There may be suspicious links that may take you to another websites that are different or not linked with essaywritingservice.ae</p></li>
            <li class="my-2"><p>All the services given for the website if related to educational purpose only</p></li>
            <li class="my-2"><p>We have ensured that the information provided on the website is appropriate and authentic</p></li>
            <li class="my-2"><p>We keep updating the information as per the changes in policy or services</p></li>
            <li class="my-2"><p>All the information required by the client for placing the order is never leaked or shared with others</p></li>
            <li class="my-2"><p>ae will not be accountable for any loss or letdown for the data from the clients in accordance with the projects or work</p></li>
            <li class="my-2"><p>We make sure that the services provided to clients is not copied or taken from any other service providers.</p></li>
            <li class="my-2"><p>We take the charge that if any deadline is missed because of any technical issue and also request the client to corporate with us.</p></li>
            <li class="my-2"><p>The content provided in this website is copyright and no one have right to copy or use it for their product or services.</p></li>
            
        </ul>

      
    </div>
   </div> 
</section>

@endsection