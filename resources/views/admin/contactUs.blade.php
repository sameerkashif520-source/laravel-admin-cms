<x-admin.layout>

    <form id="contactUsUpdateForm" method="POST" action="{{ route('admin.contact.us.update') }}"
        enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-address-book"></i> Hero Section</h2>
            </div>

            <div class="form-grid">
                <!-- Hero Title -->
                <div class="form-group full-width">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" class="form-input @error('hero_title') is-invalid @enderror"
                        value="{{ old('hero_title', $contactUs->hero_title) }}">
                    @error('hero_title')<span class="error">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <!-- CONTACT SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-envelope"></i> Contact Section</h2>
            </div>

            <div class="form-grid">
                <!-- Section Label -->
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="label" class="form-input @error('label') is-invalid @enderror"
                        value="{{ old('label', $contactUs->label) }}">
                    @error('label')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Heading -->
                <div class="form-group">
                    <label class="form-label">Heading</label>
                    <input type="text" name="heading" class="form-input @error('heading') is-invalid @enderror"
                        value="{{ old('heading', $contactUs->heading) }}">
                    @error('heading')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-textarea @error('description') is-invalid @enderror"
                        rows="3">{{ old('description', $contactUs->description) }}</textarea>
                    @error('description')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Support Image -->
                <div class="form-group full-width">
                    <label class="form-label">Support Image</label>
                    @if($contactUs->support_image)
                        <img src="{{ asset('frontend/images/' . $contactUs->support_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px;">
                    @endif
                    <input type="file" name="support_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current image</small>
                    @error('support_image')<span class="error">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <!-- INFO CARDS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-info-circle"></i> Info Cards</h2>
            </div>

            <div class="form-grid">
                <!-- Card 1 -->
                <div class="sub-section-title">Info Card 1</div>
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="info_title_1"
                        class="form-input @error('info_title_1') is-invalid @enderror"
                        value="{{ old('info_title_1', $contactUs->info_title_1) }}">
                    @error('info_title_1')<span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <input type="text" name="info_text_1" class="form-input @error('info_text_1') is-invalid @enderror"
                        value="{{ old('info_text_1', $contactUs->info_text_1) }}">
                    @error('info_text_1')<span class="error">{{ $message }}</span>@enderror
                </div>

                <!-- Card 2 -->
                <div class="sub-section-title">Info Card 2</div>
                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="info_title_2"
                        class="form-input @error('info_title_2') is-invalid @enderror"
                        value="{{ old('info_title_2', $contactUs->info_title_2) }}">
                    @error('info_title_2')<span class="error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <input type="text" name="info_text_2" class="form-input @error('info_text_2') is-invalid @enderror"
                        value="{{ old('info_text_2', $contactUs->info_text_2) }}">
                    @error('info_text_2')<span class="error">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="submit" id="updateContactUsBtn" class="btn-save">
                <i class="fas fa-save"></i> Save Contact Page Changes
            </button>
        </div>
    </form>

</x-admin.layout>