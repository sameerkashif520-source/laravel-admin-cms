<x-admin.layout>

    <form id="serviceDetailsForm" method="POST" action="{{ route('admin.service.details.update') }}"
        enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-heading"></i> Hero Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" class="form-input"
                        value="{{ old('hero_title', $details->hero_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Current Hero Image</label>
                    @if($details->hero_image)
                        <img src="{{ asset('frontend/images/' . $details->hero_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">{{ $details->hero_image }}</p>
                    @endif
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="hero_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current image</small>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-align-left"></i> Main Content</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Main Heading</label>
                    <input type="text" name="main_heading" class="form-input"
                        value="{{ old('main_heading', $details->main_heading) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Main Description</label>
                    <textarea name="main_description" class="form-textarea"
                        rows="4">{{ old('main_description', $details->main_description) }}</textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Subheading</label>
                    <input type="text" name="subheading_1" class="form-input"
                        value="{{ old('subheading_1', $details->subheading_1) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Subheading Description</label>
                    <textarea name="subheading_1_desc" class="form-textarea"
                        rows="3">{{ old('subheading_1_desc', $details->subheading_1_desc) }}</textarea>
                </div>
            </div>
        </div>

        <!-- 6 FEATURES -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-list-ul"></i> 6 Service Features</h2>
            </div>
            @for($i = 1; $i <= 6; $i++)
                <div class="form-grid" style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">Feature {{ $i }}</div>
                    <div class="form-group full-width">
                        <label class="form-label">Title</label>
                        <input type="text" name="feature_{{ $i }}_title" class="form-input"
                            value="{{ old('feature_' . $i . '_title', $details->{'feature_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="feature_{{ $i }}_desc" class="form-textarea"
                            rows="3">{{ old('feature_' . $i . '_desc', $details->{'feature_' . $i . '_desc'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- WHY CHOOSE -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-star"></i> Why Choose Us</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Section Heading</label>
                    <input type="text" name="why_choose_heading" class="form-input"
                        value="{{ old('why_choose_heading', $details->why_choose_heading) }}">
                </div>
                @for($i = 1; $i <= 5; $i++)
                    <div class="form-group full-width">
                        <label class="form-label">Point {{ $i }}</label>
                        <input type="text" name="why_choose_point_{{ $i }}" class="form-input"
                            value="{{ old('why_choose_point_' . $i, $details->{'why_choose_point_' . $i}) }}">
                    </div>
                @endfor
            </div>
        </div>

        <!-- INDUSTRIES -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-industry"></i> Industries We Serve</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Section Heading</label>
                    <input type="text" name="industries_heading" class="form-input"
                        value="{{ old('industries_heading', $details->industries_heading) }}">
                </div>
                @for($i = 1; $i <= 4; $i++)
                    <div class="form-group full-width">
                        <label class="form-label">Industry {{ $i }}</label>
                        <input type="text" name="industry_{{ $i }}" class="form-input"
                            value="{{ old('industry_' . $i, $details->{'industry_' . $i}) }}">
                    </div>
                @endfor
            </div>
        </div>

        <!-- TRUSTED SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-handshake"></i> Trusted Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Heading</label>
                    <input type="text" name="trusted_heading" class="form-input"
                        value="{{ old('trusted_heading', $details->trusted_heading) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="trusted_description" class="form-textarea"
                        rows="4">{{ old('trusted_description', $details->trusted_description) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateServiceDetailsBtn" class="btn-save">
                <i class="fas fa-save"></i> Save Service Details
            </button>
        </div>
    </form>

</x-admin.layout>