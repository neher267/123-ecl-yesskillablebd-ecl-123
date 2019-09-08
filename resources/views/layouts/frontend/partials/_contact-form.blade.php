<div id="contact-form1" class="latest-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Schedule Your FREE Consultaion</h3>
                        <p>Submit the contact form below to discuss how {{config('app.name')}} can help you/your children to get admitted in Abroad.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                @include('common.errors')
                <form action="{{ url('inquries') }}" method="post">
                    @csrf

                    <div class="form-row">                        
                        <div class="form-group col-md-6">
                            <label for="name">Full Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div> 

                    <div class="form-row">     
                        <div class="form-group col-md-6">
                            <label for="inputState">Mobile Number</label>

                            <input name="mobile" type="text" class="form-control" id="college" placeholder="Your Mobile Number" required>
                        </div>                   
                        
                        <div class="form-group col-md-6">
                            <label for="college">Whatsapp</label>
                            <input name="whatsapp" type="text" class="form-control" id="college" placeholder="Whatsapp Number">
                        </div>
                    </div>

                    <div class="form-row">     
                                          
                        
                        <div class="form-group col-md-12">
                            <label for="college">Institute name that you like to admit</label>
                            <input name="message" type="text" class="form-control" id="college" placeholder="Institute name">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div style="width: 215px; margin: auto;">
                                <button 
                                type="submit" 
                                class="btn btn-primary" 
                                style="margin-top: 35px; background: #2d5930; padding: 12px 30px;">
                                    Apply for FREE Consultaion
                                </button>
                            </div>
                        </div>                        
                    </div>                    
                </form>
            </div>
                
        </div>
    </div>
</div>
