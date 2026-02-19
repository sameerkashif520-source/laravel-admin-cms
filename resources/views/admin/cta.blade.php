{{-- <x-admin.layout pageTitle="CTA Component" pageSubtitle="Manage call-to-action section content">

    <form method="POST" action="{{ route('admin.cta.update') }}">
        @csrf

        <!-- HEADLINE SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-heading"></i>
                    Headline Section
                </h2>
            </div>

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Main Heading</label>
                    <input type="text" name="heading" class="form-input"
                        value="{{ $cta->heading }}" placeholder="Enter main heading">
                </div>

                <div class="form-group full-width">
                    <label class="form-label">Subheading / Description</label>
                    <textarea name="description" class="form-textarea" rows="3"
                        placeholder="Enter description">{{ $cta->description }}</textarea>
                </div>
            </div>
        </div>

        <!-- BUTTONS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-mouse-pointer"></i>
                    Buttons
                </h2>
            </div>

            <div class="form-grid">
                <div class="sub-section-title">Primary Button</div>

                <div class="form-group">
                    <label class="form-label">Primary Button Text</label>
                    <input type="text" name="primary_button_text" class="form-input" value="{{ $cta->primary_button_text }}"
                        placeholder="e.g., Start Your Project">
                </div>

                <div class="sub-section-title">Secondary Button (Phone)</div>

                <div class="form-group">
                    <label class="form-label">Secondary Button Text</label>
                    <input type="text" name="secondary_button_text" class="form-input" value="{{ $cta->secondary_button_text }}"
                        placeholder="e.g., Call Us: (555) 123-4567">
                </div>

            </div>
        </div>

        <!-- FOOTER INFO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Footer Contact Info
                </h2>
            </div>

            <div class="form-grid">
                <div class="sub-section-title">Email Info</div>

                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="text" name="email" class="form-input" value="{{ $cta->email }}"
                        placeholder="e.g., info@engineeringsolutions.com">
                </div>

                <div class="sub-section-title">Availability Info</div>

                <div class="form-group full-width">
                    <label class="form-label">Availability Text</label>
                    <input type="text" name="availability" class="form-input" value="{{ $cta->availability }}"
                        placeholder="e.g., Available Mon-Fri, 8AM-6PM">
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="submit" class="btn-save">
                <i class="fas fa-save"></i>
                Save CTA Changes
            </button>
        </div>

    </form>

</x-admin.layout> --}}






<x-admin.layout>

    <form id="ctaUpdateForm" method="POST" action="{{ route('admin.cta.update') }}">
        @csrf

        <!-- HEADLINE SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-heading"></i>
                    Headline Section
                </h2>
            </div>

            <div class="form-grid">
                <!-- Heading -->
                <div class="form-group full-width">
                    <label class="form-label">Main Heading</label>
                    <input type="text" name="heading" class="form-input @error('heading') is-invalid @enderror"
                        value="{{ old('heading', $cta->heading) }}" placeholder="Enter main heading">
                    
                    @error('heading')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">Subheading / Description</label>
                    <textarea name="description" class="form-textarea @error('description') is-invalid @enderror" rows="3"
                        placeholder="Enter description">{{ old('description', $cta->description) }}</textarea>
                    
                    @error('description')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- BUTTONS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-mouse-pointer"></i>
                    Buttons
                </h2>
            </div>

            <div class="form-grid">
                <div class="sub-section-title">Primary Button</div>

                <!-- Primary Button Text -->
                <div class="form-group">
                    <label class="form-label">Primary Button Text</label>
                    <input type="text" name="primary_button_text" class="form-input @error('primary_button_text') is-invalid @enderror" 
                        value="{{ old('primary_button_text', $cta->primary_button_text) }}" placeholder="e.g., Start Your Project">
                    
                    @error('primary_button_text')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="sub-section-title">Secondary Button (Phone)</div>

                <!-- Secondary Button Text -->
                <div class="form-group">
                    <label class="form-label">Secondary Button Text</label>
                    <input type="text" name="secondary_button_text" class="form-input @error('secondary_button_text') is-invalid @enderror" 
                        value="{{ old('secondary_button_text', $cta->secondary_button_text) }}" placeholder="e.g., Call Us: (555) 123-4567">
                    
                    @error('secondary_button_text')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- FOOTER INFO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Footer Contact Info
                </h2>
            </div>

            <div class="form-grid">
                <div class="sub-section-title">Email Info</div>

                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="text" name="email" class="form-input @error('email') is-invalid @enderror" 
                        value="{{ old('email', $cta->email) }}" placeholder="e.g., info@engineeringsolutions.com">
                    
                    @error('email')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="sub-section-title">Availability Info</div>

                <!-- Availability -->
                <div class="form-group full-width">
                    <label class="form-label">Availability Text</label>
                    <input type="text" name="availability" class="form-input @error('availability') is-invalid @enderror" 
                        value="{{ old('availability', $cta->availability) }}" placeholder="e.g., Available Mon-Fri, 8AM-6PM">
                    
                    @error('availability')
                        <span class="error-message" style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button id="updateCTABtn" type="button" class="btn-save">
                <i class="fas fa-save"></i>
                Save CTA Changes
            </button>
        </div>

    </form>

</x-admin.layout>