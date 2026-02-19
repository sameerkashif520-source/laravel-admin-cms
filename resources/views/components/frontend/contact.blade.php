{{-- <section class="contact-section">
    <div class="contact-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-left">
                        <span class="services-label">LET'S WORK TOGETHER</span>
                        <h2>Start Your Project</h2>
                        <p>Share your project details and we'll connect you with the right engineering experts</p>

                        <div class="support-center">
                            <img src="{{ asset('frontend/images/card2.jpg') }}">
                        </div>

                        <div class="contact-info">
                            <div class="info-item">
                                <h4>Free</h4>
                                <p>No obligation quotes</p>
                            </div>
                            <div class="info-item">
                                <h4>24/7</h4>
                                <p>Submit anytime</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-right">
                        <form id="contactForm" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fullName" placeholder="*Full name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="*Email address"
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" placeholder="*Phone number"
                                        required>
                                </div>
                                <div class="form-group">
                                    <select class="form-select" id="subject" required>
                                        <option value="">Services Required</option>
                                        <option value="plumbing">Cost Estimate</option>
                                        <option value="replacement">Structural Designs</option>
                                        <option value="maintenance">Structural Analysis</option>
                                        <option value="emergency">BIM Drawing</option>
                                        <option value="emergency">Multiple Services</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <select class="form-select" id="subject" required>
                                        <option value="">Select Project Type</option>
                                        <option value="plumbing">Residential</option>
                                        <option value="replacement">Commercial</option>
                                        <option value="maintenance">Industrial</option>
                                        <option value="emergency">Infrastructure</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Write message..."></textarea>
                            </div>

                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label for="terms">Accept terms and conditions from Envero.</label>
                            </div>

                            <div class="button-wrapper">
                                <button type="submit" class="submit-btn">Request Consultation</button>
                                <div class="arrow-icon">→</div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}




<section class="contact-section">
    <div class="contact-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-left">
                        <span class="services-label">{{ $contact->label }}</span>
                        <h2>{{ $contact->heading }}</h2>
                        <p>{{ $contact->description }}</p>

                        <div class="support-center">
                            <img src="{{ asset('frontend/images/' . $contact->support_image) }}">
                        </div>

                        <div class="contact-info">
                            <div class="info-item">
                                <h4>{{ $contact->info_title_1 }}</h4>
                                <p>{{ $contact->info_text_1 }}</p>
                            </div>
                            <div class="info-item">
                                <h4>{{ $contact->info_title_2 }}</h4>
                                <p>{{ $contact->info_text_2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-right">
                        <form id="contactForm" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fullName" placeholder="*Full name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="*Email address"
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" placeholder="*Phone number"
                                        required>
                                </div>
                                <div class="form-group">
                                    <select class="form-select" id="subject" required>
                                        <option value="">Services Required</option>
                                        <option value="plumbing">Cost Estimate</option>
                                        <option value="replacement">Structural Designs</option>
                                        <option value="maintenance">Structural Analysis</option>
                                        <option value="emergency">BIM Drawing</option>
                                        <option value="emergency">Multiple Services</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div class="form-group">
                                    <select class="form-select" id="subject" required>
                                        <option value="">Select Project Type</option>
                                        <option value="plumbing">Residential</option>
                                        <option value="replacement">Commercial</option>
                                        <option value="maintenance">Industrial</option>
                                        <option value="emergency">Infrastructure</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Write message..."></textarea>
                            </div>

                            <div class="checkbox-wrapper">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label for="terms">Accept terms and conditions from Envero.</label>
                            </div>

                            <div class="button-wrapper">
                                <button type="submit" class="submit-btn">Request Consultation</button>
                                <div class="arrow-icon">→</div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>