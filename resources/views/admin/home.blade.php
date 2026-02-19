<x-admin.layout pageTitle="Home Page" pageSubtitle="Manage homepage content">

    <form id="homeUpdateForm" method="POST" action="{{ route('admin.home.update') }}" enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-home"></i> Hero Section</h2>
            </div>

            <div class="form-grid">
                <!-- Hero BG Image -->
                <div class="form-group full-width">
                    <label class="form-label">Background Image</label>
                    @if($home->hero_bg_image)
                        <img src="{{ asset('frontend/images/' . $home->hero_bg_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px;">
                    @endif
                    <input type="file" name="hero_bg_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current. Recommended: 1920x1080px</small>
                    @error('hero_bg_image')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Hero Title -->
                <div class="form-group">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" class="form-input @error('hero_title') is-invalid @enderror"
                        value="{{ old('hero_title', $home->hero_title) }}">
                    @error('hero_title')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Hero Subtitle -->
                <div class="form-group">
                    <label class="form-label">Hero Subtitle</label>
                    <input type="text" name="hero_subtitle"
                        class="form-input @error('hero_subtitle') is-invalid @enderror"
                        value="{{ old('hero_subtitle', $home->hero_subtitle) }}">
                    @error('hero_subtitle')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Hero Description -->
                <div class="form-group full-width">
                    <label class="form-label">Hero Description</label>
                    <textarea name="hero_description" class="form-textarea"
                        rows="3">{{ old('hero_description', $home->hero_description) }}</textarea>
                    @error('hero_description')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Button Text -->
                <div class="form-group">
                    <label class="form-label">Button Text</label>
                    <input type="text" name="hero_button_text" class="form-input"
                        value="{{ old('hero_button_text', $home->hero_button_text) }}">
                </div>

                <!-- Engineer Image -->
                <div class="form-group">
                    <label class="form-label">Engineer Image</label>
                    @if($home->hero_engineer_image)
                        <img src="{{ asset('frontend/images/' . $home->hero_engineer_image) }}"
                            style="max-width: 150px; display: block; margin-bottom: 10px;">
                    @endif
                    <input type="file" name="hero_engineer_image" class="form-input" accept="image/*">
                </div>
            </div>
        </div>

        <!-- STATS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-chart-bar"></i> Stats Cards</h2>
            </div>

            <div class="form-grid">
                @for($i = 1; $i <= 3; $i++)
                    <div class="sub-section-title">Stat Card {{ $i }}</div>
                    <div class="form-group">
                        <label class="form-label">Number</label>
                        <input type="text" name="stat_{{ $i }}_number" class="form-input"
                            value="{{ old('stat_' . $i . '_number', $home->{'stat_' . $i . '_number'}) }}"
                            placeholder="e.g., 24Hrs">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Label</label>
                        <input type="text" name="stat_{{ $i }}_label" class="form-input"
                            value="{{ old('stat_' . $i . '_label', $home->{'stat_' . $i . '_label'}) }}"
                            placeholder="e.g., Quick Turnaround">
                    </div>
                @endfor
            </div>
        </div>

        <!-- SOLUTIONS HEADER -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-briefcase"></i> Solutions Header</h2>
            </div>

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="solutions_title" class="form-input"
                        value="{{ old('solutions_title', $home->solutions_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Section Subtitle</label>
                    <textarea name="solutions_subtitle" class="form-textarea"
                        rows="2">{{ old('solutions_subtitle', $home->solutions_subtitle) }}</textarea>
                </div>
            </div>
        </div>

        <!-- SOLUTIONS CARDS -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-th-large"></i> Solutions Cards</h2>
            </div>

            @for($i = 1; $i <= 6; $i++)
                <div class="form-grid" style="margin-bottom: 30px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">Card {{ $i }}</div>
                    <div class="form-group full-width">
                        <label class="form-label">Title</label>
                        <input type="text" name="card_{{ $i }}_title" class="form-input"
                            value="{{ old('card_' . $i . '_title', $home->{'card_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="card_{{ $i }}_description" class="form-textarea"
                            rows="3">{{ old('card_' . $i . '_description', $home->{'card_' . $i . '_description'}) }}</textarea>
                    </div>

                    <!-- Tools field for Cards 1-4 -->
                    @if($i <= 4)
                        <div class="form-group full-width">
                            <label class="form-label">Tools (comma-separated)</label>
                            <input type="text" name="card_{{ $i }}_tools" class="form-input"
                                value="{{ old('card_' . $i . '_tools', $home->{'card_' . $i . '_tools'}) }}"
                                placeholder="e.g., Tool1,Tool2,Tool3">
                            <small>Enter tool names separated by commas</small>
                        </div>
                    @endif
                </div>
            @endfor
        </div>

        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-book-open"></i> Learn More Section</h2>
            </div>

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="learn_more_title" class="form-input"
                        value="{{ old('learn_more_title', $home->learn_more_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Section Subtitle</label>
                    <textarea name="learn_more_subtitle" class="form-textarea"
                        rows="2">{{ old('learn_more_subtitle', $home->learn_more_subtitle) }}</textarea>
                </div>
            </div>

            <div class="form-grid" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
                <div class="sub-section-title">Tab Buttons</div>
                <div class="form-group">
                    <label class="form-label">Tab 1 Title (Process)</label>
                    <input type="text" name="tab_1_title" class="form-input"
                        value="{{ old('tab_1_title', $home->tab_1_title) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Tab 2 Title (Case Studies)</label>
                    <input type="text" name="tab_2_title" class="form-input"
                        value="{{ old('tab_2_title', $home->tab_2_title) }}">
                </div>
            </div>
        </div>

        <!-- PROCESS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-tasks"></i> Our Process</h2>
            </div>

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Section Title</label>
                    <input type="text" name="process_title" class="form-input"
                        value="{{ old('process_title', $home->process_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Section Subtitle</label>
                    <input type="text" name="process_subtitle" class="form-input"
                        value="{{ old('process_subtitle', $home->process_subtitle) }}">
                </div>
            </div>

            @for($i = 1; $i <= 4; $i++)
                <div class="form-grid" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
                    <div class="sub-section-title">Step {{ $i }}</div>
                    <div class="form-group">
                        <label class="form-label">Step Number</label>
                        <input type="text" name="step_{{ $i }}_number" class="form-input"
                            value="{{ old('step_' . $i . '_number', $home->{'step_' . $i . '_number'}) }}"
                            placeholder="e.g., 01">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="step_{{ $i }}_title" class="form-input"
                            value="{{ old('step_' . $i . '_title', $home->{'step_' . $i . '_title'}) }}">
                    </div>
                    <div class="form-group full-width">
                        <label class="form-label">Description</label>
                        <textarea name="step_{{ $i }}_description" class="form-textarea"
                            rows="2">{{ old('step_' . $i . '_description', $home->{'step_' . $i . '_description'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateHomeBtn" class="btn-save">
                <i class="fas fa-save"></i> Save Home Page Changes
            </button>
        </div>
    </form>


</x-admin.layout>