<x-admin.layout>

    <form id="faqUpdateForm" method="POST" action="{{ route('admin.faq.update') }}">
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
                        value="{{ old('hero_title', $faq->hero_title) }}">
                </div>
            </div>
        </div>

        <!-- FAQ ITEMS -->
        <div class="content-card">
            <div class="section-divider" style="margin-top: 0;">
                <h2 class="section-title"><i class="fas fa-question-circle"></i> FAQ Items</h2>
            </div>

            @for($i = 1; $i <= 10; $i++)
                <div class="form-grid" style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 1px solid #eee;">
                    <div class="sub-section-title">FAQ {{ $i }}</div>

                    <div class="form-group full-width">
                        <label class="form-label">Question</label>
                        <input type="text" name="faq_{{ $i }}_question" class="form-input"
                            value="{{ old('faq_' . $i . '_question', $faq->{'faq_' . $i . '_question'}) }}">
                    </div>

                    <div class="form-group full-width">
                        <label class="form-label">Answer</label>
                        <textarea name="faq_{{ $i }}_answer" class="form-textarea"
                            rows="3">{{ old('faq_' . $i . '_answer', $faq->{'faq_' . $i . '_answer'}) }}</textarea>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Save Button -->
        <div class="content-card" style="text-align: right; padding: 25px 30px;">
            <button type="button" id="updateFaqBtn" class="btn-save">
                <i class="fas fa-save"></i> Save FAQ Changes
            </button>
        </div>
    </form>

</x-admin.layout>