<x-admin.layout>

    <!-- SERVICES DETAILS LINK - Professional Card -->
    <div class="content-card"
        style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; margin-bottom: 30px;">
        <div
            style="padding: 25px 30px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
            <div>
                <h3 style="margin: 0 0 8px 0; font-size: 1.3rem;">
                    <i class="fas fa-external-link-alt" style="margin-right: 10px;"></i>
                    Services Details Page
                </h3>
                <p style="margin: 0; opacity: 0.9; font-size: 0.95rem;">
                    Manage detailed information for each service individually
                </p>
            </div>
            <a href="{{ route('admin.services.details') }}"
                style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.2); color: white; padding: 12px 25px; border-radius: 8px; text-decoration: none; font-weight: 500; transition: all 0.3s; border: 2px solid rgba(255,255,255,0.3);"
                onmouseover="this.style.background='rgba(255,255,255,0.3)'; this.style.borderColor='rgba(255,255,255,0.5)'"
                onmouseout="this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='rgba(255,255,255,0.3)'">
                <span>Go to Details</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <form id="servicesUpdateForm" method="POST" action="{{ route('admin.services.update') }}"
        enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-heading"></i> Hero Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" class="form-input"
                        value="{{ old('hero_title', $services->hero_title) }}">
                </div>
            </div>
        </div>

        <!-- SERVICES SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-cogs"></i> Services Section</h2>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="services_label" class="form-input"
                        value="{{ old('services_label', $services->services_label) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="services_title" class="form-input"
                        value="{{ old('services_title', $services->services_title) }}">
                </div>
            </div>

            <!-- 4 Services -->
            @php
                $serviceNames = ['Cost Estimation', 'Structural Design', 'Structural Analysis', 'BIM Drawing'];
            @endphp

            @for($i = 1; $i <= 4; $i++)
                <div class="section-divider" style="margin-top: 30px;">
                    <h3 class="section-title" style="font-size: 1.1rem;">
                        <i class="fas fa-wrench"></i> Service {{ $i }}: {{ $serviceNames[$i - 1] }}
                    </h3>
                </div>

                <div class="form-grid" style="margin-bottom: 20px;">
                    <div class="form-group">
                        <label class="form-label">Tab Name</label>
                        <input type="text" name="service_{{ $i }}_name" class="form-input"
                            value="{{ old('service_' . $i . '_name', $services->{'service_' . $i . '_name'}) }}">
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">Overlay Title</label>
                        <input type="text" name="service_{{ $i }}_title" class="form-input"
                            value="{{ old('service_' . $i . '_title', $services->{'service_' . $i . '_title'}) }}">
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">Overlay Description</label>
                        <textarea name="service_{{ $i }}_description" class="form-textarea"
                            rows="3">{{ old('service_' . $i . '_description', $services->{'service_' . $i . '_description'}) }}</textarea>
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">Current Image</label>

                        @if($services->{'service_' . $i . '_image'})
                            <img src="{{ asset('frontend/images/' . $services->{'service_' . $i . '_image'}) }}"
                                alt="Service {{ $i }}"
                                style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                            <p style="color: #666; font-size: 13px; margin-bottom: 15px;">
                                {{ $services->{'service_' . $i . '_image'} }}
                            </p>
                        @else
                            <p style="color: #999; margin-bottom: 15px;">No image uploaded</p>
                        @endif

                        <label class="form-label">Upload New Image</label>
                        <input type="file" name="service_{{ $i }}_image" class="form-input" accept="image/*">
                        <small style="color: #6c757d; display: block; margin-top: 5px;">
                            Leave empty to keep current image
                        </small>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateServicesBtn" class="btn-save">
                <i class="fas fa-save"></i> Save Services Changes
            </button>
        </div>
    </form>

</x-admin.layout>