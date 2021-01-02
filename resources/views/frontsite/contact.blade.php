@extends('frontsite.layouts.master')
@section('page-title')
    Contact Page
@endsection
@section('content')

      <section class="innerpage_banner">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                     <div class="page_title">
                        <div class="full heading_s1">
                           <h2><span>Contact</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page -->
      <!-- section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-6">
                            <div class="gold_con">
                               <img src="images/gold_c.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form_cont">
                               <form action="index.html">
                                  <fieldset>
                                     <div class="field">
                                        <input type="text" name="name" placeholder="Name" />
                                     </div>
                                     <div class="field">
                                        <input type="email" name="email" placeholder="Email" />
                                     </div>
                                     <div class="field">
                                        <input type="text" name="phone" placeholder="Phone" />
                                     </div>
                                     <div class="field">
                                        <textarea placeholder="Message" ></textarea>
                                     </div>
                                     <div class="field center">
                                       <button>Send</button>
                                  </fieldset>
                               </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
@endsection
