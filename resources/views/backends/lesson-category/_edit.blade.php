@push('css')
@endpush
<div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{ __('Edit Lesson Category') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="{{ route('admin.lesson-category.update', $category->id) }}" class="submit-form" method="post">
            <div class="modal-body">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                            {{-- @dump($languages) --}}
                            @foreach (json_decode($language, true) as $lang)
                                @if ($lang['status'] == 1)
                                    <li class="nav-item">
                                        <a class="nav-link text-capitalize {{ $lang['code'] == $default_lang ? 'active' : '' }}"
                                            id="lang_{{ $lang['code'] }}-tab" data-toggle="pill"
                                            href="#lang_{{ $lang['code'] }}" role="tab"
                                            aria-controls="lang_{{ $lang['code'] }}"
                                            aria-selected="false">{{ \App\helpers\AppHelper::get_language_name($lang['code']) . '(' . strtoupper($lang['code']) . ')' }}</a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                        <div class="tab-content" id="custom-content-below-tabContent">
                            @foreach (json_decode($language, true) as $lang)
                                @if ($lang['status'] == 1)
                                    <?php
                                    if (count($category['translations'])) {
                                        $translate = [];
                                        foreach ($category['translations'] as $t) {
                                            if ($t->locale == $lang['code'] && $t->key == 'name') {
                                                $translate[$lang['code']]['name'] = $t->value;
                                            }
                                            if ($t->locale == $lang['code'] && $t->key == 'description') {
                                                $translate[$lang['code']]['description'] = $t->value;
                                            }
                                        }
                                    }
                                    ?>
                                    <div class="tab-pane fade {{ $lang['code'] == $default_lang ? 'show active' : '' }}"
                                        id="lang_{{ $lang['code'] }}" role="tabpanel"
                                        aria-labelledby="lang_{{ $lang['code'] }}-tab">
                                        <div class="form-group">
                                            <input type="hidden" name="lang[]" value="{{ $lang['code'] }}">
                                            <label
                                                for="title_{{ $lang['code'] }}">{{ __('Title') }}({{ strtoupper($lang['code']) }})</label>
                                            <input type="text" name="title[]" id="title_{{ $lang['code'] }}"
                                                class="form-control"
                                                value="{{ $translate[$lang['code']]['title'] ?? $category['title'] }}"
                                                {{ $lang['code'] == 'en' ? 'required' : '' }}>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card no_translate_wrapper">
                <div class="card-header">
                    <h3 class="card-title">{{ __('General Info') }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="required_label" for="course">{{ __('Course') }}</label>
                            <select name="course" id="course"
                                class="form-control select2 @error('course') is-invalid @enderror">
                                <option value="">{{ __('Select course') }}</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course', $currentCourseId) == $course->id ? 'selected' : '' }}>
                                        {{ $course->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <label class="required_label" for="order">{{ __('Order') }}</label>
                            <input type="number" name="order" id="order" min="1" max="100"
                                class="form-control @error('order') is-invalid @enderror" step="any"
                                value="{{ old('order', $category->order) }}">
                            @error('order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                <button type="submit" class="btn btn-primary submit">{{ __('Save') }}</button>
            </div>
        </form>
    </div>
</div>

{{-- @push('js') --}}
<script></script>
{{-- @endpush --}}
