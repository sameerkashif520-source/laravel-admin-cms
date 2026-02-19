<x-admin.layout>
    <form id="contactUpdateForm" method="POST" action="{{ route('admin.contact.update') }}" enctype="multipart/form-data">
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
                <!-- Label -->
                <div class="form-group">
                    <label class="form-label">Section Label</label>
                    <input type="text" name="label" class="form-input @error('label') is-invalid @enderror"
                        value="{{ old('label', $contact->label) }}" placeholder="e.g., LET'S WORK TOGETHER">
                    @error('label')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!-- Heading -->
                <div class="form-group">
                    <label class="form-label">Main Heading</label>
                    <input type="text" name="heading" class="form-input @error('heading') is-invalid @enderror"
                        value="{{ old('heading', $contact->heading) }}" placeholder="e.g., Start Your Project">
                    @error('heading')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-textarea @error('description') is-invalid @enderror"
                        rows="3"
                        placeholder="Enter description">{{ old('description', $contact->description) }}</textarea>
                    @error('description')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- SUPPORT IMAGE SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-image"></i>
                    Support Image
                </h2>
            </div>

            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>

                    @if($contact->support_image)
                        <div
                            style="margin-bottom: 15px; padding: 10px; background: #f8f9fa; border-radius: 8px; display: inline-block;">
                            <img src="{{ asset('frontend/images/' . $contact->support_image) }}" alt="Support Image"
                                style="max-width: 200px; border-radius: 8px; display: block;">
                            <small style="color: #6c757d; display: block; margin-top: 8px; text-align: center;">
                                {{ $contact->support_image }}
                            </small>
                        </div>
                    @else
                        <p style="color: #6c757d; margin-bottom: 15px;">No image uploaded</p>
                    @endif

                    <label class="form-label" style="margin-top: 15px;">Upload New Image</label>
                    <input type="file" name="support_image"
                        class="form-input @error('support_image') is-invalid @enderror"
                        accept="image/jpeg,image/png,image/jpg,image/gif" style="padding: 10px;">

                    <small style="color: #6c757d; display: block; margin-top: 5px;">
                        Accepted: JPG, PNG, GIF. Max size: 5MB. Recommended: 400x300px.
                        Leave empty to keep current image.
                    </small>

                    @error('support_image')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- INFO CARDS SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Info Cards
                </h2>
            </div>

            <div class="form-grid">
                <!-- Info Card 1 -->
                <div class="sub-section-title">Info Card 1</div>

                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="info_title_1"
                        class="form-input @error('info_title_1') is-invalid @enderror"
                        value="{{ old('info_title_1', $contact->info_title_1) }}" placeholder="e.g., Free">
                    @error('info_title_1')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <input type="text" name="info_text_1" class="form-input @error('info_text_1') is-invalid @enderror"
                        value="{{ old('info_text_1', $contact->info_text_1) }}"
                        placeholder="e.g., No obligation quotes">
                    @error('info_text_1')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <!-- Info Card 2 -->
                <div class="sub-section-title" style="margin-top: 20px;">Info Card 2</div>

                <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="info_title_2"
                        class="form-input @error('info_title_2') is-invalid @enderror"
                        value="{{ old('info_title_2', $contact->info_title_2) }}" placeholder="e.g., 24/7">
                    @error('info_title_2')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Description</label>
                    <input type="text" name="info_text_2" class="form-input @error('info_text_2') is-invalid @enderror"
                        value="{{ old('info_text_2', $contact->info_text_2) }}" placeholder="e.g., Submit anytime">
                    @error('info_text_2')
                        <span class="error-message"
                            style="color: #dc3545; font-size: 14px; margin-top: 5px; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateContactBtn" class="btn-save">
                <i class="fas fa-save"></i>
                Save Contact Changes
            </button>
        </div>
    </form>
</x-admin.layout>