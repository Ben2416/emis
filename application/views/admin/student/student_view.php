<header class="white pt-3 relative shadow">
            <div class="container-fluid">
              <div class="row" style="padding-top:10px">
                <div class="col-md-4 col-xs-6" >
                    <div class="card r-3" >

                          <div class="" style=" color: midnightblue; font-weight: 700; ">
                                <div class="image mr-3  float-left">
                                    <img  src="<?=base_url()?>assets/passports/<?=$profile['passport']?>" alt="User Image" width="125px" height="125px">
                                </div>
                                <div>
                                    <h6 class="p-t-10"><?=$profile['firstname']?> <?=$profile['lastname']?></h6>
                                    Applicant ID: BYSHESLB/APP/<?=$profile['user_id']?>
                                </div>
                            </div>

                    </div>
                </div>
                 <div >
                     <div class="card r-3" style="/* background: #444080; *//* color: white; */float: right;border: 4px dotted #c1b6b6; midnightblue; font-weight: 700;">
                         <div class="p-4">

                             <div class="counter-title">Applicant Status<br/>{Applicant_status}</div>

                         </div>
                     </div>
                 </div>
              </div>
                <div class="row p-t-b-10 ">
                    <div class="col">
                      <!--  <div class="pb-3">
                            <div class="image mr-3  float-left">
                                <img class="user_avatar no-b no-p" src="<?=base_url()?>assets/passports/<?=$profile['passport']?>" alt="User Image">
                            </div>
                            <div>
                                <h6 class="p-t-10"><?=$profile['firstname']?> <?=$profile['lastname']?></h6>
                                Applicant ID: BYSHESLB/APP/<?=$profile['user_id']?>
                            </div>
                        </div> -->
                    </div>
                </div>

              <div class="row">
                  <ul class="nav nav-material responsive-tab" id="v-pills-tab" role="tablist">
                      <li>
                          <a class="nav-link active" id="v-pills-tab1-tab" data-toggle="pill" href="#v-pills-tab1" role="tab" aria-controls="v-pills-tab1">
                              <i class="icon icon-home2"></i>Home
                          </a>
                      </li>

                  </ul>
              </div>

            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="card ">

                               <ul class="list-group list-group-flush">
                                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12"><?=$profile['phone']?></strong> <span class="float-right s-12"></span></li>
                                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12"><?=$profile['email']?></strong> <span class="float-right s-12"></span></li>
                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12"><?=$profile['address']?></strong> <span class="float-right s-12"></span></li>
                                   <li class="list-group-item"><strong class="s-12">Attachments</strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#">Birth Certificate</a></strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#">Local Government Identification</a></strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#"> Reference Form</a></strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#"> National Identity</a></strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#"> Addmission Letter</a></strong></li>
                                   <li class="list-group-item"><strong class="s-12"><a href="#"> Current Result</a></strong></li>

                               </ul>
                           </div>


                       </div>
                       <div class="col-md-9">

                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>Personal <small>Details</small></h6>
                                       </div>
                                       <div class="col-12 col-xl-12">
                                           <div class="card no-b">
                                               <div class="card-header white pb-0">
                                                   <div class="d-flex justify-content-between">
                                                       <div class="align-self-center">
                                                           <ul class="nav nav-pills mb-3" role="tablist">
                                                               <li class="nav-item">
                                                                   <a class="nav-link active show r-20" id="w3--tab1" data-toggle="tab" href="#w3-tab1" role="tab" aria-controls="tab1" aria-expanded="true" aria-selected="true">Personal details</a>
                                                               </li>
                                                               <li class="nav-item">
                                                                   <a class="nav-link r-20" id="w3--tab2" data-toggle="tab" href="#w3-tab2" role="tab" aria-controls="tab2" aria-selected="false">University details</a>
                                                               </li>
                                                               <li class="nav-item">
                                                                   <a class="nav-link r-20" id="w3--tab3" data-toggle="tab" href="#w3-tab3" role="tab" aria-controls="tab3" aria-selected="false">Guarantor Details</a>
                                                               </li>
                                                           </ul>
                                                       </div>
                                                       <div class="align-self-center">
                                                           <h5><a href="<?=base_url()?>admin/Students/acceptApplication/<?=$profile['user_id']?>" class="btn btn-xs btn-success">Accept Application</a>
                                                           <a href="<?=base_url()?>admin/Students/rejectApplication/<?=$profile['user_id']?>" class="btn btn-xs btn-danger">Reject Application</a></h5>
                                                       </div>

                                                   </div>
                                               </div>
                                               <div class="card-body no-p">
                                                   <div class="tab-content">
                                                       <div class="tab-pane fade show active" id="w3-tab1" role="tabpanel" aria-labelledby="w3-tab1">

                                                         <div class="card-body">
                                                           <div class="row">
                                                               <div class="col-md-4 col-xs-6 b-r"> <strong>Full Name</strong>
                                                                   <br>
                                                                   <p class="text-muted"><?=$profile['firstname']?> <?=$profile['lastname']?></p>
                                                               </div>
                                                               <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                                                   <br>
                                                                   <p class="text-muted"><?=$profile['phone']?></p>
                                                               </div>
                                                               <div class="col-md-4 col-xs-6"> <strong>Email</strong>
                                                                   <br>
                                                                   <p class="text-muted"><?=$profile['email']?></p>
                                                               </div>
                                                          </div>
                                                      <hr>
                                          <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Date of Birth</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['dob']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Residential Address</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['address']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>State of Residence</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['state_of_residence']?></p>
                                           </div>

                                       </div>
                   <hr>
                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>State Of Origin</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['state_of_origin']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Senatorial District</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['senatorial_district']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Local Government Area</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['lga']?></p>
                                           </div>

                                       </div>

                   <hr>
                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Town / City</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['town_of_origin']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Village</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['village_of_origin']?></p>
                                           </div>

                                       </div>
                   <hr>
                   <h4 class="card-title" style="color:firebrick;">Parent's Details</h4>
                   <h6 class="card-subtitle" style="padding-bottom: 25px; color: firebrick;">Information Provided</h6>
                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Father Name</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['father_name']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Father Mobile Number</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['father_phone']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>State of Origin</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['father_state_of_origin']?></p>
                                           </div>

                                       </div>
                   <hr>
                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Mother's Name</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['mother_name']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['mother_phone']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>State of Origin</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['mother_state_of_origin']?></p>
                                           </div>

                                       </div>
                   <hr>
                   <h4 class="card-title" style="color: firebrick;">Bank Details</h4>
                   <h6 class="card-subtitle" style="padding-bottom: 25px; color: firebrick;">Information Provided</h6>

                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Bank Name</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['bank_name']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Account Number</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['account_number']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Bank Verification Number</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['bvn']?></p>
                                           </div>

                                       </div>

                                   </div>

                                                      </div>
                                                       <div class="tab-pane fade" id="w3-tab2" role="tabpanel" aria-labelledby="w3-tab2">
                                                         <div class="card-body">
                                       <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>University Name</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['university_name']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>State</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['university_state']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Other University</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['other_university']?></p>
                                           </div>

                                       </div>


                                       <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Course of Study</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['course_of_study']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Anticapted Degree</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['anticipated_degree']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>University Level</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['university_level']?></p>
                                           </p></div>

                                       </div>

                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Semester </strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['semester_level']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Student ID</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['mode_identity']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Matric Number</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['matric_number']?></p>
                                           </div>

                                       </div>

                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Current Result </strong>
                                               <br>
                                               <p class="text-muted"><a href="#">Download Semester Result</a></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Programme State Date</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['program_start_date']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6"> <strong>Programme End Date</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['program_end_date']?></p>
                                           </div>

                                       </div>

                   <div class="row">
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>University Contact Person</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['uni_contact_person']?></p>
                                           </div>
                                           <div class="col-md-4 col-xs-6 b-r"> <strong>Contact Phone Number</strong>
                                               <br>
                                               <p class="text-muted"><?=$profile['uni_contact_person_phone']?></p>
                                           </div>

                                       </div>
                                   </div>
                                                       </div>
                                                       <div class="tab-pane fade text-center p-5" id="w3-tab3" role="tabpanel" aria-labelledby="w3-tab3">
                                                         <div class="row">
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>Guarantor Name</strong>
                                                                 <br>
                                                                 <p class="text-muted">{title|First Name|last name}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>Phone Number</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Phone Number}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6"> <strong>Alternative Phone</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Alternative Phone}</p>
                                                             </p></div>

                                                         </div>

                                                         <div class="row">
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>Contact Address</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Contact Address}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>State</strong>
                                                                 <br>
                                                                 <p class="text-muted">{state}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6"> <strong>Occupation</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Occupation}</p>
                                                             </p></div>

                                                         </div>

                                                         <div class="row">
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>Employer</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Employer}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6 b-r"> <strong>Position Held</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Position Held}</p>
                                                             </div>
                                                             <div class="col-md-4 col-xs-6"> <strong>Relationship with Applicant</strong>
                                                                 <br>
                                                                 <p class="text-muted">{Relationship}</p>
                                                             </p></div>

                                                         </div>


                                                       </div>
                                                   </div>

                                               </div>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                               <!-- /bar charts group -->


                           </div>

                       </div>
                   </div>
               </div>

           </div>
           </div>
        </div>
