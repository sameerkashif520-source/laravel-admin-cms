<x-admin.layout pageTitle="About Page" pageSubtitle="Manage about page content">

    <form id="aboutUpdateForm" method="POST" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-heading"></i> Hero Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" class="form-input @error('hero_title') is-invalid @enderror"
                        value="{{ old('hero_title', $about->hero_title) }}">
                    @error('hero_title')<span class="error">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <!-- OUR STORY SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-book"></i> Our Story Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="story_label" class="form-input"
                        value="{{ old('story_label', $about->story_label) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="story_title" class="form-input"
                        value="{{ old('story_title', $about->story_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description Paragraph 1</label>
                    <textarea name="story_description_1" class="form-textarea"
                        rows="3">{{ old('story_description_1', $about->story_description_1) }}</textarea>
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description Paragraph 2</label>
                    <textarea name="story_description_2" class="form-textarea"
                        rows="3">{{ old('story_description_2', $about->story_description_2) }}</textarea>
                </div>

                <!-- STORY IMAGE -->
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>

                    @if($about->story_image)
                        <img src="{{ asset('frontend/images/' . $about->story_image) }}" alt="Story Image"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">
                            {{ $about->story_image }}
                        </p>
                    @else
                        <p style="color: #999; margin-bottom: 15px;">No image uploaded</p>
                    @endif

                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="story_image" class="form-input" accept="image/*">

                    <small style="color: #6c757d; display: block; margin-top: 5px;">
                        Leave empty to keep current image
                    </small>
                </div>
            </div>

            <!-- Features -->
            <div class="section-divider" style="margin-top: 30px;">
                <h3 class="section-title" style="font-size: 1.1rem;"><i class="fas fa-list-check"></i> Story Features
                </h3>
            </div>
            @for($i = 1; $i <= 3; $i++)
                <div class="form-grid" style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">Feature {{ $i }}</div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="feature_{{ $i }}_title" class="form-input"
                            value="{{ old('feature_' . $i . '_title', $about->{'feature_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="feature_{{ $i }}_description" class="form-textarea"
                            rows="2">{{ old('feature_' . $i . '_description', $about->{'feature_' . $i . '_description'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- MISSION SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-eye"></i> Mission Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="mission_label" class="form-input"
                        value="{{ old('mission_label', $about->mission_label) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="mission_title" class="form-input"
                        value="{{ old('mission_title', $about->mission_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="mission_description" class="form-textarea"
                        rows="3">{{ old('mission_description', $about->mission_description) }}</textarea>
                </div>
                <!-- MISSION IMAGE -->
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>

                    @if($about->mission_image)
                        <img src="{{ asset('frontend/images/' . $about->mission_image) }}" alt="Mission Image"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">
                            {{ $about->mission_image }}
                        </p>
                    @else
                        <p style="color: #999; margin-bottom: 15px;">No image uploaded</p>
                    @endif

                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="mission_image" class="form-input" accept="image/*">

                    <small style="color: #6c757d; display: block; margin-top: 5px;">
                        Leave empty to keep current image
                    </small>
                </div>
            </div>

            <!-- Values -->
            <div class="section-divider" style="margin-top: 30px;">
                <h3 class="section-title" style="font-size: 1.1rem;"><i class="fas fa-gem"></i> Core Values</h3>
            </div>
            @for($i = 1; $i <= 4; $i++)
                <div class="form-grid" style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">Value {{ $i }}</div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="value_{{ $i }}_title" class="form-input"
                            value="{{ old('value_' . $i . '_title', $about->{'value_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="value_{{ $i }}_description" class="form-textarea"
                            rows="2">{{ old('value_' . $i . '_description', $about->{'value_' . $i . '_description'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- DIFFERENCE SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-star"></i> What Sets Us Apart</h2>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="difference_label" class="form-input"
                        value="{{ old('difference_label', $about->difference_label) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="difference_title" class="form-input"
                        value="{{ old('difference_title', $about->difference_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="difference_description" class="form-textarea"
                        rows="3">{{ old('difference_description', $about->difference_description) }}</textarea>
                </div>
            </div>

            <!-- Difference Cards -->
            <div class="section-divider" style="margin-top: 30px;">
                <h3 class="section-title" style="font-size: 1.1rem;"><i class="fas fa-th-large"></i> Difference Cards
                </h3>
            </div>
            @for($i = 1; $i <= 6; $i++)
                <div class="form-grid" style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">Card {{ $i }}</div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="card_{{ $i }}_title" class="form-input"
                            value="{{ old('card_' . $i . '_title', $about->{'card_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="card_{{ $i }}_description" class="form-textarea"
                            rows="2">{{ old('card_' . $i . '_description', $about->{'card_' . $i . '_description'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateAboutBtn" class="btn-save">
                <i class="fas fa-save"></i> Save About Page Changes
            </button>
        </div>
    </form>

</x-admin.layout>