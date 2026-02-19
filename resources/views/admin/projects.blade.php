<x-admin.layout>

    <form id="projectsUpdateForm" method="POST" action="{{ route('admin.projects.update') }}"
        enctype="multipart/form-data">
        @csrf

        <!-- HERO SECTION -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-heading"></i> Hero Section</h2>
            </div>
            <div class="form-grid">
                <div class="form-group">
                    <label class="form-label">Title Line 1</label>
                    <input type="text" name="hero_title_line1" class="form-input"
                        value="{{ old('hero_title_line1', $projects->hero_title_line1) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Title Line 2</label>
                    <input type="text" name="hero_title_line2" class="form-input"
                        value="{{ old('hero_title_line2', $projects->hero_title_line2) }}">
                </div>
            </div>
        </div>

        <!-- PROJECT 1 -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-building"></i> Project 1</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="project_1_title" class="form-input"
                        value="{{ old('project_1_title', $projects->project_1_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="project_1_description" class="form-textarea"
                        rows="3">{{ old('project_1_description', $projects->project_1_description) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <input type="text" name="project_1_location" class="form-input"
                        value="{{ old('project_1_location', $projects->project_1_location) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Project Type</label>
                    <input type="text" name="project_1_type" class="form-input"
                        value="{{ old('project_1_type', $projects->project_1_type) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Scope of Work</label>
                    <input type="text" name="project_1_scope" class="form-input"
                        value="{{ old('project_1_scope', $projects->project_1_scope) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>
                    @if($projects->project_1_image)
                        <img src="{{ asset('frontend/images/' . $projects->project_1_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">{{ $projects->project_1_image }}</p>
                    @endif
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="project_1_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current image</small>
                </div>
            </div>
        </div>

        <!-- PROJECT 2 -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-building"></i> Project 2</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="project_2_title" class="form-input"
                        value="{{ old('project_2_title', $projects->project_2_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="project_2_description" class="form-textarea"
                        rows="3">{{ old('project_2_description', $projects->project_2_description) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <input type="text" name="project_2_location" class="form-input"
                        value="{{ old('project_2_location', $projects->project_2_location) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Project Type</label>
                    <input type="text" name="project_2_type" class="form-input"
                        value="{{ old('project_2_type', $projects->project_2_type) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Scope of Work</label>
                    <input type="text" name="project_2_scope" class="form-input"
                        value="{{ old('project_2_scope', $projects->project_2_scope) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>
                    @if($projects->project_2_image)
                        <img src="{{ asset('frontend/images/' . $projects->project_2_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">{{ $projects->project_2_image }}</p>
                    @endif
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="project_2_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current image</small>
                </div>
            </div>
        </div>

        <!-- PROJECT 3 -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-building"></i> Project 3</h2>
            </div>
            <div class="form-grid">
                <div class="form-group full-width">
                    <label class="form-label">Project Title</label>
                    <input type="text" name="project_3_title" class="form-input"
                        value="{{ old('project_3_title', $projects->project_3_title) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Description</label>
                    <textarea name="project_3_description" class="form-textarea"
                        rows="3">{{ old('project_3_description', $projects->project_3_description) }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <input type="text" name="project_3_location" class="form-input"
                        value="{{ old('project_3_location', $projects->project_3_location) }}">
                </div>
                <div class="form-group">
                    <label class="form-label">Project Type</label>
                    <input type="text" name="project_3_type" class="form-input"
                        value="{{ old('project_3_type', $projects->project_3_type) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Scope of Work</label>
                    <input type="text" name="project_3_scope" class="form-input"
                        value="{{ old('project_3_scope', $projects->project_3_scope) }}">
                </div>
                <div class="form-group full-width">
                    <label class="form-label">Current Image</label>
                    @if($projects->project_3_image)
                        <img src="{{ asset('frontend/images/' . $projects->project_3_image) }}"
                            style="max-width: 200px; display: block; margin-bottom: 10px; border-radius: 8px;">
                        <p style="color: #666; font-size: 13px; margin-bottom: 15px;">{{ $projects->project_3_image }}</p>
                    @endif
                    <label class="form-label">Upload New Image</label>
                    <input type="file" name="project_3_image" class="form-input" accept="image/*">
                    <small>Leave empty to keep current image</small>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateProjectsBtn" class="btn-save">
                <i class="fas fa-save"></i> Save Projects Changes
            </button>
        </div>
    </form>

</x-admin.layout>